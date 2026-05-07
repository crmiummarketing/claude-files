# Bento Style Page · Design Reference

Робочий приклад фірмової CRMiUM-сторінки (Zoho Summit 2026). Цей файл — еталонна реалізація. Для генерації нових сторінок з тим самим дизайном користуйся скілом `bento-style-page` (`/skills`), який містить ту саму інформацію + автоматизує генерацію.

Усе нижче — довідка по дизайн-системі.

---

## 1. Структура файлів

```
Bento-style-page/
├── INSTRUCTIONS.md
├── index.html                       — повна landing-сторінка (single-file)
└── assets/
    ├── base.css                     — reset + базові дефолти
    ├── fonts.css                    — шрифти (Onest + JetBrains Mono)
    ├── palettes.css                 — кольори у CSS-vars
    ├── concepts/brand.css           — стилі усіх блоків (~1200 рядків)
    └── page.js                      — countdown, counters, scroll-reveal, 3D-tilt, mobile menu
```

**Принцип**: усе візуальне — у `concepts/brand.css`. Кольори і шрифти — окремі файли `palettes.css`/`fonts.css` з CSS-vars. Брандити нову сторінку = редагувати ці vars без чіпання `brand.css`.

---

## 2. Палітра

### 3 кольори, інших немає

| Назва | HEX | Призначення |
|---|---|---|
| **Темний** | `#15171C` | Основний фон. **НЕ `#000`**. |
| **Помаранч** | `#EF652F` | Єдиний акцент. Hover: `#D45520`. Lighter: `#F58456`. |
| **Білий** | `#FFFFFF` | Текст, підписи, текст на помаранчевому. |

### Допоміжні (rgba від основних)
```css
--c-card:      #1B1E25;
--c-dark:      #0E1015;
--c-ink-2:     rgba(255,255,255,0.62);  /* secondary text */
--c-ink-3:     rgba(255,255,255,0.38);  /* tertiary text, placeholders */
--c-line:      rgba(255,255,255,0.10);  /* borders */
--c-tint-soft: rgba(255,255,255,0.05);
--c-tint-bold: rgba(255,255,255,0.16);
--c-acc-soft:  rgba(239,101,47,0.10);
--c-acc-mid:   rgba(239,101,47,0.25);
```

### Текст на помаранчевому = БІЛИЙ (завжди)
```css
--c-acc-ink:   #FFFFFF;
--c-acc-ink-2: rgba(255,255,255,0.82);
--c-acc-ink-3: rgba(255,255,255,0.60);
```

---

## 3. Шрифти

**Onest** (display + body, ваги 300–800).
**JetBrains Mono** — для UPPERCASE-міток: дати, eyebrow, теги, frame numbers.

```html
<link href="https://fonts.googleapis.com/css2?family=Onest:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@300;400;500;600;700&display=swap" rel="stylesheet">
```

### Типографічна ієрархія

| Рівень | Розмір | Вага | Letter-spacing | Line-height |
|---|---|---|---|---|
| H1 hero | `clamp(40px, 6.6vw, 88px)` | 800 | -0.04em | 0.98 |
| H2 section | `clamp(28px, 3.6vw, 48px)` | 700-800 | -0.03em | 1.05 |
| H3 cards | 22-28px | 700 | -0.02em | 1.15 |
| Lead | 18-19px | 400 | -0.005em | 1.55 |
| Body | 14-16px | 400 | normal | 1.5 |
| Eyebrow (mono) | 11-12px | 600 | 0.18em | 1 |

**Курсив + помаранч на ключовому слові у h1/h2** через `<em>`:
```html
<h1>Zoho Summit. <em>Трансформація</em> вашого бізнесу.</h1>
```

---

## 4. Архітектура сторінки

`<main class="brand-page">` містить усі секції. Префікс класів — `.br-*`.

### Стандартний порядок
1. `.br-topbar` — sticky pill з логотипом + nav + CTA
2. `.br-hero` — rounded-картка з radial-glow: eyebrow → h1 → lead → countdown → CTA → trust-strip
3. `.br-section #br-pains` — 3 картки з тригерами
4. `.br-section #br-zoho` — bento-grid 5-6 карток
5. `.br-section` гнучкість — 4 картки (3 + 1 акцентна)
6. `.br-section #br-program` — timeline 7-9 сесій
7. `.br-section #br-speakers` — 3-кол grid 6 фото
8. `.br-section #br-faq` — `<details>` блоки
9. `.br-section #br-register` — інфо + форма
10. `.br-foot` — текст у двох кінцях

**Контейнер**: `max-width: 1320px; margin: 0 auto; padding: 0 24px 96px;`

---

## 5. Анімації

### Принципи
- **Easing**: `cubic-bezier(.22, 1, .36, 1)` (premium ease-out)
- **Hardware-accelerated**: `transform`, `opacity`, `filter` тільки
- **Тривалості**: 200-400ms hover, 720ms entrance, 1800ms counters

### A) Hero waterfall (на завантаженні)
- Eyebrow → з лівого, +100ms
- H1 → з лівого, +220ms
- Lead → з правого, +480ms
- Hero-row → знизу, +700ms
- Trust-cards × 5 → знизу, по +80ms (880-1200ms)

На мобільному (≤760px) затримки скорочені до 20-620ms.

### B) Card scroll-reveal (per-card IO)
Кожна картка `.br-pain, .br-what-card, .br-flex-card, .br-tl-card, .br-speaker, .br-faq-item, .br-final-info, .br-form-wrap` має:
```css
opacity: 0;
animation: brSlideUp .72s cubic-bezier(.22, 1, .36, 1) forwards;
animation-play-state: paused;
```

JS у `page.js` спостерігає за КОЖНОЮ карткою індивідуально через `IntersectionObserver` (threshold 0.06, rootMargin -10% знизу). При появі — `el.style.animationPlayState = 'running'`. Картки залітають **по-черзі** як юзер скролить.

### C) Number counters (для `[data-counter]` елементів)
Цифри в `.br-trust-num` і `.br-what-num` з атрибутом `data-counter` анімуються 0→target за 1800ms ease-out quartic при появі у viewport (threshold 0.5).
**НЕ всі цифри** — лише ті що мають `data-counter`. Зазвичай: головна метрика (наприклад "500+") і ключова bento-картка (наприклад "55+").

### D) 3D-tilt на спікерах
`.br-speaker[data-tilt]` — perspective 900px, rotateX/Y до ±7°, scale 1.025 при mousemove. На leave — повернення за 0.55s. **Тільки desktop**.

### E) Hover на всіх interactive блоках
```css
transition: border-color .3s cubic-bezier(.22,1,.36,1),
            transform .3s cubic-bezier(.22,1,.36,1),
            box-shadow .3s cubic-bezier(.22,1,.36,1);
:hover {
  border-color: var(--c-acc-mid);
  transform: translateY(-4px);
  box-shadow: 0 12px 28px rgba(239,101,47,0.14);
}
```

Уніфіковано на: `.br-trust-card, .br-pain, .br-what-card, .br-flex-card, .br-tl-card, .br-speaker, .br-faq-item, .br-final-info, .br-form-wrap`.

---

## 6. Адаптивність

| Ширина | Поведінка |
|---|---|
| ≥ 1100px | Desktop full layout |
| 1100-760px | 3-кол → 2-кол |
| ≤ 760px | 1-кол, бургер-меню, sticky nav, fixed mobile menu |
| ≤ 420px | Tight: дрібні правки |

### Mobile UI деталі
- Burger-меню (`.br-burger` + `.br-mnav`) замість горизонтального nav
- `.br-topbar-cta` ховається; у burger-меню є `.br-mnav-cta`
- `.br-logo-event` (текст біля логотипу) ховається
- Topbar — sticky `top: 12px`, glass blur background
- Mobile menu — `position: fixed; top: 88px` коли відкритий

---

## 7. Логотипи

```html
<!-- Білий лого для темного фону -->
<img src="https://crmium.com/wp-content/uploads/2026/05/logo-white-for-dark-background.png" alt="CRMiUM">
<!-- Темний лого для світлого фону -->
<img src="https://crmium.com/wp-content/uploads/2026/05/logo-black-for-light-background.png" alt="CRMiUM">
```

У brand-палітрі (темна) — використовується тільки білий.

---

## 8. Конфігурація `page.js`

### Цільова дата countdown
```js
const TARGET_DATE = new Date('2026-05-27T10:00:00+03:00').getTime();
```
ISO 8601 з offset для Києва.

### Селектор для number counters
```js
document.querySelectorAll('[data-counter]').forEach(initNumberCounter);
```
Додавай атрибут `data-counter` до тих цифр, які треба анімувати.

---

## 9. Запуск локально

```bash
python -m http.server 8002
# http://localhost:8002
```
