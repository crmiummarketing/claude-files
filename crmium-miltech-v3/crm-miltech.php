<?php
/*
Template Name: CRM Miltech
Template Post Type: page
*/
get_header();

/* === КОНФІГ ПОПАПА (топбар + hero + бургер CTA) === */
$popup_title       = 'Консультація щодо Odoo для виробництва';
$popup_btn_label   = 'Замовити консультацію';
$popup_ordertype   = 'Odoo ERP Miltech';
$popup_ga_event    = 'zakaz-cl';
$popup_ga_category = 'zakaz';

/* === КОНФІГ ВБУДОВАНОЇ CF7-ФОРМИ (нижній блок) ===
   bez-nazvy-2 — та сама форма, що у попапі "Замовити консультацію" (3 поля: Ім'я / Телефон / E-mail). */
$cf7_key       = 'bez-nazvy-2';
$form_position = 'miltech-konsultatsiya';
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Onest:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style id="bento-miltech-css">
/* ====== PALETTE ====== */
body.page-template-crm-miltech[data-palette="A"],
body.page-template-crm-miltech {
  --c-bg:#15171C; --c-card:#1B1E25; --c-dark:#0E1015; --c-ink:#FFFFFF;
  --c-ink-2:rgba(255,255,255,0.62); --c-ink-3:rgba(255,255,255,0.38);
  --c-line:rgba(255,255,255,0.10); --c-tint-soft:rgba(255,255,255,0.05); --c-tint-bold:rgba(255,255,255,0.16);
  --c-acc:#EF652F; --c-acc-soft:rgba(239,101,47,0.10); --c-acc-mid:rgba(239,101,47,0.25);
  --c-acc-hover:#D45520; --c-acc-light:#F58456;
  --c-acc-ink:#FFFFFF; --c-acc-ink-2:rgba(255,255,255,0.82); --c-acc-ink-3:rgba(255,255,255,0.60); --c-acc-ink-tint:rgba(255,255,255,0.20);
  --font-display:'Onest',system-ui,sans-serif; --font-body:'Onest',system-ui,sans-serif; --font-mono:'JetBrains Mono',ui-monospace,monospace;
}
/* ====== RESET (scoped до .brand-page) ====== */
.brand-page, .brand-page *, .brand-page *::before, .brand-page *::after { box-sizing: border-box; }
.brand-page * { margin: 0; padding: 0; }
.brand-page img, .brand-page svg { display: block; max-width: 100%; }
.brand-page a { color: inherit; text-decoration: none; }
.brand-page button { font: inherit; cursor: pointer; background: none; border: none; color: inherit; }
.brand-page ul { list-style: none; }
.brand-page :focus-visible { outline: 2px solid var(--c-acc); outline-offset: 2px; }
/* ====== BODY + .brand-page ====== */
body.page-template-crm-miltech { background:#0E1015 !important; background-color:#0E1015 !important; background-image:none !important; overflow-x: clip; max-width:100%; min-height:100vh; }
body.page-template-crm-miltech .brand-page {
  display:block; background:#0E1015 !important; background-color:#0E1015 !important; background-image:none !important;
  color: var(--c-ink); font-family: var(--font-body); font-feature-settings:'ss01';
  max-width:1320px; margin:0 auto; padding:100px 24px 96px; position:relative;
}
/* ====== BRAND.CSS (inline, prefix → page-template) ====== */
/* =========================================================
   CONCEPT · CRMiUM BRAND EDITION
   Фірмові кольори: #EF652F + #15171C + #FFFFFF.
   Текст на помаранчевому — ЗАВЖДИ білий.
   Дві окремі картки на першому екрані: pill-меню + rounded hero.
   ========================================================= */

body.page-template-crm-miltech .brand-page { display: block; }

/* ---------- BASE ---------- */

body.page-template-crm-miltech a { text-decoration: none; }

/* ===========================================================
   TOPBAR — окрема pill-картка над hero
   =========================================================== */
body.page-template-crm-miltech .br-topbar {
  /* Липкий — прокручується разом зі сторінкою */
  position: sticky;
  top: 12px;
  z-index: 300;
  background: rgba(21,23,28,0.85);
  backdrop-filter: blur(14px) saturate(140%);
  -webkit-backdrop-filter: blur(14px) saturate(140%);
  border: 1px solid var(--c-line);
  border-radius: 999px;
  padding: 14px 16px 14px 28px;
  display: grid;
  grid-template-columns: auto 1fr auto;
  align-items: center;
  gap: 24px;
  margin-bottom: 16px;
}
body.page-template-crm-miltech .br-logo {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  color: var(--c-ink);
}
body.page-template-crm-miltech .br-logo-img {
  height: 44px;
  width: auto;
}
/* За замовчуванням показуємо dark-bg логотип (білі букви), світлий — приховано.
   Світлі палітри (Editorial, Minimalist) переключають це у своїх .css. */
body.page-template-crm-miltech .br-logo-img--light { display: none; }
body.page-template-crm-miltech .br-logo-sep {
  color: var(--c-ink-2);
  font-size: 18px;
}
body.page-template-crm-miltech .br-logo-event {
  font-family: var(--font-display);
  font-weight: 600;
  font-size: 16px;
  letter-spacing: -0.01em;
  color: var(--c-ink-2);
}
body.page-template-crm-miltech .br-nav {
  display: flex;
  gap: 32px;
  justify-self: center;
  font-size: 15px;
  font-weight: 500;
  color: var(--c-ink-2);
}
body.page-template-crm-miltech .br-nav a { transition: color .2s; }
body.page-template-crm-miltech .br-nav a:hover { color: var(--c-acc); }

body.page-template-crm-miltech .br-topbar-cta {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 12px 22px;
  background: var(--c-acc);
  color: var(--c-acc-ink);
  font-weight: 700;
  font-size: 14px;
  border-radius: 999px;
  transition: background .2s, transform .15s cubic-bezier(0.16, 1, 0.3, 1);
  white-space: nowrap;
}
body.page-template-crm-miltech .br-topbar-cta:hover {
  background: var(--c-acc-hover);
  transform: translateY(-1px);
}
body.page-template-crm-miltech .br-topbar-cta:active { transform: translateY(0) scale(.98); }

/* Hamburger button — desktop hidden */
body.page-template-crm-miltech .br-burger {
  display: none;
  width: 44px;
  height: 44px;
  background: var(--c-tint-soft);
  border: 1px solid var(--c-line);
  border-radius: 999px;
  cursor: pointer;
  position: relative;
  padding: 0;
}
body.page-template-crm-miltech .br-burger span {
  position: absolute;
  left: 12px;
  right: 12px;
  height: 2px;
  background: var(--c-ink);
  border-radius: 2px;
  transition: transform .25s cubic-bezier(0.16, 1, 0.3, 1), opacity .2s, top .25s cubic-bezier(0.16, 1, 0.3, 1);
}
body.page-template-crm-miltech .br-burger span:nth-child(1) { top: 14px; }
body.page-template-crm-miltech .br-burger span:nth-child(2) { top: 21px; }
body.page-template-crm-miltech .br-burger span:nth-child(3) { top: 28px; }
body.page-template-crm-miltech .br-burger.is-open span:nth-child(1) { top: 21px; transform: rotate(45deg); }
body.page-template-crm-miltech .br-burger.is-open span:nth-child(2) { opacity: 0; }
body.page-template-crm-miltech .br-burger.is-open span:nth-child(3) { top: 21px; transform: rotate(-45deg); }

/* Mobile sliding menu — desktop hidden.
   У закритому стані ВЕСЬ контейнер невидимий: border/padding/margin = 0.
   У відкритому — повертаються з плавним переходом. */
body.page-template-crm-miltech .br-mnav {
  display: none;
  flex-direction: column;
  gap: 4px;
  background: var(--c-bg);
  border: 0 solid var(--c-line);
  border-radius: 24px;
  padding: 0;
  margin-bottom: 0;
  max-height: 0;
  overflow: hidden;
  transition: max-height .35s cubic-bezier(0.16, 1, 0.3, 1),
              padding .2s,
              border-width .2s,
              margin-bottom .2s;
}
body.page-template-crm-miltech .br-mnav.is-open {
  max-height: 500px;
  padding: 16px;
  border-width: 1px;
  margin-bottom: 16px;
}
body.page-template-crm-miltech .br-mnav a {
  padding: 14px 18px;
  font-size: 16px;
  font-weight: 500;
  color: var(--c-ink);
  border-radius: 12px;
  transition: background .15s;
}
body.page-template-crm-miltech .br-mnav a:hover { background: var(--c-tint-soft); }
body.page-template-crm-miltech .br-mnav-cta {
  margin-top: 8px;
  background: var(--c-acc) !important;
  color: var(--c-acc-ink) !important;
  text-align: center;
  font-weight: 700 !important;
}

/* ===========================================================
   HERO — окрема rounded картка з glow всередині
   =========================================================== */
body.page-template-crm-miltech .br-hero {
  position: relative;
  background:
    radial-gradient(120% 90% at 90% -10%, rgba(239,101,47,0.22) 0%, transparent 55%),
    radial-gradient(80% 70% at -10% 110%, rgba(239,101,47,0.06) 0%, transparent 55%),
    var(--c-bg);
  border: 1px solid var(--c-line);
  border-radius: 32px;
  padding: 56px 56px 48px;
  overflow: hidden;
  isolation: isolate;
}
body.page-template-crm-miltech .br-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  pointer-events: none;
  z-index: -1;
  opacity: 0.4;
  background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='160' height='160'><filter id='n'><feTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='2'/><feColorMatrix values='0 0 0 0 0  0 0 0 0 0  0 0 0 0 0  0 0 0 0.06 0'/></filter><rect width='100%' height='100%' filter='url(%23n)'/></svg>");
  background-size: 160px 160px;
}

body.page-template-crm-miltech .br-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 12px;
  font-family: var(--font-mono);
  font-size: 12px;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  color: var(--c-acc);
  font-weight: 600;
  margin-bottom: 36px;
  padding: 8px 16px;
  background: var(--c-tint-soft);
  border: 1px solid var(--c-line);
  border-radius: 999px;
}
body.page-template-crm-miltech .br-eyebrow-dot {
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: var(--c-acc);
  box-shadow: 0 0 0 4px var(--c-acc-soft);
  animation: brPulse 2s ease-in-out infinite;
}
@keyframes brPulse {
  0%, 100% { opacity: 1; }
  50% { opacity: 0.55; }
}

body.page-template-crm-miltech .br-h1 {
  font-family: var(--font-display);
  font-weight: 800;
  /* Зменшено для MacBook 13" — раніше було clamp(40, 6.6vw, 88).
     Тепер max 68px замість 88, і scaling factor нижче 5vw. */
  font-size: clamp(36px, 5vw, 68px);
  line-height: 0.98;
  letter-spacing: -0.035em;
  /* На малих екранах "Трансформація" — довге слово, дозволяємо переносити */
  overflow-wrap: break-word;
  word-break: normal;
  hyphens: auto;
  color: var(--c-ink);
  margin-bottom: 28px;
  max-width: 1080px;
}
body.page-template-crm-miltech .br-h1 em {
  font-style: normal;
  color: var(--c-acc);
  font-weight: 800;
}

body.page-template-crm-miltech .br-lead {
  font-size: 19px;
  line-height: 1.55;
  color: var(--c-ink-2);
  max-width: 720px;
  margin-bottom: 44px;
}

body.page-template-crm-miltech .br-hero-row {
  display: flex;
  flex-wrap: wrap;
  gap: 32px;
  align-items: center;
  margin-bottom: 56px;
}

body.page-template-crm-miltech .br-countdown {
  display: flex;
  gap: 8px;
  align-items: flex-end;
  font-family: var(--font-display);
}
body.page-template-crm-miltech .br-cd-cell {
  display: flex;
  flex-direction: column;
  align-items: center;
  background: var(--c-card);
  border: 1px solid var(--c-line);
  border-radius: 14px;
  padding: 14px 18px 10px;
  min-width: 78px;
}
body.page-template-crm-miltech .br-cd-cell b {
  font-size: 36px;
  font-weight: 700;
  letter-spacing: -0.03em;
  line-height: 1;
  color: var(--c-ink);
  font-variant-numeric: tabular-nums;
}
body.page-template-crm-miltech .br-cd-cell span {
  font-size: 11px;
  color: var(--c-ink-2);
  text-transform: uppercase;
  letter-spacing: 0.12em;
  margin-top: 6px;
}
body.page-template-crm-miltech .br-cd-sep {
  font-size: 28px;
  color: var(--c-ink-2);
  align-self: center;
  font-weight: 700;
}

body.page-template-crm-miltech .br-hero-cta {
  display: flex;
  flex-direction: column;
  gap: 8px;
}
body.page-template-crm-miltech .br-cta-primary {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  padding: 18px 28px;
  background: var(--c-acc);
  color: var(--c-acc-ink);
  font-weight: 700;
  font-size: 16px;
  border-radius: 14px;
  letter-spacing: -0.01em;
  white-space: nowrap;
  transition: background .2s, transform .15s cubic-bezier(0.16, 1, 0.3, 1);
}
body.page-template-crm-miltech .br-cta-primary:hover {
  background: var(--c-acc-hover);
  transform: translateY(-2px);
}
body.page-template-crm-miltech .br-cta-primary:active { transform: translateY(0) scale(.98); }
body.page-template-crm-miltech .br-cta-sub {
  font-size: 13px;
  color: var(--c-ink-2);
  max-width: 380px;
  line-height: 1.5;
}

/* TRUST GRID */
body.page-template-crm-miltech .br-trust {
  display: grid;
  grid-template-columns: 2fr 1fr 1fr 1fr 1fr;
  gap: 16px;
  margin-top: 48px;
}
body.page-template-crm-miltech .br-trust-card {
  background: var(--c-card);
  border: 1px solid var(--c-line);
  border-radius: 18px;
  padding: 24px 22px;
  display: flex;
  flex-direction: column;
  gap: 8px;
  transition: border-color .3s cubic-bezier(.22,1,.36,1),
              transform .3s cubic-bezier(.22,1,.36,1),
              box-shadow .3s cubic-bezier(.22,1,.36,1);
}
body.page-template-crm-miltech .br-trust-card:hover {
  border-color: var(--c-acc-mid);
  transform: translateY(-4px);
  box-shadow: 0 12px 28px rgba(239,101,47,0.14);
}
body.page-template-crm-miltech .br-trust-main {
  background: var(--c-acc);
  color: var(--c-acc-ink);
  border-color: transparent;
  position: relative;
  overflow: hidden;
}
body.page-template-crm-miltech .br-trust-tag {
  font-size: 11px;
  letter-spacing: 0.16em;
  text-transform: uppercase;
  font-weight: 600;
  font-family: var(--font-mono);
  color: var(--c-ink-2);
}
body.page-template-crm-miltech .br-trust-main .br-trust-tag { color: var(--c-acc-ink-2); }
body.page-template-crm-miltech .br-trust-h {
  font-family: var(--font-display);
  font-weight: 700;
  font-size: 22px;
  line-height: 1.15;
  letter-spacing: -0.02em;
}
body.page-template-crm-miltech .br-trust-num {
  font-family: var(--font-display);
  font-weight: 800;
  font-size: 38px;
  line-height: 1;
  letter-spacing: -0.04em;
  color: var(--c-ink);
}
body.page-template-crm-miltech .br-trust-num span {
  color: var(--c-acc);
  font-size: 28px;
}
body.page-template-crm-miltech .br-trust-l {
  font-size: 13px;
  color: var(--c-ink-2);
  line-height: 1.4;
}

/* ===========================================================
   SECTION HEAD (shared)
   =========================================================== */
body.page-template-crm-miltech .br-section { padding: 120px 0 0; }
body.page-template-crm-miltech .br-section-head {
  margin-bottom: 44px;
  max-width: 920px;
}
body.page-template-crm-miltech .br-num {
  font-family: var(--font-mono);
  font-size: 12px;
  letter-spacing: 0.2em;
  text-transform: uppercase;
  color: var(--c-acc);
  font-weight: 600;
  margin-bottom: 18px;
}
body.page-template-crm-miltech .br-h2 {
  font-family: var(--font-display);
  font-weight: 800;
  /* Зменшено з max 64px до 52px для MacBook 13" */
  font-size: clamp(28px, 3.8vw, 52px);
  line-height: 1.05;
  letter-spacing: -0.03em;
  color: var(--c-ink);
}
body.page-template-crm-miltech .br-h2 em {
  font-style: normal;
  color: var(--c-acc);
  font-weight: 800;
}
body.page-template-crm-miltech .br-section-sub {
  font-size: 17px;
  line-height: 1.55;
  color: var(--c-ink-2);
  margin-top: 18px;
  max-width: 700px;
}

/* ===========================================================
   PAINS
   =========================================================== */
body.page-template-crm-miltech .br-pains-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}
body.page-template-crm-miltech .br-pain {
  background: var(--c-card);
  border: 1px solid var(--c-line);
  border-radius: 22px;
  padding: 32px 28px;
  display: flex;
  flex-direction: column;
  gap: 16px;
  transition: border-color .3s cubic-bezier(.22,1,.36,1),
              transform .3s cubic-bezier(.22,1,.36,1),
              box-shadow .3s cubic-bezier(.22,1,.36,1);
}
body.page-template-crm-miltech .br-pain:hover {
  border-color: var(--c-acc-mid);
  transform: translateY(-4px);
  box-shadow: 0 12px 28px rgba(239,101,47,0.14);
}
body.page-template-crm-miltech .br-pain-tag {
  font-family: var(--font-mono);
  font-size: 11px;
  letter-spacing: 0.16em;
  text-transform: uppercase;
  color: var(--c-acc);
  font-weight: 600;
}
body.page-template-crm-miltech .br-pain-h {
  font-family: var(--font-display);
  font-weight: 800;
  font-size: 28px;
  line-height: 1.1;
  letter-spacing: -0.02em;
  color: var(--c-ink);
}
body.page-template-crm-miltech .br-pain-h em {
  font-style: italic;
  color: var(--c-acc);
}
body.page-template-crm-miltech .br-pain-list {
  display: flex;
  flex-direction: column;
  gap: 10px;
  font-size: 15px;
  line-height: 1.5;
  color: var(--c-ink-2);
}
body.page-template-crm-miltech .br-pain-list li {
  padding-left: 18px;
  position: relative;
}
body.page-template-crm-miltech .br-pain-list li::before {
  content: '—';
  position: absolute;
  left: 0;
  color: var(--c-acc);
}

body.page-template-crm-miltech .br-pains-summary {
  margin-top: 32px;
  padding: 28px 32px;
  background: var(--c-acc);
  color: var(--c-acc-ink);
  border-radius: 18px;
  font-size: 18px;
  font-weight: 600;
  line-height: 1.45;
}

/* ===========================================================
   WHAT (Bento grid про Zoho) — більший шрифт у categories
   =========================================================== */
body.page-template-crm-miltech .br-what-grid {
  display: grid;
  grid-template-columns: 2fr 1fr 1fr;
  grid-auto-rows: minmax(180px, auto);
  gap: 16px;
}
body.page-template-crm-miltech .br-what-card {
  background: var(--c-card);
  border: 1px solid var(--c-line);
  border-radius: 22px;
  padding: 28px 28px 26px;
  display: flex;
  flex-direction: column;
  gap: 10px;
  transition: border-color .3s cubic-bezier(.22,1,.36,1),
              transform .3s cubic-bezier(.22,1,.36,1),
              box-shadow .3s cubic-bezier(.22,1,.36,1);
}
body.page-template-crm-miltech .br-what-card:hover {
  border-color: var(--c-acc-mid);
  transform: translateY(-4px);
  box-shadow: 0 12px 28px rgba(239,101,47,0.14);
}
body.page-template-crm-miltech .br-what-big {
  grid-row: span 2;
  justify-content: space-between;
}
/* Bento accent card "100M+" — ВИКЛЮЧЕННЯ: тут текст ТЕМНИЙ на помаранчі.
   На відміну від інших accent-поверхонь, які використовують білий. */
body.page-template-crm-miltech .br-what-card--accent {
  background: var(--c-acc);
  color: #15171C;
  border-color: transparent;
}
body.page-template-crm-miltech .br-what-num {
  font-family: var(--font-display);
  font-weight: 800;
  font-size: 68px;
  line-height: 1;
  letter-spacing: -0.04em;
  color: var(--c-ink);
}
body.page-template-crm-miltech .br-what-card--accent .br-what-num { color: #15171C; }
body.page-template-crm-miltech .br-what-num span {
  font-size: 48px;
  color: var(--c-acc);
}
body.page-template-crm-miltech .br-what-card--accent .br-what-num span { color: #15171C; opacity: 0.85; }
body.page-template-crm-miltech .br-what-l {
  font-size: 16px;
  color: var(--c-ink-2);
  line-height: 1.45;
}
body.page-template-crm-miltech .br-what-card--accent .br-what-l { color: var(--c-acc-ink-2); }
/* Categories — більший шрифт за фідбеком */
body.page-template-crm-miltech .br-what-cats {
  font-family: var(--font-display);
  font-size: 17px;
  line-height: 1.45;
  color: var(--c-ink);
  font-weight: 600;
  margin-top: auto;
  letter-spacing: -0.01em;
}
body.page-template-crm-miltech .br-what-cats b {
  color: var(--c-acc);
  font-weight: 600;
}
body.page-template-crm-miltech .br-what-tag {
  font-family: var(--font-mono);
  font-size: 11px;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  color: var(--c-acc);
  font-weight: 600;
}
body.page-template-crm-miltech .br-what-h {
  font-family: var(--font-display);
  font-weight: 700;
  font-size: 22px;
  line-height: 1.15;
  letter-spacing: -0.02em;
  color: var(--c-ink);
}
body.page-template-crm-miltech .br-what-ai .br-what-tag { color: var(--c-acc); }

/* ===========================================================
   FLEXIBILITY
   =========================================================== */
body.page-template-crm-miltech .br-flex-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 16px;
}
body.page-template-crm-miltech .br-flex-card {
  background: var(--c-card);
  border: 1px solid var(--c-line);
  border-radius: 22px;
  padding: 28px 26px;
  display: flex;
  flex-direction: column;
  gap: 12px;
  transition: border-color .3s cubic-bezier(.22,1,.36,1),
              transform .3s cubic-bezier(.22,1,.36,1),
              box-shadow .3s cubic-bezier(.22,1,.36,1);
}
body.page-template-crm-miltech .br-flex-card:hover {
  border-color: var(--c-acc-mid);
  transform: translateY(-4px);
  box-shadow: 0 12px 28px rgba(239,101,47,0.14);
}
body.page-template-crm-miltech .br-flex-card--accent {
  grid-column: span 2;
  background: var(--c-acc);
  color: var(--c-acc-ink);
  border-color: transparent;
}
body.page-template-crm-miltech .br-flex-icon {
  width: 44px;
  height: 44px;
  border-radius: 12px;
  background: var(--c-acc-soft);
  color: var(--c-acc);
  display: grid;
  place-items: center;
  font-size: 20px;
  font-weight: 700;
}
body.page-template-crm-miltech .br-flex-card--accent .br-flex-icon {
  background: var(--c-acc-ink-tint);
  color: var(--c-acc-ink);
}
body.page-template-crm-miltech .br-flex-card h3 {
  font-family: var(--font-display);
  font-weight: 700;
  font-size: 19px;
  letter-spacing: -0.02em;
  color: var(--c-ink);
}
body.page-template-crm-miltech .br-flex-card--accent h3 { color: var(--c-acc-ink); }
body.page-template-crm-miltech .br-flex-card p {
  font-size: 14px;
  line-height: 1.5;
  color: var(--c-ink-2);
}
/* ПРИКЛАД-картка — більший шрифт, БІЛИЙ текст. */
body.page-template-crm-miltech .br-flex-card--accent p {
  color: #FFFFFF;
  font-size: 16px;
  line-height: 1.5;
}
body.page-template-crm-miltech .br-flex-card--accent p b {
  font-size: 18px;
  font-weight: 700;
  color: #FFFFFF;
}
body.page-template-crm-miltech .br-flex-tag {
  font-family: var(--font-mono);
  font-size: 11px;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  font-weight: 600;
  color: var(--c-acc-ink-2);
}

/* ===========================================================
   SCHEDULE (timeline) — з bullet-points замість grid
   =========================================================== */
body.page-template-crm-miltech .br-schedule-list {
  display: grid;
  grid-template-columns: 130px 1fr;
  gap: 0;
  position: relative;
}
body.page-template-crm-miltech .br-schedule-list::before {
  content: '';
  position: absolute;
  left: 130px;
  top: 8px;
  bottom: 8px;
  width: 1px;
  background: linear-gradient(180deg, transparent 0%, var(--c-acc-mid) 12%, var(--c-acc-mid) 88%, transparent 100%);
}
body.page-template-crm-miltech .br-tl-time {
  font-family: var(--font-mono);
  font-size: 14px;
  font-weight: 600;
  color: var(--c-ink);
  padding: 32px 24px 32px 0;
  text-align: right;
  align-self: start;
}
body.page-template-crm-miltech .br-tl-time span {
  display: block;
  font-size: 11px;
  color: var(--c-ink-2);
  letter-spacing: 0.12em;
  margin-top: 4px;
}
body.page-template-crm-miltech .br-tl-card {
  background: var(--c-card);
  border: 1px solid var(--c-line);
  border-radius: 18px;
  padding: 28px 32px;
  margin: 12px 0 12px 36px;
  position: relative;
  transition: border-color .3s cubic-bezier(.22,1,.36,1),
              transform .3s cubic-bezier(.22,1,.36,1),
              box-shadow .3s cubic-bezier(.22,1,.36,1);
}
body.page-template-crm-miltech .br-tl-card:hover {
  border-color: var(--c-acc-mid);
  transform: translateY(-4px);
  box-shadow: 0 12px 28px rgba(239,101,47,0.14);
}
body.page-template-crm-miltech .br-tl-card::before {
  content: '';
  position: absolute;
  left: -42px;
  top: 36px;
  width: 13px;
  height: 13px;
  border-radius: 50%;
  background: var(--c-bg);
  border: 2px solid var(--c-acc);
}
body.page-template-crm-miltech .br-tl-card--demo {
  background: var(--c-acc-soft);
  border-color: var(--c-acc-mid);
}
body.page-template-crm-miltech .br-tl-card--qa {
  background: var(--c-acc-soft);
}
body.page-template-crm-miltech .br-tl-tag {
  display: inline-block;
  font-family: var(--font-mono);
  font-size: 11px;
  letter-spacing: 0.16em;
  text-transform: uppercase;
  color: var(--c-acc);
  font-weight: 600;
  margin-bottom: 12px;
}
body.page-template-crm-miltech .br-tl-h {
  font-family: var(--font-display);
  font-weight: 700;
  font-size: 22px;
  line-height: 1.2;
  letter-spacing: -0.02em;
  color: var(--c-ink);
  margin-bottom: 8px;
}
body.page-template-crm-miltech .br-tl-h em {
  font-style: italic;
  color: var(--c-acc);
}
body.page-template-crm-miltech .br-tl-speaker {
  font-size: 14px;
  color: var(--c-ink-2);
  line-height: 1.5;
  margin-bottom: 14px;
}
body.page-template-crm-miltech .br-tl-speaker b { color: var(--c-ink); font-weight: 600; }

/* Bullet-список тем в карточці */
body.page-template-crm-miltech .br-tl-points {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: 10px;
  margin-top: 14px;
  padding-top: 16px;
  border-top: 1px solid var(--c-line);
}
body.page-template-crm-miltech .br-tl-points li {
  padding-left: 24px;
  position: relative;
  font-size: 15px;
  line-height: 1.5;
  color: var(--c-ink);
}
body.page-template-crm-miltech .br-tl-points li::before {
  content: '';
  position: absolute;
  left: 0;
  top: 9px;
  width: 12px;
  height: 2px;
  background: var(--c-acc);
  border-radius: 1px;
}

/* Break row */
body.page-template-crm-miltech .br-tl-break {
  grid-column: 2;
  margin: 8px 0 8px 36px;
  display: flex;
  align-items: center;
  gap: 12px;
  padding: 14px 22px;
  background: transparent;
  border: 1px dashed var(--c-line);
  border-radius: 999px;
  font-family: var(--font-mono);
  font-size: 12px;
  color: var(--c-ink-2);
  letter-spacing: 0.12em;
  text-transform: uppercase;
  width: max-content;
}
body.page-template-crm-miltech .br-tl-break-icon {
  width: 18px;
  height: 18px;
  color: var(--c-acc);
}

/* ===========================================================
   SPEAKERS — 3 col desktop, 2 col tablet, 2 col phone (smaller)
   =========================================================== */
body.page-template-crm-miltech .br-speakers-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
  perspective: 1200px;
}
body.page-template-crm-miltech .br-speaker {
  background: var(--c-card);
  border: 1px solid var(--c-line);
  border-radius: 22px;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  transition: border-color .3s cubic-bezier(.22,1,.36,1),
              transform .55s cubic-bezier(0.16, 1, 0.3, 1),
              box-shadow .3s cubic-bezier(.22,1,.36,1);
  transform-style: preserve-3d;
  will-change: transform;
}
body.page-template-crm-miltech .br-speaker:hover {
  border-color: var(--c-acc-mid);
  box-shadow: 0 12px 28px rgba(239,101,47,0.14);
}
body.page-template-crm-miltech .br-speaker-photo-wrap {
  position: relative;
  /* Square (1/1) — фото компактні, картка вміщається на 13" MacBook
     разом з біо нижче. Object-position top-center зберігає обличчя у фокусі. */
  aspect-ratio: 1 / 1;
  overflow: hidden;
  background: var(--c-tint-soft);
}
body.page-template-crm-miltech .br-speaker-photo {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: top center;
  transition: transform 0.55s cubic-bezier(0.16, 1, 0.3, 1);
}
body.page-template-crm-miltech .br-speaker:hover .br-speaker-photo { transform: scale(1.045); }
body.page-template-crm-miltech .br-speaker-photo-fade {
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  height: 50%;
  pointer-events: none;
  background: linear-gradient(180deg, transparent 0%, var(--c-card) 100%);
}
body.page-template-crm-miltech .br-speaker-body {
  padding: 22px 26px 28px;
  display: flex;
  flex-direction: column;
  gap: 6px;
}
body.page-template-crm-miltech .br-speaker-name {
  font-family: var(--font-display);
  font-weight: 700;
  font-size: 20px;
  letter-spacing: -0.02em;
  color: var(--c-ink);
}
body.page-template-crm-miltech .br-speaker-role {
  font-size: 14px;
  color: var(--c-acc);
  font-weight: 600;
  margin-bottom: 4px;
}
body.page-template-crm-miltech .br-speaker-bio {
  font-size: 14px;
  line-height: 1.55;
  color: var(--c-ink-2);
}

/* ===========================================================
   FAQ
   =========================================================== */
body.page-template-crm-miltech .br-faq-list { display: flex; flex-direction: column; gap: 12px; }
body.page-template-crm-miltech .br-faq-item {
  background: var(--c-card);
  border: 1px solid var(--c-line);
  border-radius: 16px;
  padding: 22px 26px;
  transition: border-color .3s cubic-bezier(.22,1,.36,1),
              transform .3s cubic-bezier(.22,1,.36,1),
              box-shadow .3s cubic-bezier(.22,1,.36,1);
}
body.page-template-crm-miltech .br-faq-item:hover {
  border-color: var(--c-acc-mid);
  transform: translateY(-4px);
  box-shadow: 0 12px 28px rgba(239,101,47,0.14);
}
body.page-template-crm-miltech .br-faq-item summary {
  cursor: pointer;
  font-family: var(--font-display);
  font-weight: 700;
  font-size: 17px;
  letter-spacing: -0.01em;
  color: var(--c-ink);
  list-style: none;
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 16px;
}
body.page-template-crm-miltech .br-faq-item summary::-webkit-details-marker { display: none; }
body.page-template-crm-miltech .br-faq-item summary::after {
  content: '+';
  color: var(--c-acc);
  font-size: 22px;
  font-weight: 700;
  transition: transform .25s;
}
body.page-template-crm-miltech .br-faq-item[open] summary::after { transform: rotate(45deg); }
body.page-template-crm-miltech .br-faq-item p {
  margin-top: 14px;
  font-size: 15px;
  line-height: 1.6;
  color: var(--c-ink-2);
}

/* ===========================================================
   FORM
   =========================================================== */
body.page-template-crm-miltech .br-final-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 36px;
  align-items: stretch;
}
body.page-template-crm-miltech .br-final-info {
  background: var(--c-card);
  border: 1px solid var(--c-line);
  border-radius: 24px;
  padding: 40px;
  display: flex;
  flex-direction: column;
  gap: 16px;
  transition: border-color .3s cubic-bezier(.22,1,.36,1),
              transform .3s cubic-bezier(.22,1,.36,1),
              box-shadow .3s cubic-bezier(.22,1,.36,1);
}
body.page-template-crm-miltech .br-final-info:hover {
  border-color: var(--c-acc-mid);
  transform: translateY(-4px);
  box-shadow: 0 12px 28px rgba(239,101,47,0.14);
}
body.page-template-crm-miltech .br-final-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  font-family: var(--font-mono);
  font-size: 12px;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  color: var(--c-acc);
  font-weight: 600;
}
body.page-template-crm-miltech .br-final-h {
  font-family: var(--font-display);
  font-weight: 800;
  font-size: clamp(28px, 3.4vw, 40px);
  line-height: 1.1;
  letter-spacing: -0.025em;
  color: var(--c-ink);
}
body.page-template-crm-miltech .br-final-h em { font-style: italic; color: var(--c-acc); }
body.page-template-crm-miltech .br-final-sub {
  font-size: 16px;
  line-height: 1.55;
  color: var(--c-ink-2);
}
body.page-template-crm-miltech .br-final-meta {
  margin-top: auto;
  font-size: 14px;
  color: var(--c-ink-2);
  padding-top: 18px;
  border-top: 1px solid var(--c-line);
}

body.page-template-crm-miltech .br-form-wrap {
  background: var(--c-card);
  border: 1px solid var(--c-line);
  border-radius: 24px;
  padding: 40px;
  transition: border-color .3s cubic-bezier(.22,1,.36,1),
              transform .3s cubic-bezier(.22,1,.36,1),
              box-shadow .3s cubic-bezier(.22,1,.36,1);
}
body.page-template-crm-miltech .br-form-wrap:hover {
  border-color: var(--c-acc-mid);
  transform: translateY(-4px);
  box-shadow: 0 12px 28px rgba(239,101,47,0.14);
}
body.page-template-crm-miltech .br-form-eyebrow {
  font-family: var(--font-mono);
  font-size: 12px;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  color: var(--c-acc);
  font-weight: 600;
  margin-bottom: 24px;
}
body.page-template-crm-miltech .br-form { display: flex; flex-direction: column; gap: 16px; }
body.page-template-crm-miltech .br-form-row { display: flex; flex-direction: column; gap: 8px; }
body.page-template-crm-miltech .br-form-row label {
  font-size: 13px;
  font-weight: 600;
  color: var(--c-ink-2);
  letter-spacing: 0.02em;
}
body.page-template-crm-miltech .br-form-row input,
body.page-template-crm-miltech .br-form-row textarea {
  background: var(--c-tint-soft);
  border: 1px solid var(--c-line);
  border-radius: 12px;
  padding: 14px 18px;
  font-size: 16px;
  font-family: var(--font-body);
  color: var(--c-ink);
  transition: border-color .2s, background .2s;
  width: 100%;
}
body.page-template-crm-miltech .br-form-row input::placeholder,
body.page-template-crm-miltech .br-form-row textarea::placeholder { color: var(--c-ink-3); }
body.page-template-crm-miltech .br-form-row input:focus,
body.page-template-crm-miltech .br-form-row textarea:focus {
  outline: none;
  border-color: var(--c-acc);
  background: var(--c-tint-bold);
}
body.page-template-crm-miltech .br-form-submit {
  margin-top: 8px;
  background: var(--c-acc);
  color: var(--c-acc-ink);
  font-family: var(--font-display);
  font-weight: 700;
  font-size: 16px;
  padding: 18px 28px;
  border-radius: 14px;
  border: none;
  cursor: pointer;
  transition: background .2s, transform .15s cubic-bezier(0.16, 1, 0.3, 1);
}
body.page-template-crm-miltech .br-form-submit:hover {
  background: var(--c-acc-hover);
  transform: translateY(-2px);
}
body.page-template-crm-miltech .br-form-submit:active { transform: translateY(0) scale(.98); }

/* ===========================================================
   FOOTER
   =========================================================== */
body.page-template-crm-miltech .br-foot {
  margin-top: 96px;
  padding: 48px 0 24px;
  border-top: 1px solid var(--c-line);
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-size: 13px;
  color: var(--c-ink-2);
  flex-wrap: wrap;
  gap: 16px;
}
body.page-template-crm-miltech .br-foot b { color: var(--c-ink); font-weight: 600; }

/* ===========================================================
   RESPONSIVE
   =========================================================== */
@media (max-width: 1100px) {
  body.page-template-crm-miltech .br-trust { grid-template-columns: 1fr 1fr 1fr; }
  body.page-template-crm-miltech .br-trust-main { grid-column: 1 / -1; }
  body.page-template-crm-miltech .br-pains-grid { grid-template-columns: 1fr 1fr; }
  body.page-template-crm-miltech .br-pain:nth-child(3) { grid-column: 1 / -1; }
  body.page-template-crm-miltech .br-what-grid { grid-template-columns: 1fr 1fr; }
  body.page-template-crm-miltech .br-what-big { grid-row: span 2; grid-column: 1 / -1; }
  body.page-template-crm-miltech .br-flex-grid { grid-template-columns: 1fr 1fr; }
  body.page-template-crm-miltech .br-flex-card--accent { grid-column: 1 / -1; }
  body.page-template-crm-miltech .br-speakers-grid { grid-template-columns: repeat(2, 1fr); }
  body.page-template-crm-miltech .br-final-grid { grid-template-columns: 1fr; }
}

/* ===========================================================
   SHORT-VIEWPORT DESKTOP (MacBook 13" — типово 1280-1440 × 720-900)
   Hero займає ~весь viewport через min-height: calc(100vh - 96px),
   тож наступна секція гарантовано починається ЗА фолдом.
   Контент стискається помірно, дорогу пустоту знизу заповнює
   радіальний glow картки.
   =========================================================== */
@media (min-width: 1100px) and (max-height: 900px) {
  body.page-template-crm-miltech .br-hero {
    /* Hero card заповнює viewport від topbar до низу.
       96px = topbar (~64) + page-padding-top + safety. */
    min-height: calc(100vh - 96px);
    padding: 44px 56px 40px;
  }
  body.page-template-crm-miltech .br-eyebrow {
    margin-bottom: 22px;
  }
  body.page-template-crm-miltech .br-h1 {
    font-size: clamp(36px, 4.2vw, 54px);
    margin-bottom: 20px;
  }
  body.page-template-crm-miltech .br-lead {
    font-size: 16px;
    line-height: 1.5;
    margin-bottom: 30px;
    max-width: 660px;
  }
  body.page-template-crm-miltech .br-hero-row {
    margin-bottom: 0;
    gap: 24px;
  }
  body.page-template-crm-miltech .br-cd-cell {
    padding: 11px 15px 8px;
    min-width: 66px;
  }
  body.page-template-crm-miltech .br-cd-cell b { font-size: 28px; }
  body.page-template-crm-miltech .br-cta-primary {
    padding: 15px 24px;
    font-size: 15px;
  }
  body.page-template-crm-miltech .br-trust {
    margin-top: 28px;
    gap: 14px;
  }
  body.page-template-crm-miltech .br-trust-card {
    padding: 18px 18px;
    border-radius: 16px;
  }
  body.page-template-crm-miltech .br-trust-num { font-size: 32px; }
  body.page-template-crm-miltech .br-trust-num span { font-size: 22px; }
  body.page-template-crm-miltech .br-trust-h { font-size: 18px; }
  body.page-template-crm-miltech .br-trust-l { font-size: 12px; line-height: 1.4; }
}

/* Ще тісніший контент для коротших MBP (~720-820px height) */
@media (min-width: 1100px) and (max-height: 820px) {
  body.page-template-crm-miltech .br-hero { padding: 32px 48px 32px; }
  body.page-template-crm-miltech .br-eyebrow { margin-bottom: 16px; }
  body.page-template-crm-miltech .br-h1 {
    font-size: clamp(30px, 3.4vw, 44px);
    margin-bottom: 14px;
  }
  body.page-template-crm-miltech .br-lead { font-size: 15px; margin-bottom: 22px; }
  body.page-template-crm-miltech .br-hero-row { gap: 18px; }
  body.page-template-crm-miltech .br-cd-cell { padding: 8px 12px 6px; min-width: 58px; }
  body.page-template-crm-miltech .br-cd-cell b { font-size: 22px; }
  body.page-template-crm-miltech .br-cd-cell span { font-size: 9px; margin-top: 3px; }
  body.page-template-crm-miltech .br-cta-primary { padding: 12px 20px; font-size: 14px; }
  body.page-template-crm-miltech .br-trust { margin-top: 20px; gap: 10px; }
  body.page-template-crm-miltech .br-trust-card { padding: 14px 14px; gap: 4px; }
  body.page-template-crm-miltech .br-trust-num { font-size: 26px; }
  body.page-template-crm-miltech .br-trust-h { font-size: 15px; line-height: 1.2; }
  body.page-template-crm-miltech .br-trust-l { font-size: 11px; line-height: 1.3; }
}

@media (max-width: 760px) {
  body.page-template-crm-miltech .brand-page { padding: 16px 16px 64px; }
  body.page-template-crm-miltech .br-section { padding-top: 88px; }

  /* Topbar — show burger, hide CTA + nav */
  body.page-template-crm-miltech .br-topbar {
    grid-template-columns: 1fr auto;
    padding: 10px 12px 10px 18px;
  }
  body.page-template-crm-miltech .br-nav { display: none; }
  body.page-template-crm-miltech .br-topbar-cta { display: none; }
  body.page-template-crm-miltech .br-burger { display: block; }
  /* Mobile menu — fixed-позиція щоб з'являвся ПІД topbar незалежно
     від поточного scroll-position. Закритий стан: невидимий. */
  body.page-template-crm-miltech .br-mnav {
    display: flex;
    position: fixed;
    top: 88px;
    left: 16px;
    right: 16px;
    z-index: 299;
    pointer-events: none;
    opacity: 0;
    transform: translateY(-12px);
    background: rgba(21,23,28,0.92);
    backdrop-filter: blur(14px) saturate(140%);
    -webkit-backdrop-filter: blur(14px) saturate(140%);
    transition: opacity .25s cubic-bezier(.22,1,.36,1),
                transform .25s cubic-bezier(.22,1,.36,1),
                max-height .35s cubic-bezier(.22,1,.36,1),
                padding .2s,
                border-width .2s;
  }
  body.page-template-crm-miltech .br-mnav.is-open {
    pointer-events: auto;
    opacity: 1;
    transform: translateY(0);
  }
  /* На мобільному ховаємо текст біля лого — лишається тільки лого-картинка */
  body.page-template-crm-miltech .br-logo-sep,
  body.page-template-crm-miltech .br-logo-event { display: none; }
  body.page-template-crm-miltech .br-logo-img { height: 36px; }

  /* На мобільному прибираємо desktop-only <br> у h1 (перенос перед "бізнесу")
     — нехай слово саме обтікає природньо */
  body.page-template-crm-miltech .br-h1-desk-only { display: none; }

  /* Hero — менший padding, меншi cells */
  body.page-template-crm-miltech .br-hero { padding: 44px 24px 40px; border-radius: 24px; }
  body.page-template-crm-miltech .br-eyebrow { font-size: 10px; padding: 6px 12px; gap: 8px; }
  /* Більший gap між countdown і CTA-блоком */
  body.page-template-crm-miltech .br-hero-row { gap: 28px; }
  body.page-template-crm-miltech .br-cd-cell { min-width: 64px; padding: 12px 12px 8px; }
  body.page-template-crm-miltech .br-cd-cell b { font-size: 26px; }
  body.page-template-crm-miltech .br-cd-sep { font-size: 22px; }
  /* Більший gap між orange CTA-кнопкою і sub-текстом під нею */
  body.page-template-crm-miltech .br-hero-cta { width: 100%; gap: 14px; }
  /* CTA: одна лінія, менший шрифт + nowrap */
  body.page-template-crm-miltech .br-cta-primary {
    width: 100%;
    font-size: 14px;
    padding: 16px 20px;
    white-space: nowrap;
  }
  body.page-template-crm-miltech .br-trust { grid-template-columns: 1fr 1fr; }
  body.page-template-crm-miltech .br-trust-main { grid-column: 1 / -1; }
  body.page-template-crm-miltech .br-trust-num { font-size: 36px; }

  body.page-template-crm-miltech .br-pains-grid,
  body.page-template-crm-miltech .br-what-grid,
  body.page-template-crm-miltech .br-flex-grid { grid-template-columns: 1fr; }
  body.page-template-crm-miltech .br-pain:nth-child(3),
  body.page-template-crm-miltech .br-what-big,
  body.page-template-crm-miltech .br-flex-card--accent { grid-column: auto; }
  body.page-template-crm-miltech .br-what-num { font-size: 64px; }
  body.page-template-crm-miltech .br-what-num span { font-size: 36px; }

  /* Schedule — час над карткою, без вертикальної лінії */
  body.page-template-crm-miltech .br-schedule-list { grid-template-columns: 1fr; }
  body.page-template-crm-miltech .br-schedule-list::before { display: none; }
  body.page-template-crm-miltech .br-tl-time {
    text-align: left;
    padding: 16px 0 8px;
    border-top: 1px solid var(--c-acc-mid);
  }
  body.page-template-crm-miltech .br-tl-card { margin: 0 0 18px 0; padding: 24px 22px; }
  body.page-template-crm-miltech .br-tl-card::before { display: none; }
  body.page-template-crm-miltech .br-tl-break { grid-column: auto; margin: 4px 0; }
  body.page-template-crm-miltech .br-tl-h { font-size: 19px; }
  body.page-template-crm-miltech .br-tl-points li { font-size: 14px; }

  /* Speakers — 2 col на мобілі, фото 4/5 щоб картки були поряд і не гігантські */
  body.page-template-crm-miltech .br-speakers-grid { grid-template-columns: repeat(2, 1fr); gap: 14px; }
  body.page-template-crm-miltech .br-speaker-photo-wrap { aspect-ratio: 3 / 4; }
  body.page-template-crm-miltech .br-speaker-body { padding: 14px 16px 18px; gap: 4px; }
  body.page-template-crm-miltech .br-speaker-name { font-size: 16px; }
  body.page-template-crm-miltech .br-speaker-role { font-size: 12px; }
  body.page-template-crm-miltech .br-speaker-bio { font-size: 13px; }

  body.page-template-crm-miltech .br-final-info,
  body.page-template-crm-miltech .br-form-wrap { padding: 28px 22px; }

  /* Footer — стек */
  body.page-template-crm-miltech .br-foot { flex-direction: column; align-items: flex-start; }
}

@media (max-width: 420px) {
  /* Дуже вузькі екрани — уникаємо стиснутих написів */
  body.page-template-crm-miltech .br-cta-primary {
    font-size: 13px;
    padding: 14px 16px;
  }
  body.page-template-crm-miltech .br-cd-cell { min-width: 58px; padding: 10px 10px 6px; }
  body.page-template-crm-miltech .br-cd-cell b { font-size: 22px; }
}

@media (max-width: 360px) {
  /* iPhone SE / маленькі Android — countdown і hero мусять вміщатися без overflow.
     Зменшуємо hero padding, h1 font-size, і робимо countdown компактним. */
  body.page-template-crm-miltech .brand-page { padding: 0 16px 64px; }
  body.page-template-crm-miltech .br-hero { padding: 36px 18px 32px; }
  body.page-template-crm-miltech .br-section { padding-left: 4px; padding-right: 4px; }
  body.page-template-crm-miltech .br-h1 { font-size: 34px; }
  body.page-template-crm-miltech .br-countdown {
    flex-wrap: wrap;
    justify-content: center;
    gap: 6px;
  }
  body.page-template-crm-miltech .br-cd-cell { min-width: 52px; padding: 8px 8px 5px; }
  body.page-template-crm-miltech .br-cd-cell b { font-size: 20px; }
  body.page-template-crm-miltech .br-cd-cell span { font-size: 9px; }
  body.page-template-crm-miltech .br-cd-sep { font-size: 18px; }
}

/* ===========================================================
   ENTRANCE ANIMATIONS — choreography
   =========================================================== */
@keyframes brInLeft {
  from { opacity: 0; transform: translate3d(-48px, 0, 0); }
  to   { opacity: 1; transform: translate3d(0, 0, 0); }
}
@keyframes brInRight {
  from { opacity: 0; transform: translate3d(48px, 0, 0); }
  to   { opacity: 1; transform: translate3d(0, 0, 0); }
}
@keyframes brInUp {
  from { opacity: 0; transform: translate3d(0, 24px, 0); }
  to   { opacity: 1; transform: translate3d(0, 0, 0); }
}

@media (prefers-reduced-motion: no-preference) {
  body.page-template-crm-miltech .br-eyebrow,
  body.page-template-crm-miltech .br-h1,
  body.page-template-crm-miltech .br-lead,
  body.page-template-crm-miltech .br-hero-row,
  body.page-template-crm-miltech .br-trust-card {
    opacity: 0;
    will-change: transform, opacity;
    animation-duration: 900ms;
    animation-timing-function: cubic-bezier(0.16, 1, 0.3, 1);
    animation-fill-mode: forwards;
  }
  body.page-template-crm-miltech .br-eyebrow  { animation-name: brInLeft;  animation-delay: 100ms; }
  body.page-template-crm-miltech .br-h1       { animation-name: brInLeft;  animation-delay: 220ms; }
  body.page-template-crm-miltech .br-lead     { animation-name: brInRight; animation-delay: 480ms; }
  body.page-template-crm-miltech .br-hero-row { animation-name: brInUp;    animation-delay: 700ms; }
  body.page-template-crm-miltech .br-trust-card:nth-child(1) { animation-name: brInUp; animation-delay: 880ms; }
  body.page-template-crm-miltech .br-trust-card:nth-child(2) { animation-name: brInUp; animation-delay: 960ms; }
  body.page-template-crm-miltech .br-trust-card:nth-child(3) { animation-name: brInUp; animation-delay: 1040ms; }
  body.page-template-crm-miltech .br-trust-card:nth-child(4) { animation-name: brInUp; animation-delay: 1120ms; }
  body.page-template-crm-miltech .br-trust-card:nth-child(5) { animation-name: brInUp; animation-delay: 1200ms; }

  body.page-template-crm-miltech .brand-page > .br-section .br-section-head {
    opacity: 0;
    transform: translate3d(-40px, 0, 0);
    transition: opacity 800ms cubic-bezier(0.16, 1, 0.3, 1),
                transform 800ms cubic-bezier(0.16, 1, 0.3, 1);
  }
  body.page-template-crm-miltech .brand-page > .br-section:nth-of-type(even) .br-section-head {
    transform: translate3d(40px, 0, 0);
  }
  body.page-template-crm-miltech .brand-page > .br-section.is-revealed .br-section-head {
    opacity: 1;
    transform: translate3d(0, 0, 0);
  }
}

/* На мобільному — ШВИДШІ затримки і коротша тривалість анімацій,
   щоб блоки залітали різко й не запізнювались. */
@media (max-width: 760px) {
  /* Hero waterfall — затримки мінімальні */
  body.page-template-crm-miltech .br-eyebrow  { animation-delay:   0ms !important; animation-duration: 500ms !important; }
  body.page-template-crm-miltech .br-h1       { animation-delay:  60ms !important; animation-duration: 500ms !important; }
  body.page-template-crm-miltech .br-lead     { animation-delay: 140ms !important; animation-duration: 500ms !important; }
  body.page-template-crm-miltech .br-hero-row { animation-delay: 220ms !important; animation-duration: 500ms !important; }
  body.page-template-crm-miltech .br-trust-card { animation-duration: 500ms !important; }
  body.page-template-crm-miltech .br-trust-card:nth-child(1) { animation-delay: 280ms !important; }
  body.page-template-crm-miltech .br-trust-card:nth-child(2) { animation-delay: 320ms !important; }
  body.page-template-crm-miltech .br-trust-card:nth-child(3) { animation-delay: 360ms !important; }
  body.page-template-crm-miltech .br-trust-card:nth-child(4) { animation-delay: 400ms !important; }
  body.page-template-crm-miltech .br-trust-card:nth-child(5) { animation-delay: 440ms !important; }

  /* Card scroll-reveal — коротша тривалість slideUp на мобільному */
  body.page-template-crm-miltech .br-section .br-pain,
  body.page-template-crm-miltech .br-section .br-what-card,
  body.page-template-crm-miltech .br-section .br-flex-card,
  body.page-template-crm-miltech .br-section .br-tl-card,
  body.page-template-crm-miltech .br-section .br-speaker,
  body.page-template-crm-miltech .br-section .br-faq-item,
  body.page-template-crm-miltech .br-section .br-final-info,
  body.page-template-crm-miltech .br-section .br-form-wrap {
    animation-duration: 480ms !important;
  }
}

/* ===========================================================
   STAGGERED CARD REVEAL — точно як у референсному шаблоні.
   Використовуємо @keyframes brSlideUp з translateY(40px) start,
   тривалість 0.72s, cubic-bezier(.22,1,.36,1).
   Animation спочатку pause-нута через JS, при появі секції —
   running. Stagger через :nth-child / :nth-of-type → animation-delay.
   Працює і на десктопі, і на мобільному.
   =========================================================== */
@keyframes brSlideUp {
  from { opacity: 0; transform: translateY(40px); }
  to   { opacity: 1; transform: translateY(0); }
}

/* Кожна картка стартує у паузі. Її animation-play-state="running"
   ставить ВЛАСНИЙ IntersectionObserver у page.js індивідуально,
   коли саме ця картка з'являється у viewport (як у референсі).
   Це дає правильний "fly-in" по-черзі при скролі, особливо на мобільному. */
body.page-template-crm-miltech .br-section .br-pain,
body.page-template-crm-miltech .br-section .br-what-card,
body.page-template-crm-miltech .br-section .br-flex-card,
body.page-template-crm-miltech .br-section .br-tl-card,
body.page-template-crm-miltech .br-section .br-speaker,
body.page-template-crm-miltech .br-section .br-faq-item,
body.page-template-crm-miltech .br-section .br-final-info,
body.page-template-crm-miltech .br-section .br-form-wrap {
  opacity: 0;
  /* Прискорено з 0.72s до 0.5s — щоб картки не "залипали" при скролі. */
  animation: brSlideUp .5s cubic-bezier(.22, 1, .36, 1) forwards;
  animation-play-state: paused;
}

/* Staggered delay для form section: info-блок з'являється першим, форма другим */
body.page-template-crm-miltech .br-section .br-final-info { animation-delay: .02s; }
body.page-template-crm-miltech .br-section .br-form-wrap  { animation-delay: .08s; }

/* Stagger через :nth-child / :nth-of-type — затримки скорочено на 50% */
body.page-template-crm-miltech .br-section .br-pain:nth-child(1),
body.page-template-crm-miltech .br-section .br-what-card:nth-child(1),
body.page-template-crm-miltech .br-section .br-flex-card:nth-child(1),
body.page-template-crm-miltech .br-section .br-speaker:nth-child(1),
body.page-template-crm-miltech .br-section .br-faq-item:nth-child(1) { animation-delay: .02s; }
body.page-template-crm-miltech .br-section .br-pain:nth-child(2),
body.page-template-crm-miltech .br-section .br-what-card:nth-child(2),
body.page-template-crm-miltech .br-section .br-flex-card:nth-child(2),
body.page-template-crm-miltech .br-section .br-speaker:nth-child(2),
body.page-template-crm-miltech .br-section .br-faq-item:nth-child(2) { animation-delay: .07s; }
body.page-template-crm-miltech .br-section .br-pain:nth-child(3),
body.page-template-crm-miltech .br-section .br-what-card:nth-child(3),
body.page-template-crm-miltech .br-section .br-flex-card:nth-child(3),
body.page-template-crm-miltech .br-section .br-speaker:nth-child(3),
body.page-template-crm-miltech .br-section .br-faq-item:nth-child(3) { animation-delay: .12s; }
body.page-template-crm-miltech .br-section .br-what-card:nth-child(4),
body.page-template-crm-miltech .br-section .br-flex-card:nth-child(4),
body.page-template-crm-miltech .br-section .br-speaker:nth-child(4),
body.page-template-crm-miltech .br-section .br-faq-item:nth-child(4) { animation-delay: .17s; }
body.page-template-crm-miltech .br-section .br-what-card:nth-child(5),
body.page-template-crm-miltech .br-section .br-speaker:nth-child(5),
body.page-template-crm-miltech .br-section .br-faq-item:nth-child(5) { animation-delay: .22s; }
body.page-template-crm-miltech .br-section .br-speaker:nth-child(6),
body.page-template-crm-miltech .br-section .br-faq-item:nth-child(6) { animation-delay: .27s; }
body.page-template-crm-miltech .br-section .br-faq-item:nth-child(7) { animation-delay: .32s; }

body.page-template-crm-miltech .br-section .br-tl-card:nth-of-type(1) { animation-delay: .02s; }
body.page-template-crm-miltech .br-section .br-tl-card:nth-of-type(2) { animation-delay: .06s; }
body.page-template-crm-miltech .br-section .br-tl-card:nth-of-type(3) { animation-delay: .10s; }
body.page-template-crm-miltech .br-section .br-tl-card:nth-of-type(4) { animation-delay: .14s; }
body.page-template-crm-miltech .br-section .br-tl-card:nth-of-type(5) { animation-delay: .18s; }
body.page-template-crm-miltech .br-section .br-tl-card:nth-of-type(6) { animation-delay: .22s; }
body.page-template-crm-miltech .br-section .br-tl-card:nth-of-type(7) { animation-delay: .26s; }

/* ====== V3 OVERRIDES ====== */
/* ===========================================================
   MILTECH OVERRIDES
   Кастомні правила під специфіку лендингу: модулі-3x3,
   безпека-bento, інтеграції-логотипи, кейси-placeholder, etc.
   =========================================================== */

/* ===========================================================
   HERO V2 — дрон-фото на всю ширину з текстом-оверлеєм зліва.
   Фото 1200x492 (~2.44:1). Картка-банер фіксованої висоти,
   scrim-градієнт зліва робить текст читабельним поверх неба.
   =========================================================== */
body.page-template-crm-miltech .br-hero--photo {
  position: relative;
  display: flex;
  flex-direction: column;
  justify-content: center;
  /* Великі екрани/монітори — компактний банер (метрики Silver Partner видно нижче).
     Заповнення на весь екран — ЛИШЕ для малих екранів/ноутбуків
     (див. @media max-height: 920px нижче). */
  min-height: clamp(500px, 58vh, 660px);
  padding: 68px 56px;
  border: 1px solid var(--c-line);
  border-radius: 32px;
  overflow: hidden;
  isolation: isolate;
  background-image:
    linear-gradient(90deg, rgba(14,16,21,0.96) 0%, rgba(14,16,21,0.86) 34%, rgba(14,16,21,0.45) 62%, rgba(14,16,21,0.22) 100%),
    radial-gradient(120% 120% at 88% 0%, rgba(239,101,47,0.20) 0%, transparent 55%),
    url("https://crmium.com/wp-content/uploads/2026/06/dron.png");
  background-size: cover, cover, cover;
  background-position: center, center, right center;
  background-repeat: no-repeat;
}
/* Нижня віньєтка — щоб метрики-смужка візуально «зчіплювалась» з фото */
body.page-template-crm-miltech .br-hero--photo::after {
  content: '';
  position: absolute;
  left: 0; right: 0; bottom: 0;
  height: 40%;
  pointer-events: none;
  z-index: -1;
  background: linear-gradient(180deg, transparent 0%, rgba(14,16,21,0.55) 100%);
}
/* Мобільна картинка-дрон — за замовчуванням прихована (desktop використовує background) */
body.page-template-crm-miltech .br-hero-photo-mobile { display: none; }
body.page-template-crm-miltech .br-hero--photo .br-eyebrow { margin-bottom: 22px; }
body.page-template-crm-miltech .br-hero--photo .br-h1 {
  max-width: 600px;
  margin-bottom: 18px;
  /* Без переносу слів зі знаком дефіса — рядок ламається лише по пробілах */
  overflow-wrap: normal;
  word-break: keep-all;
  -webkit-hyphens: none;
  hyphens: none;
}
body.page-template-crm-miltech .br-hero--photo .br-lead {
  max-width: 520px;
  margin-bottom: 30px;
  margin-top: 0;
  color: rgba(255,255,255,0.86);
}
body.page-template-crm-miltech .br-hero-cta {
  display: flex;
  flex-direction: row;
  justify-content: flex-start;
  align-items: center;
  gap: 16px;
  flex-wrap: wrap;
}
body.page-template-crm-miltech .br-cta-ghost {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 16px 24px;
  background: rgba(21,23,28,0.55);
  color: var(--c-ink);
  font-weight: 600;
  font-size: 15px;
  border-radius: 14px;
  border: 1px solid var(--c-line);
  -webkit-backdrop-filter: blur(4px);
  backdrop-filter: blur(4px);
  transition: border-color .2s, background .2s;
}
body.page-template-crm-miltech .br-cta-ghost:hover {
  border-color: var(--c-acc);
  background: var(--c-acc-soft);
}

/* Метрики — тонка смужка під hero (заміна великих trust-cards) */
body.page-template-crm-miltech .br-hero-metrics {
  margin-top: 16px;
  padding: 20px 28px;
  background: var(--c-card);
  border: 1px solid var(--c-line);
  border-radius: 18px;
  display: grid;
  grid-template-columns: 1.7fr 1fr 1fr 1fr;
  gap: 18px;
  align-items: center;
}
body.page-template-crm-miltech .br-hero-metric {
  display: flex;
  flex-direction: column;
  gap: 4px;
  padding-left: 18px;
  border-left: 2px solid var(--c-acc);
}
body.page-template-crm-miltech .br-hero-metric b {
  font-family: var(--font-display);
  font-weight: 800;
  font-size: 28px;
  line-height: 1;
  letter-spacing: -0.03em;
  color: var(--c-ink);
}
body.page-template-crm-miltech .br-hero-metric b span { color: var(--c-acc); }
body.page-template-crm-miltech .br-hero-metric small {
  font-size: 13px;
  color: var(--c-ink-2);
  line-height: 1.35;
}
body.page-template-crm-miltech .br-hero-metric--main b {
  font-size: 18px;
  color: var(--c-acc);
  letter-spacing: -0.01em;
}

/* Короткі екрани (MacBook 14" ~900px і нижче) — стискаємо hero */
@media (min-width: 1100px) and (max-height: 920px) {
  body.page-template-crm-miltech .br-hero--photo {
    /* На MacBook 14"/13" дрон-блок заповнює увесь перший екран,
       контент — угорі (без великого порожнього простору над eyebrow) */
    min-height: calc(100vh - 122px);
    justify-content: flex-start;
    padding: 48px 52px;
  }
  body.page-template-crm-miltech .br-hero--photo .br-h1 { font-size: clamp(36px, 4.2vw, 52px); margin-bottom: 16px; }
  body.page-template-crm-miltech .br-hero--photo .br-lead { font-size: 17px; margin-bottom: 26px; }
  body.page-template-crm-miltech .br-hero--photo .br-eyebrow { margin-bottom: 70px; }
  body.page-template-crm-miltech .br-hero-metric b { font-size: 26px; }
}

/* Mobile — нижчий банер, сильніший вертикальний scrim, метрики у 2 колонки */
@media (max-width: 760px) {
  /* Mobile: картинка зверху окремим блоком, текст і кнопка — нижче */
  body.page-template-crm-miltech .br-hero--photo {
    min-height: 0;
    /* Великий padding-top, щоб картинка точно йшла НИЖЧЕ за sticky-topbar
       (включно з його blur-ефектом). Padding надійніший за margin-top на дитині. */
    padding: 80px 16px 28px;
    background: var(--c-bg);
    border-radius: 24px;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
  }
  body.page-template-crm-miltech .br-hero--photo::after { display: none; }
  body.page-template-crm-miltech .br-hero-photo-mobile {
    display: block;
    width: 100%;
    height: auto;
    border-radius: 16px;
    margin-top: 0;
    margin-bottom: 24px;
  }
  /* Кнопка CTA у випадаючому меню — повноцінна кнопка, не вузька смужка
     (працює і для <a>, і для <button> у PHP) */
  body.page-template-crm-miltech .br-mnav-cta {
    display: block !important;
    width: 100% !important;
    padding: 16px 20px !important;
    margin-top: 12px !important;
    background: var(--c-acc) !important;
    color: var(--c-acc-ink) !important;
    font-family: var(--font-display) !important;
    font-size: 16px !important;
    font-weight: 700 !important;
    line-height: 1 !important;
    text-align: center !important;
    border: none !important;
    border-radius: 14px !important;
    cursor: pointer !important;
    box-sizing: border-box !important;
  }
  body.page-template-crm-miltech .br-mnav-cta:hover { background: var(--c-acc-hover) !important; }
  body.page-template-crm-miltech .br-hero--photo .br-eyebrow { margin-bottom: 18px; }
  body.page-template-crm-miltech .br-hero--photo .br-h1,
  body.page-template-crm-miltech .br-hero--photo .br-lead { max-width: 100%; }
  body.page-template-crm-miltech .br-hero-cta { width: 100%; }
  body.page-template-crm-miltech .br-hero-cta .br-cta-primary { width: 100%; justify-content: center; }
  body.page-template-crm-miltech .br-hero-metrics { grid-template-columns: 1fr 1fr; gap: 16px 18px; }
}

/* Trust-strip між hero і pains — компактна плитка бейджів */
body.page-template-crm-miltech .br-trust-strip {
  margin-top: 16px;
  padding: 24px 28px;
  background: var(--c-card);
  border: 1px solid var(--c-line);
  border-radius: 18px;
  display: flex;
  flex-wrap: wrap;
  gap: 14px 24px;
  align-items: center;
}
body.page-template-crm-miltech .br-trust-strip-label {
  font-family: var(--font-mono);
  font-size: 11px;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  color: var(--c-acc);
  font-weight: 600;
  margin-right: 8px;
}
body.page-template-crm-miltech .br-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 8px 14px;
  background: var(--c-tint-soft);
  border: 1px solid var(--c-line);
  border-radius: 999px;
  font-size: 13px;
  font-weight: 500;
  color: var(--c-ink-2);
  transition: border-color .2s, color .2s;
}
body.page-template-crm-miltech .br-badge::before {
  content: '';
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background: var(--c-acc);
}
body.page-template-crm-miltech .br-badge:hover {
  border-color: var(--c-acc-mid);
  color: var(--c-ink);
}

/* PAINS — дозволяємо 6 карток (3×2) */
body.page-template-crm-miltech #br-pains .br-pains-grid {
  grid-template-columns: repeat(3, 1fr);
}
@media (max-width: 1100px) {
  body.page-template-crm-miltech #br-pains .br-pains-grid {
    grid-template-columns: 1fr 1fr;
  }
  body.page-template-crm-miltech #br-pains .br-pain:nth-child(3) {
    grid-column: auto;
  }
}
@media (max-width: 760px) {
  body.page-template-crm-miltech #br-pains .br-pains-grid {
    grid-template-columns: 1fr;
  }
}

/* WHY ODOO — 3-col grid однакових карток */
body.page-template-crm-miltech .br-grid-3 {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 16px;
}
@media (max-width: 1100px) {
  body.page-template-crm-miltech .br-grid-3 { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 760px) {
  body.page-template-crm-miltech .br-grid-3 { grid-template-columns: 1fr; }
}

/* MODULES — 3×3 grid */
body.page-template-crm-miltech .br-grid-modules {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 16px;
}
@media (max-width: 1100px) {
  body.page-template-crm-miltech .br-grid-modules { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 760px) {
  body.page-template-crm-miltech .br-grid-modules { grid-template-columns: 1fr; }
}

/* SECURITY — велика "герой-картка" + 8 малих, грід 2+3+3 */
body.page-template-crm-miltech #br-security {
  position: relative;
}
body.page-template-crm-miltech .br-sec-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-auto-rows: minmax(140px, auto);
  gap: 16px;
}
body.page-template-crm-miltech .br-sec-card {
  background: var(--c-card);
  border: 1px solid var(--c-line);
  border-radius: 22px;
  padding: 26px 26px 24px;
  display: flex;
  flex-direction: column;
  gap: 10px;
  transition: border-color .3s cubic-bezier(.22,1,.36,1),
              transform .3s cubic-bezier(.22,1,.36,1),
              box-shadow .3s cubic-bezier(.22,1,.36,1);
}
body.page-template-crm-miltech .br-sec-card:hover {
  border-color: var(--c-acc-mid);
  transform: translateY(-4px);
  box-shadow: 0 12px 28px rgba(239,101,47,0.14);
}
body.page-template-crm-miltech .br-sec-card--hero {
  grid-column: 1 / -1;
  background:
    radial-gradient(80% 90% at 90% 10%, rgba(239,101,47,0.16) 0%, transparent 60%),
    var(--c-card);
  padding: 32px 36px;
  flex-direction: row;
  align-items: center;
  gap: 28px;
}
body.page-template-crm-miltech .br-sec-card--hero .br-sec-icon {
  flex: 0 0 auto;
  width: 64px;
  height: 64px;
  border-radius: 18px;
  background: var(--c-acc-soft);
  color: var(--c-acc);
  display: grid;
  place-items: center;
  font-size: 32px;
}
body.page-template-crm-miltech .br-sec-card--hero .br-sec-body {
  flex: 1 1 auto;
  display: flex;
  flex-direction: column;
  gap: 8px;
}
body.page-template-crm-miltech .br-sec-tag {
  font-family: var(--font-mono);
  font-size: 11px;
  letter-spacing: 0.16em;
  text-transform: uppercase;
  color: var(--c-acc);
  font-weight: 600;
}
body.page-template-crm-miltech .br-sec-h {
  font-family: var(--font-display);
  font-weight: 700;
  font-size: 19px;
  line-height: 1.2;
  letter-spacing: -0.02em;
  color: var(--c-ink);
}
body.page-template-crm-miltech .br-sec-card--hero .br-sec-h {
  font-size: 24px;
  letter-spacing: -0.025em;
}
body.page-template-crm-miltech .br-sec-p {
  font-size: 14px;
  line-height: 1.55;
  color: var(--c-ink-2);
}
body.page-template-crm-miltech .br-sec-icon {
  width: 44px;
  height: 44px;
  border-radius: 12px;
  background: var(--c-acc-soft);
  color: var(--c-acc);
  display: grid;
  place-items: center;
  font-size: 22px;
  margin-bottom: 4px;
}
body.page-template-crm-miltech .br-sec-cta {
  margin-top: 28px;
  padding: 22px 28px;
  background: var(--c-acc);
  color: var(--c-acc-ink);
  border-radius: 18px;
  display: flex;
  flex-wrap: wrap;
  gap: 18px;
  align-items: center;
  justify-content: space-between;
}
body.page-template-crm-miltech .br-sec-cta-text {
  font-weight: 600;
  font-size: 17px;
  line-height: 1.4;
  max-width: 680px;
}
body.page-template-crm-miltech .br-sec-cta a {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 14px 24px;
  background: rgba(0,0,0,0.18);
  color: var(--c-acc-ink);
  font-weight: 700;
  font-size: 14px;
  border-radius: 999px;
  transition: background .2s;
  white-space: nowrap;
}
body.page-template-crm-miltech .br-sec-cta a:hover {
  background: rgba(0,0,0,0.32);
}

/* Підзаголовок групи всередині секції безпеки (повна ширина) */
body.page-template-crm-miltech .br-sec-group {
  grid-column: 1 / -1;
  display: flex;
  align-items: center;
  gap: 12px;
  margin: 18px 0 2px;
  font-family: var(--font-mono);
  font-size: 12px;
  letter-spacing: 0.16em;
  text-transform: uppercase;
  color: var(--c-ink-2);
  font-weight: 600;
}
body.page-template-crm-miltech .br-sec-group::before {
  content: '';
  width: 22px;
  height: 2px;
  background: var(--c-acc);
  border-radius: 1px;
}
body.page-template-crm-miltech .br-sec-group b { color: var(--c-acc); font-weight: 600; }

/* Soft-картка сертифікацій — повна ширина, неагресивний фон */
body.page-template-crm-miltech .br-sec-soft {
  grid-column: 1 / -1;
  background: var(--c-tint-soft);
  border: 1px dashed var(--c-line);
  border-radius: 18px;
  padding: 22px 26px;
  display: flex;
  align-items: center;
  gap: 16px;
  font-size: 15px;
  line-height: 1.55;
  color: var(--c-ink-2);
}
body.page-template-crm-miltech .br-sec-soft .br-sec-icon { margin-bottom: 0; flex: 0 0 auto; }
body.page-template-crm-miltech .br-sec-soft b { color: var(--c-ink); font-weight: 600; }

@media (max-width: 1100px) {
  body.page-template-crm-miltech .br-sec-grid { grid-template-columns: 1fr 1fr; }
  body.page-template-crm-miltech .br-sec-card--hero { grid-column: span 2; }
}
@media (max-width: 760px) {
  body.page-template-crm-miltech .br-sec-grid { grid-template-columns: 1fr; }
  body.page-template-crm-miltech .br-sec-card--hero {
    grid-column: auto;
    flex-direction: column;
    align-items: flex-start;
    padding: 26px 24px;
  }
  body.page-template-crm-miltech .br-sec-card--hero .br-sec-h { font-size: 20px; }
}

/* ROADMAP — спрощений timeline без break-row */
body.page-template-crm-miltech #br-roadmap .br-schedule-list {
  grid-template-columns: 180px 1fr;
}
body.page-template-crm-miltech #br-roadmap .br-schedule-list::before {
  left: 180px;
}
@media (max-width: 760px) {
  body.page-template-crm-miltech #br-roadmap .br-schedule-list {
    grid-template-columns: 1fr;
  }
  body.page-template-crm-miltech #br-roadmap .br-schedule-list::before {
    display: none;
  }
  body.page-template-crm-miltech #br-roadmap .br-tl-time {
    text-align: left;
    padding: 16px 0 8px;
    border-top: 1px solid var(--c-acc-mid);
    display: flex;
    align-items: baseline;
    gap: 12px;
  }
  body.page-template-crm-miltech #br-roadmap .br-tl-time span {
    display: inline;
    margin-top: 0;
  }
  body.page-template-crm-miltech #br-roadmap .br-tl-card {
    margin: 0 0 18px 0;
  }
}

/* WHO IS IT FOR — 3-col grid */
body.page-template-crm-miltech .br-who-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 16px;
}
@media (max-width: 1100px) {
  body.page-template-crm-miltech .br-who-grid { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 760px) {
  body.page-template-crm-miltech .br-who-grid { grid-template-columns: 1fr; }
}

/* CASES — 2x2 cards + NDA strip */
body.page-template-crm-miltech .br-cases-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
}
body.page-template-crm-miltech .br-case-card {
  background: var(--c-card);
  border: 1px solid var(--c-line);
  border-radius: 22px;
  padding: 28px;
  display: flex;
  flex-direction: column;
  gap: 14px;
  position: relative;
  transition: border-color .3s cubic-bezier(.22,1,.36,1),
              transform .3s cubic-bezier(.22,1,.36,1),
              box-shadow .3s cubic-bezier(.22,1,.36,1);
}
body.page-template-crm-miltech .br-case-card:hover {
  border-color: var(--c-acc-mid);
  transform: translateY(-4px);
  box-shadow: 0 12px 28px rgba(239,101,47,0.14);
}
body.page-template-crm-miltech .br-case-tag {
  font-family: var(--font-mono);
  font-size: 11px;
  letter-spacing: 0.16em;
  text-transform: uppercase;
  color: var(--c-acc);
  font-weight: 600;
}
body.page-template-crm-miltech .br-case-h {
  font-family: var(--font-display);
  font-weight: 700;
  font-size: 22px;
  line-height: 1.2;
  letter-spacing: -0.02em;
  color: var(--c-ink);
}
body.page-template-crm-miltech .br-case-h em { font-style: italic; color: var(--c-acc); }
body.page-template-crm-miltech .br-case-p {
  font-size: 14px;
  line-height: 1.55;
  color: var(--c-ink-2);
}
body.page-template-crm-miltech .br-case-meta {
  margin-top: auto;
  padding-top: 14px;
  border-top: 1px solid var(--c-line);
  font-size: 12px;
  font-family: var(--font-mono);
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--c-ink-3);
}

body.page-template-crm-miltech .br-nda-strip {
  margin-top: 24px;
  padding: 22px 26px;
  background: var(--c-acc-soft);
  border: 1px solid var(--c-acc-mid);
  border-radius: 18px;
  display: flex;
  align-items: center;
  gap: 16px;
  font-size: 15px;
  line-height: 1.55;
  color: var(--c-ink);
}
body.page-template-crm-miltech .br-nda-icon {
  flex: 0 0 auto;
  width: 40px;
  height: 40px;
  border-radius: 10px;
  background: var(--c-acc);
  color: var(--c-acc-ink);
  display: grid;
  place-items: center;
  font-size: 18px;
  font-weight: 700;
}
body.page-template-crm-miltech .br-nda-strip b { color: var(--c-acc); font-weight: 700; }

body.page-template-crm-miltech .br-case-counters {
  margin-top: 24px;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 14px;
  padding: 22px 26px;
  background: var(--c-card);
  border: 1px solid var(--c-line);
  border-radius: 18px;
}
body.page-template-crm-miltech .br-case-counter {
  display: flex;
  flex-direction: column;
  gap: 4px;
}
body.page-template-crm-miltech .br-case-counter b {
  font-family: var(--font-display);
  font-weight: 800;
  font-size: 32px;
  line-height: 1;
  letter-spacing: -0.03em;
  color: var(--c-ink);
}
body.page-template-crm-miltech .br-case-counter b span { color: var(--c-acc); }
body.page-template-crm-miltech .br-case-counter small {
  font-size: 12px;
  color: var(--c-ink-2);
  font-family: var(--font-mono);
  letter-spacing: 0.12em;
  text-transform: uppercase;
}
@media (max-width: 1100px) {
  body.page-template-crm-miltech .br-cases-grid { grid-template-columns: 1fr 1fr; }
  body.page-template-crm-miltech .br-case-counters { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 760px) {
  body.page-template-crm-miltech .br-cases-grid { grid-template-columns: 1fr; }
  body.page-template-crm-miltech .br-case-counters { grid-template-columns: 1fr 1fr; gap: 18px; }
  body.page-template-crm-miltech .br-case-counter b { font-size: 28px; }
}

/* FINAL FORM — selector + checkbox + bullet list */
body.page-template-crm-miltech .br-form-row select {
  background: var(--c-tint-soft);
  border: 1px solid var(--c-line);
  border-radius: 12px;
  padding: 14px 18px;
  font-size: 16px;
  font-family: var(--font-body);
  color: var(--c-ink);
  width: 100%;
  appearance: none;
  -webkit-appearance: none;
  background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='14' height='8' viewBox='0 0 14 8' fill='none' stroke='%23EF652F' stroke-width='2'><path d='M1 1l6 6 6-6'/></svg>");
  background-repeat: no-repeat;
  background-position: right 18px center;
  padding-right: 44px;
  transition: border-color .2s, background-color .2s;
}
body.page-template-crm-miltech .br-form-row select:focus {
  outline: none;
  border-color: var(--c-acc);
  background-color: var(--c-tint-bold);
}
body.page-template-crm-miltech .br-form-check {
  display: flex;
  align-items: flex-start;
  gap: 10px;
  font-size: 13px;
  line-height: 1.55;
  color: var(--c-ink-2);
}
body.page-template-crm-miltech .br-form-check input[type="checkbox"] {
  width: 18px;
  height: 18px;
  margin-top: 2px;
  accent-color: var(--c-acc);
  flex: 0 0 auto;
}

body.page-template-crm-miltech .br-final-bullets {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: 10px;
  margin-top: 8px;
}
body.page-template-crm-miltech .br-final-bullets li {
  padding-left: 26px;
  position: relative;
  font-size: 15px;
  line-height: 1.5;
  color: var(--c-ink);
}
body.page-template-crm-miltech .br-final-bullets li::before {
  content: '✓';
  position: absolute;
  left: 0;
  top: 0;
  width: 18px;
  height: 18px;
  border-radius: 50%;
  background: var(--c-acc);
  color: var(--c-acc-ink);
  font-size: 11px;
  font-weight: 700;
  display: grid;
  place-items: center;
}

/* Force-no-tilt: спікер-картки не маркуємо data-tilt, але про всяк випадок
   приберемо preserve-3d, бо в нас немає людських фото */
body.page-template-crm-miltech .br-speaker { transform-style: flat; }
</style>
<main class="brand-page">

  <!-- TOPBAR -->
  <header class="br-topbar">
    <a class="br-logo" href="https://crmium.com/uk/" aria-label="CRMiUM">
      <img class="br-logo-img br-logo-img--dark"
           src="https://crmium.com/wp-content/uploads/2026/05/logo-white-for-dark-background.png"
           alt="CRMiUM" loading="eager">
      <img class="br-logo-img br-logo-img--light"
           src="https://crmium.com/wp-content/uploads/2026/05/logo-black-for-light-background.png"
           alt="CRMiUM" loading="eager">
    </a>
    <nav class="br-nav" aria-label="Навігація">
      <a href="#br-pains">Виклики</a>
      <a href="#br-why">Чому Odoo</a>
      <a href="#br-modules">Модулі</a>
      <a href="#br-security">Безпека</a>
      <a href="#br-roadmap">Етапи</a>
      <a href="#br-faq">FAQ</a>
    </nav>
    <button class="br-topbar-cta" type="button"
            onclick="Index.showFormSpec(this)"
            data-title="<?php echo esc_attr($popup_title); ?>"
            data-btnname="<?php echo esc_attr($popup_btn_label); ?>"
            data-ordertype="<?php echo esc_attr($popup_ordertype); ?>"
            data-gaEvent="<?php echo esc_attr($popup_ga_event); ?>"
            data-gaEventCategory="<?php echo esc_attr($popup_ga_category); ?>">
      Замовити консультацію →
    </button>
    <button class="br-burger" type="button" aria-label="Меню" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
  </header>

  <!-- Mobile sliding nav -->
  <div class="br-mnav" aria-hidden="true">
    <a href="#br-pains">Виклики</a>
    <a href="#br-why">Чому Odoo</a>
    <a href="#br-modules">Модулі</a>
    <a href="#br-security">Безпека</a>
    <a href="#br-roadmap">Етапи</a>
    <a href="#br-faq">FAQ</a>
    <button class="br-mnav-cta" type="button"
            onclick="Index.showFormSpec(this)"
            data-title="<?php echo esc_attr($popup_title); ?>"
            data-btnname="<?php echo esc_attr($popup_btn_label); ?>"
            data-ordertype="<?php echo esc_attr($popup_ordertype); ?>"
            data-gaEvent="<?php echo esc_attr($popup_ga_event); ?>"
            data-gaEventCategory="<?php echo esc_attr($popup_ga_category); ?>">
      Замовити консультацію →
    </button>
  </div>

  <!-- HERO — дрон-фото з текстом-оверлеєм зліва (desktop) / картинка зверху (mobile) -->
  <section class="br-hero br-hero--photo">
    <img class="br-hero-photo-mobile" src="https://crmium.com/wp-content/uploads/2026/06/dron.png" alt="Дрон над містом у сутінках" loading="eager">
    <div class="br-eyebrow">
      <span class="br-eyebrow-dot" aria-hidden="true"></span>
      ODOO ERP · ОБОРОННА ПРОМИСЛОВІСТЬ
    </div>
    <h1 class="br-h1">Odoo ERP для <em>оборонної промисловості</em> України</h1>
    <p class="br-lead">
      Одна система для всього виробництва — від конструкторського бюро
      до відвантаження за контрактом. У хмарі або на вашому сервері — на ваш вибір.
    </p>
    <div class="br-hero-cta">
      <button class="br-cta-primary" type="button"
              onclick="Index.showFormSpec(this)"
              data-title="<?php echo esc_attr($popup_title); ?>"
              data-btnname="<?php echo esc_attr($popup_btn_label); ?>"
              data-ordertype="<?php echo esc_attr($popup_ordertype); ?>"
              data-gaEvent="<?php echo esc_attr($popup_ga_event); ?>"
              data-gaEventCategory="<?php echo esc_attr($popup_ga_category); ?>">
        Замовити консультацію →
      </button>
    </div>
  </section>

  <!-- Метрики — тонка смужка під hero -->
  <div class="br-hero-metrics">
    <div class="br-hero-metric br-hero-metric--main">
      <b>Silver Partner Odoo</b>
      <small>офіційний партнер в Україні</small>
    </div>
    <div class="br-hero-metric">
      <b data-counter>10<span>+</span></b>
      <small>років на ринку</small>
    </div>
    <div class="br-hero-metric">
      <b data-counter>500<span>+</span></b>
      <small>впроваджень</small>
    </div>
    <div class="br-hero-metric">
      <b data-counter>36</b>
      <small>країн з клієнтами</small>
    </div>
  </div>

  <!-- TRUST STRIP — з чим працює система -->
  <div class="br-trust-strip">
    <span class="br-trust-strip-label">З ЧИМ ПРАЦЮЄ</span>
    <span class="br-badge">Хмара або власний сервер</span>
    <span class="br-badge">ДОТ · Prozorro · Brave1</span>
    <span class="br-badge">M.E.Doc / Вчасно</span>
    <span class="br-badge">Корпоративний вхід (SSO)</span>
    <span class="br-badge">CAD / інженерні програми</span>
    <span class="br-badge">Перенесення з 1С</span>
  </div>

  <!-- 01 / БОЛІ ОПК -->
  <section class="br-section" id="br-pains">
    <div class="br-section-head">
      <div class="br-num">01 / ВИКЛИКИ</div>
      <h2 class="br-h2">Excel і 1С <em>більше не витримують</em><br>темпу оборонного виробництва</h2>
      <p class="br-section-sub">
        Обсяги зросли в рази, вимог до обліку й документів стало більше, постачальників — десятки.
        Старі інструменти на цьому ламаються. Ось де болить найчастіше:
      </p>
    </div>

    <div class="br-pains-grid">
      <article class="br-pain">
        <div class="br-pain-tag">ВЛАСНИК · КЕРІВНИК</div>
        <h3 class="br-pain-h">Облік <em>контрольованих</em> матеріалів</h3>
        <ul class="br-pain-list">
          <li>Кожна партія компонентів — під контролем держави (ДСЕКУ)</li>
          <li>На перевірці треба показати рух кожної позиції</li>
          <li>У таблицях це не відстежити — виникають питання</li>
        </ul>
      </article>

      <article class="br-pain">
        <div class="br-pain-tag">ВИРОБНИЦТВО</div>
        <h3 class="br-pain-h">Швидке <em>зростання обсягів</em></h3>
        <ul class="br-pain-list">
          <li>Замовлень у рази більше, ніж торік</li>
          <li>Вручну спланувати закупівлі й виробництво вже неможливо</li>
          <li>Компонентів постійно бракує — потрібні чіткі пріоритети</li>
        </ul>
      </article>

      <article class="br-pain">
        <div class="br-pain-tag">ЯКІСТЬ · СЕРВІС</div>
        <h3 class="br-pain-h">Відстеження партій і <em>рекламації</em></h3>
        <ul class="br-pain-list">
          <li>Прийшла рекламація — треба за хвилини знайти всю партію</li>
          <li>З яких компонентів зібрана і хто її робив</li>
          <li>Без цього неможливо швидко зреагувати й виправити</li>
        </ul>
      </article>

      <article class="br-pain">
        <div class="br-pain-tag">ЗАКУПІВЛІ · РОЗРОБКА</div>
        <h3 class="br-pain-h">Десятки <em>підрядників</em> на один виріб</h3>
        <ul class="br-pain-list">
          <li>Один виріб — це 30-80 постачальників</li>
          <li>Без єдиної системи це листування в пошті й таблицях</li>
          <li>Конструкція змінюється часто — версії плутаються</li>
        </ul>
      </article>

      <article class="br-pain">
        <div class="br-pain-tag">ФІНАНСИ</div>
        <h3 class="br-pain-h">Дві компанії: <em>українська та європейська</em></h3>
        <ul class="br-pain-list">
          <li>Українська — для держконтрактів, європейська — для експорту</li>
          <li>Облік у різних валютах</li>
          <li>Потрібна зведена картина по обох — без ручного зведення</li>
        </ul>
      </article>

      <article class="br-pain">
        <div class="br-pain-tag">КАДРИ</div>
        <h3 class="br-pain-h">Бронювання <em>працівників</em></h3>
        <ul class="br-pain-list">
          <li>Облік військовозобов'язаних, відстрочок, бронювань</li>
          <li>Дані мають бути під рукою і вчасно оновлені</li>
          <li>Документи на бронювання — без ручної рутини</li>
        </ul>
      </article>
    </div>

    <div class="br-pains-summary">
      Впізнали хоч один виклик? Поговорімо. На консультації покажемо, як це закривається в одній системі.
    </div>
  </section>

  <!-- 02 / ЧОМУ ODOO -->
  <section class="br-section" id="br-why">
    <div class="br-section-head">
      <div class="br-num">02 / ЧОМУ ODOO</div>
      <h2 class="br-h2">Чому саме Odoo <em>підходить</em><br>оборонному виробнику</h2>
      <p class="br-section-sub">
        Odoo — це гнучка система управління бізнесом, яку використовують понад 12 млн людей у світі.
        Ось чому вона добре лягає саме на оборонне виробництво:
      </p>
    </div>

    <div class="br-grid-3">
      <article class="br-what-card">
        <div class="br-what-tag">ВІДКРИТИЙ КОД</div>
        <h3 class="br-what-h">Жодних «чорних скриньок»</h3>
        <p class="br-sec-p">
          Код системи відкритий — його можна перевірити. Ви не залежите від одного
          постачальника і не ризикуєте через санкції чи блокування.
        </p>
      </article>
      <article class="br-what-card">
        <div class="br-what-tag">ХМАРА АБО СЕРВЕР</div>
        <h3 class="br-what-h">Працює там, де вам зручно</h3>
        <p class="br-sec-p">
          У захищеній хмарі Odoo або на вашому власному сервері — обираєте ви.
          На власному сервері дані не виходять за межі компанії.
        </p>
      </article>
      <article class="br-what-card">
        <div class="br-what-tag">МОДУЛЬНІСТЬ</div>
        <h3 class="br-what-h">Вмикаєте лише потрібне</h3>
        <p class="br-sec-p">
          Виробництво, склад, закупівлі, бухгалтерія, кадри — десятки модулів.
          Берете тільки ті, що потрібні зараз, решту додаєте пізніше.
        </p>
      </article>
      <article class="br-what-card">
        <div class="br-what-tag">УКРАЇНСЬКА ЛОКАЛІЗАЦІЯ</div>
        <h3 class="br-what-h">Бухгалтерія за нашими правилами</h3>
        <p class="br-sec-p">
          ПДВ, податкові накладні, M.E.Doc і «Вчасно», валютний контроль —
          усе під українське законодавство, без доробок.
        </p>
      </article>
      <article class="br-what-card">
        <div class="br-what-tag">ГОТОВНІСТЬ ДО СТАНДАРТІВ</div>
        <h3 class="br-what-h">Допомагаємо підготуватися до сертифікації</h3>
        <p class="br-sec-p">
          Налаштовуємо систему під вимоги ISO 27001 та стандартів якості НАТО (AQAP),
          яких вимагають замовники. Сам сертифікат видає акредитований орган.
        </p>
      </article>
      <article class="br-what-card">
        <div class="br-what-tag">ВАРТІСТЬ</div>
        <h3 class="br-what-h">У рази дешевше за SAP</h3>
        <p class="br-sec-p">
          За схожого набору можливостей володіння Odoo обходиться значно дешевше.
          Прозорі ліцензії, без прихованих доплат.
        </p>
      </article>
    </div>
  </section>

  <!-- 03 / МОДУЛІ -->
  <section class="br-section" id="br-modules">
    <div class="br-section-head">
      <div class="br-num">03 / МОДУЛІ</div>
      <h2 class="br-h2">9 напрямів, які закривають<br><em>усе виробництво</em></h2>
      <p class="br-section-sub">
        Від ідеї виробу до його відвантаження замовнику — все в одній системі.
        Кожен виріб має свою специфікацію, серійний номер і повну історію.
      </p>
    </div>

    <div class="br-grid-modules">
      <article class="br-what-card">
        <div class="br-what-tag">ВИРОБНИЦТВО</div>
        <h3 class="br-what-h">Планування і випуск</h3>
        <p class="br-sec-p">
          Система сама рахує, що і коли виробляти, скільки потрібно компонентів
          і де вузькі місця. Враховує роботу підрядників.
        </p>
      </article>
      <article class="br-what-card">
        <div class="br-what-tag">СКЛАД</div>
        <h3 class="br-what-h">Облік партій і серійних номерів</h3>
        <p class="br-sec-p">
          Кожна партія й виріб мають свій номер. У будь-який момент видно,
          де що лежить і з чого зібрано конкретний виріб.
        </p>
      </article>
      <article class="br-what-card">
        <div class="br-what-tag">КОНСТРУКТОРСЬКА ДОКУМЕНТАЦІЯ</div>
        <h3 class="br-what-h">Версії специфікацій під контролем</h3>
        <p class="br-sec-p">
          Конструкція змінюється часто — система зберігає всі версії й показує, що саме
          змінилось. Підключається до інженерних програм (SolidWorks, Altium, KiCad).
        </p>
      </article>
      <article class="br-what-card">
        <div class="br-what-tag">ЯКІСТЬ</div>
        <h3 class="br-what-h">Контроль якості на всіх етапах</h3>
        <p class="br-sec-p">
          Перевірки на кожному етапі, фіксація браку й виправлень, контрольні плани та звітність.
          Допомагає вибудувати систему якості під вимоги ISO 9001 чи стандартів НАТО (AQAP) —
          саму сертифікацію надає акредитований орган.
        </p>
      </article>
      <article class="br-what-card">
        <div class="br-what-tag">ЗАКУПІВЛІ</div>
        <h3 class="br-what-h">З контролем матеріалів</h3>
        <p class="br-sec-p">
          Запити постачальникам, оцінка їх надійності, контроль походження компонентів
          і перевірка позицій, що підлягають держконтролю (ДСЕКУ).
        </p>
      </article>
      <article class="br-what-card">
        <div class="br-what-tag">БУХГАЛТЕРІЯ</div>
        <h3 class="br-what-h">За українськими правилами</h3>
        <p class="br-sec-p">
          Податкові накладні, M.E.Doc і «Вчасно», кілька валют, облік по кількох
          компаніях одразу зі зведеною звітністю.
        </p>
      </article>
      <article class="br-what-card">
        <div class="br-what-tag">ПРОДАЖІ · CRM</div>
        <h3 class="br-what-h">Робота з держзамовленнями</h3>
        <p class="br-sec-p">
          Ведення тендерів і контрактів, історія спілкування із замовниками —
          від Міноборони до приватних компаній. Зв'язка з ДОТ, Prozorro, Brave1.
        </p>
      </article>
      <article class="br-what-card">
        <div class="br-what-tag">КАДРИ</div>
        <h3 class="br-what-h">Облік і бронювання</h3>
        <p class="br-sec-p">
          Облік військовозобов'язаних, відстрочок і бронювань. Зв'язка з «Резерв+»
          для прискореної процедури бронювання працівників.
        </p>
      </article>
      <article class="br-what-card">
        <div class="br-what-tag">КАСТОМІЗАЦІЯ</div>
        <h3 class="br-what-h">Доопрацювання під вас</h3>
        <p class="br-sec-p">
          Власні форми та звіти можна налаштувати без програмування.
          Складніші речі дороблюємо під процеси саме вашого виробництва.
        </p>
      </article>
    </div>
  </section>

  <!-- 04 / БЕЗПЕКА -->
  <section class="br-section" id="br-security">
    <div class="br-section-head">
      <div class="br-num">04 / БЕЗПЕКА ДАНИХ</div>
      <h2 class="br-h2">Ваші креслення і контракти —<br><em>під надійним захистом</em></h2>
      <p class="br-section-sub">
        Найцінніше у виробника — конструкторська документація, специфікації та дані замовників.
        Ось як їх захищає сама система Odoo і що додатково налаштовуємо ми.
      </p>
    </div>

    <div class="br-sec-grid">
      <article class="br-sec-card br-sec-card--hero">
        <div class="br-sec-icon" aria-hidden="true">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="7" rx="2"/><rect x="3" y="13" width="18" height="7" rx="2"/><path d="M7 7.5h.01M7 16.5h.01"/></svg>
        </div>
        <div class="br-sec-body">
          <div class="br-sec-tag">ДЕ ПРАЦЮЄ СИСТЕМА</div>
          <h3 class="br-sec-h">Хмара або власний сервер — на ваш вибір</h3>
          <p class="br-sec-p">
            Odoo можна розгорнути у захищеній хмарі Odoo — вона сама дбає про сервери,
            оновлення та резервні копії, а дані зберігаються в дата-центрах ЄС із сертифікатом
            безпеки ISO 27001. Або на вашому власному сервері — тоді повний контроль і дані
            лишаються всередині компанії. Обидва варіанти безпечні; почати можна з одного
            й за потреби перейти на інший.
          </p>
        </div>
      </article>

      <!-- ГРУПА A -->
      <div class="br-sec-group">Що захищає <b>сама система Odoo</b></div>

      <article class="br-sec-card">
        <div class="br-sec-icon" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="8" r="3"/><path d="M3 20a6 6 0 0112 0"/><path d="M16 11l2 2 4-4"/></svg>
        </div>
        <div class="br-sec-tag">ДОСТУП</div>
        <h3 class="br-sec-h">Кожен бачить лише своє</h3>
        <p class="br-sec-p">Конструктор — креслення, бухгалтер — фінанси, постачальник — лише своє замовлення. Зайвого ніхто не бачить.</p>
      </article>

      <article class="br-sec-card">
        <div class="br-sec-icon" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="6" y="3" width="12" height="18" rx="2"/><path d="M11 18h2"/><path d="M9 8l2 2 4-4"/></svg>
        </div>
        <div class="br-sec-tag">ПОДВІЙНИЙ ВХІД</div>
        <h3 class="br-sec-h">Захист входу кодом (2FA)</h3>
        <p class="br-sec-p">Навіть якщо хтось дізнається пароль, без коду з телефону в систему не зайти.</p>
      </article>

      <article class="br-sec-card">
        <div class="br-sec-icon" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="8" cy="12" r="4"/><path d="M12 12h9M18 12v3M15 12v2"/></svg>
        </div>
        <div class="br-sec-tag">ЄДИНИЙ ВХІД</div>
        <h3 class="br-sec-h">Вхід через робочий акаунт</h3>
        <p class="br-sec-p">Один логін на всі системи компанії. Звільнили працівника — доступ зникає одразу скрізь.</p>
      </article>

      <article class="br-sec-card">
        <div class="br-sec-icon" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 4h14v16H5z"/><path d="M8 9h8M8 13h8M8 17h5"/></svg>
        </div>
        <div class="br-sec-tag">ЖУРНАЛ ЗМІН</div>
        <h3 class="br-sec-h">Видно, хто і що змінив</h3>
        <p class="br-sec-p">Якщо важливі дані зникли чи змінились — у журналі видно, хто, що і коли це зробив.</p>
      </article>

      <!-- ГРУПА B -->
      <div class="br-sec-group">Що ми <b>додатково налаштовуємо на сервері</b></div>

      <article class="br-sec-card">
        <div class="br-sec-icon" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="10" width="16" height="11" rx="2"/><path d="M8 10V7a4 4 0 018 0v3"/><circle cx="12" cy="15" r="1.5"/></svg>
        </div>
        <div class="br-sec-tag">ШИФРУВАННЯ</div>
        <h3 class="br-sec-h">Дані зашифровані на диску</h3>
        <p class="br-sec-p">Навіть якщо диск із сервера фізично вкрадуть, прочитати дані без ключа неможливо.</p>
      </article>

      <article class="br-sec-card">
        <div class="br-sec-icon" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L3 6v6c0 5 3.5 9 9 10 5.5-1 9-5 9-10V6l-9-4z"/><path d="M9 12l2 2 4-4"/></svg>
        </div>
        <div class="br-sec-tag">ЗАХИЩЕНЕ З'ЄДНАННЯ</div>
        <h3 class="br-sec-h">Безпечний зв'язок (HTTPS)</h3>
        <p class="br-sec-p">Дані між співробітником і сервером передаються в зашифрованому вигляді — їх не перехопити.</p>
      </article>

      <article class="br-sec-card">
        <div class="br-sec-icon" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a14 14 0 010 18M12 3a14 14 0 000 18"/></svg>
        </div>
        <div class="br-sec-tag">ДОЗВОЛЕНІ МЕРЕЖІ</div>
        <h3 class="br-sec-h">Вхід лише з ваших мереж</h3>
        <p class="br-sec-p">Зайти можна тільки з офісу або через захищений канал (VPN). З випадкових адрес — ні.</p>
      </article>

      <article class="br-sec-card">
        <div class="br-sec-icon" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><ellipse cx="12" cy="6" rx="8" ry="3"/><path d="M4 6v6c0 1.7 3.6 3 8 3s8-1.3 8-3V6"/><path d="M4 12v6c0 1.7 3.6 3 8 3s8-1.3 8-3v-6"/></svg>
        </div>
        <div class="br-sec-tag">РЕЗЕРВНІ КОПІЇ</div>
        <h3 class="br-sec-h">Кілька копій у різних місцях</h3>
        <p class="br-sec-p">Якщо сервер вийде з ладу — швидко відновимо роботу з резервної копії. Дані не загубляться.</p>
      </article>

      <!-- Сертифікації — м'яко, без обіцянок -->
      <article class="br-sec-soft">
        <div class="br-sec-icon" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="9" r="6"/><path d="M9 14l-2 7 5-3 5 3-2-7"/></svg>
        </div>
        <div>
          <b>Готуємо до сертифікацій.</b> Допомагаємо привести систему у відповідність до ISO 27001
          та вимог якості НАТО (AQAP), яких вимагають замовники. Сертифікат видає акредитований орган —
          ми готуємо систему й документи до перевірки.
        </div>
      </article>
    </div>

    <div class="br-sec-cta">
      <div class="br-sec-cta-text">
        Розглядаєте Odoo для свого виробництва? Покажемо на консультації,
        як це працює саме у вашому випадку.
      </div>
      <a href="#br-register" onclick="Index.showFormSpec(this); return false;"
         data-title="<?php echo esc_attr($popup_title); ?>"
         data-btnname="<?php echo esc_attr($popup_btn_label); ?>"
         data-ordertype="<?php echo esc_attr($popup_ordertype); ?>"
         data-gaEvent="<?php echo esc_attr($popup_ga_event); ?>"
         data-gaEventCategory="<?php echo esc_attr($popup_ga_category); ?>">Замовити консультацію →</a>
    </div>
  </section>

  <!-- 06 / ROADMAP -->
  <section class="br-section" id="br-roadmap">
    <div class="br-section-head">
      <div class="br-num">05 / ЕТАПИ</div>
      <h2 class="br-h2">Від першої зустрічі до запуску — <em>4-9 місяців</em></h2>
      <p class="br-section-sub">
        Прозорий план з чіткими етапами і зрозумілим обсягом робіт на кожному кроці.
        Без сюрпризів і без безкінечних бюджетів.
      </p>
    </div>

    <div class="br-schedule-list">

      <div class="br-tl-time">КРОК 01<span>2-3 тижні</span></div>
      <article class="br-tl-card">
        <div class="br-tl-tag">ЗНАЙОМСТВО З ПРОЦЕСАМИ</div>
        <h3 class="br-tl-h">Розбираємо, <em>як працює виробництво</em></h3>
        <p class="br-tl-speaker">Учасники: власник, керівники напрямів</p>
        <ul class="br-tl-points">
          <li>Спілкуємось із ключовими людьми, малюємо карту процесів</li>
          <li>Визначаємо, де найбільше болить і що дасть швидкий ефект</li>
          <li>Оцінюємо, що потрібно для майбутньої сертифікації (ISO, НАТО)</li>
          <li>Підписуємо NDA, фіксуємо обсяг і вартість цього етапу</li>
        </ul>
      </article>

      <div class="br-tl-time">КРОК 02<span>2-4 тижні</span></div>
      <article class="br-tl-card">
        <div class="br-tl-tag">ПЛАН І СЕРВЕР</div>
        <h3 class="br-tl-h">Готуємо <em>архітектуру рішення</em></h3>
        <p class="br-tl-speaker">Виконавці: архітектор рішення, інженери</p>
        <ul class="br-tl-points">
          <li>Обираємо, де розгортати систему — ваш сервер чи український дата-центр</li>
          <li>Описуємо, хто до чого матиме доступ</li>
          <li>Плануємо резервне копіювання і захист входу</li>
          <li>Готуємо план з'єднань із ДОТ, Brave1, Prozorro, M.E.Doc</li>
        </ul>
      </article>

      <div class="br-tl-time">КРОК 03<span>4-8 тижнів</span></div>
      <article class="br-tl-card">
        <div class="br-tl-tag">НАЛАШТУВАННЯ СИСТЕМИ</div>
        <h3 class="br-tl-h">Запускаємо <em>основні модулі</em></h3>
        <p class="br-tl-speaker">Виконавці: команда консультантів CRMiUM</p>
        <ul class="br-tl-points">
          <li>Виробництво, склад, документація, якість, закупівлі, бухгалтерія</li>
          <li>Українська бухгалтерія: податкові накладні, валютний контроль</li>
          <li>Кадри з обліком військовозобов'язаних і бронювань</li>
          <li>Базове з'єднання з M.E.Doc та «Вчасно»</li>
        </ul>
      </article>

      <div class="br-tl-time">КРОК 04<span>4-12 тижнів</span></div>
      <article class="br-tl-card br-tl-card--demo">
        <div class="br-tl-tag">ДООПРАЦЮВАННЯ ПІД ВАС</div>
        <h3 class="br-tl-h">Налаштовуємо під <em>специфіку оборонки</em></h3>
        <p class="br-tl-speaker">Виконавці: розробники, аналітики, тестувальники</p>
        <ul class="br-tl-points">
          <li>Контроль матеріалів, що підлягають держконтролю (ДСЕКУ)</li>
          <li>З'єднання з ДОТ, Brave1 Market, Prozorro</li>
          <li>Облік версій конструкторської документації</li>
          <li>Ведення тендерів і держконтрактів у системі</li>
        </ul>
      </article>

      <div class="br-tl-time">КРОК 05<span>3-6 тижнів</span></div>
      <article class="br-tl-card">
        <div class="br-tl-tag">ПЕРЕНЕСЕННЯ ДАНИХ І НАВЧАННЯ</div>
        <h3 class="br-tl-h">Переходимо з <em>1С / Excel</em></h3>
        <p class="br-tl-speaker">Виконавці: команда CRMiUM + ваші ключові співробітники</p>
        <ul class="br-tl-points">
          <li>Переносимо товари, залишки, контрагентів і документи</li>
          <li>1-2 місяці працюємо паралельно зі старою системою</li>
          <li>Запускаємо пілотний цех, навчаємо ключових користувачів</li>
          <li>Разом перевіряємо, що все працює як треба</li>
        </ul>
      </article>

      <div class="br-tl-time">КРОК 06<span>постійно</span></div>
      <article class="br-tl-card br-tl-card--demo">
        <div class="br-tl-tag">ЗАПУСК І ПІДТРИМКА</div>
        <h3 class="br-tl-h">Запускаємо і <em>супроводжуємо</em></h3>
        <p class="br-tl-speaker">Виконавці: команда підтримки CRMiUM</p>
        <ul class="br-tl-points">
          <li>Перші 2 місяці після запуску — посилена підтримка</li>
          <li>Технічна підтримка за обраним тарифом</li>
          <li>Регулярні оновлення без втрати ваших налаштувань</li>
          <li>Періодична перевірка безпеки і прав доступу</li>
        </ul>
      </article>

    </div>
  </section>

  <!-- 07 / КОМУ ПІДХОДИТЬ -->
  <section class="br-section" id="br-who">
    <div class="br-section-head">
      <div class="br-num">06 / КОМУ ПІДХОДИТЬ</div>
      <h2 class="br-h2">Кому Odoo дає <em>найбільше користі</em></h2>
      <p class="br-section-sub">
        Незалежно від того, що саме ви виробляєте для оборони — Odoo налаштовується
        під ваші процеси. Ось основні напрями, з якими працюємо:
      </p>
    </div>

    <div class="br-who-grid">
      <article class="br-what-card">
        <div class="br-what-tag">БЕЗПІЛОТНІ СИСТЕМИ</div>
        <h3 class="br-what-h">Дрони — повітряні, наземні, морські</h3>
        <p class="br-sec-p">FPV, розвідувальні та ударні, наземні роботи, морські дрони. Великі серії, десятки підрядників, часті зміни конструкції.</p>
      </article>
      <article class="br-what-card">
        <div class="br-what-tag">РЕБ · ЗВ'ЯЗОК</div>
        <h3 class="br-what-h">Електроніка, зв'язок, антени</h3>
        <p class="br-sec-p">Радіоелектронна боротьба, засоби зв'язку, антени. Складні вироби з багатьох компонентів і постійні доопрацювання.</p>
      </article>
      <article class="br-what-card">
        <div class="br-what-tag">ОПТИКА · ПРИЛАДИ</div>
        <h3 class="br-what-h">Тепловізори, приціли, далекоміри</h3>
        <p class="br-sec-p">Прилади спостереження і прицілювання. Серійний облік, протоколи калібрування, контроль якості.</p>
      </article>
      <article class="br-what-card">
        <div class="br-what-tag">БОЄПРИПАСИ · ОЗБРОЄННЯ</div>
        <h3 class="br-what-h">Артилерія, боєприпаси, засоби ураження</h3>
        <p class="br-sec-p">Суворий контроль якості, облік партій, особливі правила зберігання й маркування.</p>
      </article>
      <article class="br-what-card">
        <div class="br-what-tag">ТЕХНІКА · КОМПЛЕКТУЮЧІ</div>
        <h3 class="br-what-h">Бронетехніка, транспорт, деталі</h3>
        <p class="br-sec-p">Бронетехніка і транспорт, корпуси, акумулятори, друковані й механічні комплектуючі для інших виробників.</p>
      </article>
      <article class="br-what-card">
        <div class="br-what-tag">ІНШЕ ВИРОБНИЦТВО · ПЗ</div>
        <h3 class="br-what-h">Не знайшли свій напрям?</h3>
        <p class="br-sec-p">Будь-яке інше оборонне виробництво та розробка ПЗ. Система гнучка — налаштуємо під ваші процеси, навіть якщо вони нестандартні.</p>
      </article>
    </div>
  </section>

  <!-- 09 / FAQ -->
  <section class="br-section" id="br-faq">
    <div class="br-section-head">
      <div class="br-num">07 / ПИТАННЯ І ВІДПОВІДІ</div>
      <h2 class="br-h2">Що найчастіше запитують<br><em>керівники й власники</em> виробництв</h2>
    </div>

    <div class="br-faq-list">
      <details class="br-faq-item">
        <summary>Чим Odoo кращий за 1С, SAP чи Microsoft для оборонного виробництва?</summary>
        <p>
          Код Odoo відкритий — немає ризику санкцій чи блокування, і ви не залежите від одного
          постачальника. Систему можна повністю поставити на власний сервер, без хмари.
          Володіння обходиться в рази дешевше за SAP. На відміну від 1С — це повноцінне
          управління виробництвом з обліком версій конструкторської документації.
        </p>
      </details>

      <details class="br-faq-item">
        <summary>Чи можна поставити систему тільки на власний сервер, без хмари?</summary>
        <p>
          Так. Це звичайний варіант для тих, хто працює з держзамовленнями та постачає НАТО.
          Розгортаємо на вашому сервері або в українському дата-центрі з сертифікатом безпеки.
          План розгортання і потрібне обладнання порахуємо на першому етапі.
        </p>
      </details>

      <details class="br-faq-item">
        <summary>Як працює з ДОТ, Brave1 і Prozorro?</summary>
        <p>
          У нас є готові з'єднання: тендери з Prozorro підтягуються автоматично, з ДОТ і Brave1
          обмінюємось номенклатурою та статусами постачання. Дані ходять в обидва боки —
          не треба вводити їх вручну двічі.
        </p>
      </details>

      <details class="br-faq-item">
        <summary>Чи допоможе пройти сертифікацію якості НАТО (AQAP) та ISO 27001?</summary>
        <p>
          Так. Система веде перевірки якості, фіксує брак і виправлення, зберігає журнал дій
          та розмежовує доступ — усе, що перевіряють на сертифікації. Ми допомагаємо підготувати
          систему й документи. Сам сертифікат видає акредитований орган — ми готуємо вас до перевірки.
        </p>
      </details>

      <details class="br-faq-item">
        <summary>Скільки коштує і скільки триває впровадження?</summary>
        <p>
          Перший етап (знайомство з процесами) — від 2 тижнів. Перші робочі модулі — від 4 місяців.
          Повне впровадження з доопрацюваннями і з'єднанням із ДОТ — 6-9 місяців. Вартість залежить
          від обсягу. Точний кошторис даємо після першого етапу, коли зрозумілий обсяг робіт.
        </p>
      </details>

      <details class="br-faq-item">
        <summary>Як відбувається перехід з 1С або Excel?</summary>
        <p>
          Переносимо товари, контрагентів, залишки й відкриті документи. 1-2 місяці працюєте
          паралельно зі старою системою, щоб нічого не загубилось, потім поступово її вимикаємо.
          За понад 10 років ми перенесли багато клієнтів з 1С та інших систем.
        </p>
      </details>

      <details class="br-faq-item">
        <summary>Як система допомагає з бронюванням працівників?</summary>
        <p>
          Веде облік військовозобов'язаних, відстрочок і статусу «критично важливий».
          Поєднується з «Резерв+» для прискореної процедури бронювання, що діє з грудня 2025 року.
          Документи формуються автоматично — від подання до повідомлень про зміни.
        </p>
      </details>
    </div>
  </section>

  <!-- 10 / РЕЄСТРАЦІЯ -->
  <section class="br-section" id="br-register">
    <div class="br-section-head">
      <div class="br-num">08 / КОНСУЛЬТАЦІЯ</div>
    </div>

    <div class="br-final-grid">
      <div class="br-final-info">
        <div class="br-final-eyebrow">
          <span class="br-eyebrow-dot" aria-hidden="true"></span>
          ОНЛАЙН-КОНСУЛЬТАЦІЯ
        </div>
        <h2 class="br-final-h">Індивідуальна онлайн-консультація: <em>виявимо потреби</em> і підкажемо рішення</h2>
        <p class="br-final-sub">
          Проводимо онлайн індивідуальну консультацію: розбираємось у ваших задачах,
          виявляємо потреби й пропонуємо найефективніші рішення на базі Odoo.
          Без тиску і презентацій.
        </p>

        <ul class="br-final-bullets">
          <li>Розберемось у ваших процесах і задачах</li>
          <li>Виявимо потреби і вузькі місця</li>
          <li>Підкажемо найефективніші рішення під ваш випадок</li>
        </ul>

        <div class="br-final-meta">Онлайн · Безкоштовно</div>
      </div>

      <div class="br-form-wrap" data-ordertype="<?php echo esc_attr($popup_ordertype); ?>">
        <div class="br-form-eyebrow">ЗАЛИШТЕ ЗАЯВКУ</div>
        <?php
          /* CF7: та сама форма, що у попапі (bez-nazvy-2) — 3 поля: Ім'я / Телефон / E-mail.
             order_type (lowercase) перезаписуємо → JS теми мапить у Registration_Form для Zoho. */
          $form_html = do_shortcode('[cf7form cf7key="' . esc_attr($cf7_key) . '"]');
          $form_html = preg_replace('/<input[^>]+name="(order_type|form_position)"[^>]*>/i', '', $form_html);
          $injected_inputs =
              '<input class="wpcf7-form-control wpcf7-hidden" type="hidden" name="order_type" value="' . esc_attr($popup_ordertype) . '">'
            . '<input class="wpcf7-form-control wpcf7-hidden" type="hidden" name="form_position" value="' . esc_attr($form_position) . '">';
          $form_html = preg_replace('/(<form[^>]*>)/i', '${1}' . $injected_inputs, $form_html, 1);
          echo $form_html;
        ?>
      </div>
    </div>
  </section>

  <!-- Футер лендингу прибрано — нижче рендериться футер сайту через get_footer() -->

</main>

<script>
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

/* ====== FORCE BACKGROUND (#0E1015) ====== */
(function forceBackground(){
  var DARK='#0E1015';
  document.documentElement.style.setProperty('background',DARK,'important');
  document.documentElement.style.setProperty('background-color',DARK,'important');
  document.body.style.setProperty('background',DARK,'important');
  document.body.style.setProperty('background-color',DARK,'important');
  var brand=document.querySelector('.brand-page');
  if(brand){
    var p=brand.parentElement;
    while(p && p!==document.body && p!==document.documentElement){
      p.style.setProperty('background','transparent','important');
      p.style.setProperty('background-color','transparent','important');
      p.style.setProperty('background-image','none','important');
      p=p.parentElement;
    }
    brand.style.setProperty('background',DARK,'important');
    brand.style.setProperty('background-color',DARK,'important');
  }
  if(!document.getElementById('bento-bg-overlay')){
    var o=document.createElement('div'); o.id='bento-bg-overlay'; o.setAttribute('aria-hidden','true');
    var pr={position:'fixed',top:'0',left:'0',width:'100vw',height:'100vh',background:DARK,'background-color':DARK,'z-index':'-1','pointer-events':'none',margin:'0',padding:'0',border:'none'};
    Object.keys(pr).forEach(function(k){o.style.setProperty(k,pr[k],'important');});
    document.body.insertBefore(o,document.body.firstChild);
  }
})();
</script>

<style id="bento-miltech-wp-overrides">
/* Ховаємо ТІЛЬКИ хедер теми — футер сайту лишаємо (get_footer) */
body.page-template-crm-miltech > header,
body.page-template-crm-miltech #masthead,
body.page-template-crm-miltech .site-header,
body.page-template-crm-miltech .header,
body.page-template-crm-miltech .main-nav,
body.page-template-crm-miltech #wpadminbar,
body.page-template-crm-miltech .topBar,
body.page-template-crm-miltech .breadcrumbs,
body.page-template-crm-miltech .breadcrumb { display: none !important; }

/* Reset тематичних обгорток.
   ВАЖЛИВО: .container-fluid скидаємо лише ПОЗА футером — футер сайту
   використовує .siteWidth.container-fluid, тож :not(.siteWidth) береже його від "розлізання". */
html, body.page-template-crm-miltech { margin-top:0 !important; padding-top:0 !important; margin-bottom:0 !important; }
body.page-template-crm-miltech .site,
body.page-template-crm-miltech .site-content,
body.page-template-crm-miltech #content,
body.page-template-crm-miltech #page,
body.page-template-crm-miltech #primary,
body.page-template-crm-miltech .content-wrap,
body.page-template-crm-miltech .container-fluid:not(.siteWidth),
body.page-template-crm-miltech > .wrapper,
body.page-template-crm-miltech > main {
  margin:0 !important; padding:0 !important; max-width:none !important;
  background:transparent !important; background-color:transparent !important; background-image:none !important; overflow:visible !important;
}

/* TOPBAR — fixed */
body.page-template-crm-miltech .br-topbar {
  position: fixed !important; top: 12px; left: 50%; transform: translateX(-50%);
  width: calc(100% - 48px); max-width: 1272px; z-index: 300; margin-bottom: 0;
}
@media (max-width: 760px) {
  body.page-template-crm-miltech .br-topbar { width: calc(100% - 32px); max-width: none; }
}

/* Тематичне section{background:#15171c} → наші секції прозорі (hero має власне фото) */
body.page-template-crm-miltech .br-section,
body.page-template-crm-miltech .brand-page section { background-color: transparent !important; }

/* ====== CF7 форма (нижній блок) ====== */
.brand-page .br-form-wrap .wpcf7,
.brand-page .br-form-wrap form,
.brand-page .br-form-wrap .wpcf7-form { display:flex; flex-direction:column; gap:14px; }
.brand-page .br-form-wrap form p,
.brand-page .br-form-wrap .wpcf7-form p { margin:0 !important; display:flex; flex-direction:column; gap:6px; }
.brand-page .br-form-wrap form label,
.brand-page .br-form-wrap .wpcf7-form label { display:flex; flex-direction:column; gap:6px; font-size:13px; font-weight:600; color:var(--c-ink-2) !important; letter-spacing:0.02em; }
.brand-page .br-form-wrap form label br { display:none !important; }
.brand-page .br-form-wrap form .wpcf7-form-control-wrap { display:block; width:100%; }
.brand-page .br-form-wrap .inputWrapper { width:100% !important; margin:0 !important; padding:0 !important; }
.brand-page .br-form-wrap form input[type="text"],
.brand-page .br-form-wrap form input[type="email"],
.brand-page .br-form-wrap form input[type="tel"],
.brand-page .br-form-wrap form input[type="url"],
.brand-page .br-form-wrap form input[type="number"],
.brand-page .br-form-wrap form input:not([type]),
.brand-page .br-form-wrap form textarea {
  background:var(--c-tint-soft) !important; border:1px solid var(--c-line) !important; border-radius:12px !important;
  padding:14px 18px !important; font-size:16px !important; font-family:var(--font-body) !important; color:var(--c-ink) !important;
  width:100% !important; height:auto !important; box-shadow:none !important; transition:border-color .2s, background .2s; appearance:none; -webkit-appearance:none;
}
.brand-page .br-form-wrap form input::placeholder,
.brand-page .br-form-wrap form textarea::placeholder { color:var(--c-ink-3) !important; opacity:1 !important; }
.brand-page .br-form-wrap form input:focus,
.brand-page .br-form-wrap form textarea:focus { outline:none !important; border-color:var(--c-acc) !important; background:var(--c-tint-bold) !important; }
.br-form-wrap .btnWrap,
body.page-template-crm-miltech .br-form-wrap .btnWrap { display:block !important; width:100% !important; max-width:none !important; margin:8px 0 0 !important; padding:0 !important; text-align:center; }
.br-form-wrap button,
.br-form-wrap input[type="submit"],
.br-form-wrap [type="submit"],
.brand-page .br-form-wrap .wpcf7-submit,
.brand-page .br-form-wrap .btnWrap .btn,
.brand-page .br-form-wrap .btn,
.brand-page .br-form-wrap form button,
.brand-page .br-form-wrap form input[type="submit"] {
  display:flex !important; align-items:center !important; justify-content:center !important; margin-top:8px !important;
  background:#EF652F !important; background-color:#EF652F !important; background-image:none !important; color:#FFFFFF !important;
  font-family:'Onest',system-ui,sans-serif !important; font-weight:700 !important; font-size:16px !important; padding:18px 28px !important;
  border-radius:14px !important; border:none !important; cursor:pointer !important; width:100% !important; max-width:none !important; height:auto !important;
  text-transform:none !important; letter-spacing:-0.01em !important; white-space:nowrap !important; box-shadow:none !important; text-shadow:none !important; opacity:1 !important;
  transition:background .2s, transform .15s cubic-bezier(0.16,1,0.3,1); appearance:none; -webkit-appearance:none;
}
.br-form-wrap button:hover,
.brand-page .br-form-wrap .wpcf7-submit:hover,
.brand-page .br-form-wrap .btn:hover { background:#D45520 !important; background-color:#D45520 !important; color:#FFFFFF !important; transform:translateY(-2px); }
.brand-page .br-form-wrap .btn span { display:inline !important; white-space:nowrap !important; color:inherit !important; font:inherit !important; }
.brand-page .br-form-wrap .wpcf7-not-valid-tip { color:var(--c-acc) !important; font-size:12px; margin-top:4px; font-family:var(--font-mono); letter-spacing:0.04em; }
.brand-page .br-form-wrap .wpcf7-response-output { margin:14px 0 0 !important; padding:12px 16px !important; border-radius:10px !important; background:var(--c-tint-soft) !important; border:1px solid var(--c-line) !important; color:var(--c-ink) !important; font-size:14px; }
.brand-page .br-form-wrap input[type="hidden"] { display:none !important; }
/* CF7-honeypot (surname) ховаємо */
.brand-page .br-form-wrap .surname-wrap { display:none !important; }
</style>

<?php get_footer(); ?>
