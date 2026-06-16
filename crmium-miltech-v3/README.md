# Odoo ERP для Miltech — лендинг (V3) + WordPress-шаблон

Лендинг CRMiUM для оборонної промисловості. Темна bento-тема, дрон-hero, чесний блок безпеки.

## Файли

| Файл | Призначення |
|---|---|
| `index.html` | Статичний прев'ю (локально, форма-заглушка). Деплоїться на GitHub Pages для узгодження. |
| `crm-miltech.php` | **WordPress page-template** з підключеними формами (CF7 + попап теми). Це фінальний файл для сайту. |
| `assets/` | CSS/JS для статичного прев'ю (у `.php` все вже інлайнено — assets там не потрібні). |
| `images/dron.png` | Фото дрона для hero. |
| `content.md` | Текстова мапа контенту. |

URL прев'ю (Pages): https://crmiummarketing.github.io/claude-files/crmium-miltech-v3/

---

## Встановлення `.php` на WordPress

1. **Залити шаблон.** Скопіювати `crm-miltech.php` у папку активної теми: `/wp-content/themes/crmium/`.
   (Через FTP/SFTP або File Manager у CyberPanel.)

2. **Залити фото дрона.** Завантажити `images/dron.png` у медіатеку WordPress так, щоб шлях став:
   `https://crmium.com/wp-content/uploads/2026/06/dron.png`
   (саме цей шлях прописано у шаблоні; якщо WP покладе в інший місяць — або перемісти файл, або заміни URL у `.php`: пошук `2026/06/dron.png`).
   Логотипи вже використовують наявні файли в `/uploads/2026/05/`.

3. **Створити сторінку.** WP-адмінка → Сторінки → Додати нову → у блоці «Атрибути сторінки → Шаблон» обрати **«CRM Miltech»**. Опублікувати.
   Рекомендований slug: `/uk/crm/odoo-erp-miltech/` (мова — українська, Polylang).

4. **Hard refresh** після публікації: `Ctrl+F5` (тема кешує CSS).

---

## Форми (підключені)

Працюють **дві точки** збору заявок — обидві ведуть у Zoho CRM:

1. **Попап теми** — кнопки «Замовити консультацію» (у меню, hero, мобільному меню, блоці безпеки) відкривають глобальний попап CRMiUM через `Index.showFormSpec(this)`.
2. **CF7-форма** — нижній блок «Онлайн-консультація».

### Конфіг (вгорі `.php`, легко міняти)
```php
$popup_title     = 'Консультація щодо Odoo для виробництва'; // заголовок попапа
$popup_btn_label = 'Замовити консультацію';                  // кнопка попапа
$popup_ordertype = 'Odoo ERP Miltech';                       // → Zoho Registration_Form (мітка ліда)
$cf7_key         = 'bez-nazvy-2';                            // ТА САМА форма, що у попапі (3 поля: Ім'я/Телефон/E-mail)
$form_position   = 'miltech-konsultatsiya';                  // мітка місця форми у Zoho
```
- **`$cf7_key = 'bez-nazvy-2'`** — це та сама форма, що відкривається у попапі «Замовити консультацію» (Ім'я / Телефон / E-mail). Якщо для Miltech потрібна окрема форма — створи її у Contact Form 7 і заміни slug тут.
- Поле `order_type` у CF7 **lowercase** — JS теми сам мапить його в `Registration_Form` для Zoho. Не міняти на PascalCase.
- Перевір тестовим сабмітом: у Zoho має прийти лід з `Registration_Form = Odoo ERP Miltech`.

---

## Меню, футер, логотип (за вимогою)

- **Меню** — pill-навігація з лендингу (зверху, `position: fixed`). Хедер теми приховано.
- **Футер** — **футер сайту** через `get_footer()` (а не футер лендингу — його прибрано). Тобто внизу буде стандартний підвал crmium.com.
- **Логотип** — посилання веде на головну української версії: `https://crmium.com/uk/`.

---

## Перевірка (definition of done на staging)

- [ ] Topbar завжди зверху при скролі (fixed), хедер теми не видно.
- [ ] Внизу — звичайний футер сайту crmium.com.
- [ ] Фон рівний `#0E1015`; дрон-hero видно; на великих екранах hero компактний, на ноутбуках — на весь екран.
- [ ] Кнопки «Замовити консультацію» відкривають попап CRMiUM.
- [ ] Нижня CF7-форма стилізована темно, помаранчева кнопка на всю ширину; тестовий сабміт → лід у Zoho.
- [ ] Клік на лого → `crmium.com/uk/`.
- [ ] Console: 0 помилок. Аналітика (GTM/Clarity) працює (бо викликаються `get_header`/`get_footer`).

## Якщо шрифт Onest не підвантажився
Тема могла заблокувати Google Fonts. Додати у `functions.php` теми:
```php
add_action('wp_enqueue_scripts', function () {
  if (is_page_template('crm-miltech.php')) {
    wp_enqueue_style('bento-fonts',
      'https://fonts.googleapis.com/css2?family=Onest:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@300;400;500;600;700&display=swap', [], null);
  }
});
```

## Технічні нотатки
- Увесь CSS/JS інлайнено в `.php` (один файл, без залежності від `assets/`).
- Селектори скоуплено на `body.page-template-crm-miltech` + reset обмежено `.brand-page` — щоб не зламати попап/футер теми.
- Фон форсується 4 рівнями (CSS + JS overlay) — тема перебиває фон пізнішим CSS.
