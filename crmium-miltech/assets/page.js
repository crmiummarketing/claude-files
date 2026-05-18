/* =========================================================
   PAGE.JS · CRMiUM Bento Style Page
   ---------------------------------------------------------
   Що робить:
   1) Countdown — зворотний відлік до цільової дати
   2) Number counters — анімує цифри в .br-trust-num і .br-what-num
      (від 0 до цільового значення коли блок з'являється у viewport)
   3) Scroll reveal — додає клас .is-revealed секціям коли вони
      входять у viewport (для CSS-анімацій slide-in)
   4) 3D-tilt на спікерах — легкий обертовий ефект на mouse-move
   5) Mobile menu — toggle для бургер-меню + закриття при кліку поза
   ---------------------------------------------------------
   На мобільному (≤760px) анімації входу секцій вимикаються через CSS
   щоб уникнути порожніх ділянок при швидкому скролі.
   ========================================================= */
(function () {
  'use strict';

  const REDUCE = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const IS_MOBILE = window.matchMedia('(max-width: 760px)').matches;
  const body = document.body;

  /* =====================================================
     1) COUNTDOWN — зворотний відлік
     ===================================================== */
  /* Цільова дата і час. Змінюйте під свою подію.
     ISO 8601 з offset +03:00 = EEST (Київ влітку). */
  const TARGET_DATE = new Date('2026-05-27T10:00:00+03:00').getTime();
  const cdRoots = document.querySelectorAll('[data-countdown]');
  if (cdRoots.length) {
    const tick = function () {
      const diff = Math.max(0, TARGET_DATE - Date.now());
      const days  = Math.floor(diff / 86400000);
      const hours = Math.floor((diff % 86400000) / 3600000);
      const mins  = Math.floor((diff % 3600000)  / 60000);
      const secs  = Math.floor((diff % 60000)    / 1000);
      const map = { days, hours, mins, secs };
      cdRoots.forEach(function (root) {
        root.querySelectorAll('[data-cd]').forEach(function (c) {
          const v = map[c.dataset.cd];
          if (v != null) c.textContent = String(v).padStart(2, '0');
        });
      });
    };
    tick();
    setInterval(tick, 1000);
  }

  /* =====================================================
     2) NUMBER COUNTERS — анімація цифр від 0 до target
     Активуються тільки для елементів з [data-counter].
     Easing — ease-out quartic (1-(1-p)^4). Тривалість 1800ms.
     ВАЖЛИВО: counter ЗАВЖДИ працює (НЕ респектує prefers-reduced-motion),
     бо це не вестибулярно-тригерна анімація — числа просто плавно
     рахуються вгору, ніяких різких рухів. UX-вирішення.
     ===================================================== */
  function animateNumberNode(node, target, duration) {
    let start = null;
    const tick = function (now) {
      if (!start) start = now;
      const progress = Math.min((now - start) / duration, 1);
      /* ease-out quartic — повільніший хвіст, дуже soft посадка */
      const ease = 1 - Math.pow(1 - progress, 4);
      node.data = String(Math.round(target * ease));
      if (progress < 1) requestAnimationFrame(tick);
      else node.data = String(target);
    };
    requestAnimationFrame(tick);
  }

  function initNumberCounter(el) {
    const node = Array.from(el.childNodes).find(function (n) {
      return n.nodeType === Node.TEXT_NODE && /\d/.test(n.textContent);
    });
    if (!node) return;
    const text = node.textContent;
    const match = text.match(/(\d+)/);
    if (!match) return;
    const target = parseInt(match[1], 10);
    if (!isFinite(target) || target <= 0) return;
    const prefix = text.substring(0, match.index);
    const suffix = text.substring(match.index + match[1].length);
    let valueNode = node;
    if (prefix || suffix) {
      const beforeText = document.createTextNode(prefix);
      const numText = document.createTextNode('0');
      const afterText = document.createTextNode(suffix);
      const parent = node.parentNode;
      parent.insertBefore(beforeText, node);
      parent.insertBefore(numText, node);
      parent.insertBefore(afterText, node);
      parent.removeChild(node);
      valueNode = numText;
    } else {
      valueNode.data = '0';
    }
    if (!('IntersectionObserver' in window)) {
      animateNumberNode(valueNode, target, 1800);
      return;
    }
    let done = false;
    const io = new IntersectionObserver(function (entries) {
      if (entries[0].isIntersecting && !done) {
        done = true;
        animateNumberNode(valueNode, target, 1800);
        io.unobserve(el);
      }
    }, { threshold: 0.5 });
    io.observe(el);
  }

  function setupNumberCounters() {
    /* ВАЖЛИВО: counter лише для елементів з data-counter (500+ і 55+) */
    document.querySelectorAll('[data-counter]').forEach(initNumberCounter);
  }

  /* =====================================================
     3) SCROLL REVEAL
     - Section-level IO: додає .is-revealed секціям (для секційних
       заголовків .br-section-head які ще використовують transition).
     - Card-level IO: ОКРЕМО спостерігає за КОЖНОЮ карткою і
       запускає її animation через animationPlayState='running'.
       Це матчить референс-патерн (один observer per element)
       і дає правильний "fly-in" ефект на мобільному, де картки
       з'являються по-черзі з прокруткою, а не всі разом.
     ===================================================== */
  function setupScrollReveal() {
    if (!('IntersectionObserver' in window)) return;

    /* Section-level — для .br-section-head left/right slide */
    const sections = document.querySelectorAll('.brand-page > .br-section');
    if (sections.length) {
      const sectionIO = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-revealed');
            sectionIO.unobserve(entry.target);
          }
        });
      }, { threshold: 0.06, rootMargin: '0px 0px 200px 0px' });
      sections.forEach(function (s) { sectionIO.observe(s); });
    }

    /* Card-level — кожна картка має власний IO trigger */
    const cardSelector = [
      '.br-pain',
      '.br-what-card',
      '.br-flex-card',
      '.br-tl-card',
      '.br-speaker',
      '.br-faq-item',
      '.br-final-info',
      '.br-form-wrap'
    ].join(', ');
    const cards = document.querySelectorAll(cardSelector);
    if (!cards.length) return;
    const cardIO = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.style.animationPlayState = 'running';
          cardIO.unobserve(entry.target);
        }
      });
    }, { threshold: 0.06, rootMargin: '0px 0px -10% 0px' });
    cards.forEach(function (c) { cardIO.observe(c); });
  }

  /* =====================================================
     4) 3D-TILT на .br-speaker[data-tilt]
     ===================================================== */
  const TILT_MAX = 7;
  const TILT_SCALE = 1.025;
  const tiltAttached = new WeakSet();

  function attachTilt(card) {
    if (tiltAttached.has(card)) return;
    tiltAttached.add(card);
    let raf = null;
    let rect = null;

    card.addEventListener('mouseenter', function () {
      rect = card.getBoundingClientRect();
      card.style.transition = 'transform 0.18s cubic-bezier(0.16, 1, 0.3, 1)';
    });
    card.addEventListener('mousemove', function (e) {
      if (!rect) rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      const cx = rect.width / 2;
      const cy = rect.height / 2;
      const rotY = ((x - cx) / cx) * TILT_MAX;
      const rotX = -((y - cy) / cy) * TILT_MAX;
      if (raf) cancelAnimationFrame(raf);
      raf = requestAnimationFrame(function () {
        card.style.transform =
          'perspective(900px) rotateX(' + rotX.toFixed(2) + 'deg) ' +
          'rotateY(' + rotY.toFixed(2) + 'deg) ' +
          'scale3d(' + TILT_SCALE + ',' + TILT_SCALE + ',1)';
      });
    });
    card.addEventListener('mouseleave', function () {
      if (raf) cancelAnimationFrame(raf);
      card.style.transition = 'transform 0.55s cubic-bezier(0.16, 1, 0.3, 1)';
      card.style.transform = '';
      rect = null;
    });
  }

  function setupTilt() {
    if (REDUCE || IS_MOBILE) return;
    document.querySelectorAll('.br-speaker[data-tilt]').forEach(attachTilt);
  }

  /* =====================================================
     5) MOBILE MENU
     ===================================================== */
  function setupMobileMenu() {
    const burger = document.querySelector('.br-burger');
    const mnav = document.querySelector('.br-mnav');
    if (!burger || !mnav) return;
    if (burger.dataset.bound === '1') return;
    burger.dataset.bound = '1';

    burger.addEventListener('click', function () {
      const open = mnav.classList.toggle('is-open');
      burger.classList.toggle('is-open', open);
      burger.setAttribute('aria-expanded', open ? 'true' : 'false');
      mnav.setAttribute('aria-hidden', open ? 'false' : 'true');
    });
    mnav.addEventListener('click', function (e) {
      if (e.target.tagName === 'A') {
        mnav.classList.remove('is-open');
        burger.classList.remove('is-open');
        burger.setAttribute('aria-expanded', 'false');
        mnav.setAttribute('aria-hidden', 'true');
      }
    });
  }

  /* =====================================================
     INIT
     ===================================================== */
  function init() {
    setupNumberCounters();
    setupScrollReveal();
    setupTilt();
    setupMobileMenu();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
