# Product Requirements Document (PRD) — Smartani
### Prepared for automated testing with TestSprite
> **INTERNAL USE ONLY — contains admin credentials. Do not share publicly / do not submit to lecturer.**

---

## 1. Product Overview
**Smartani** is a company-profile website for a precision-farming / smart-greenhouse
technology company based in Indonesia. It presents the company's products, articles,
features, team, FAQ, and a consultation contact form. It also includes a private
**admin panel** (Filament) used by staff to manage all website content.

- **Base URL (production):** `https://kelas-b-5.informatika-unjedir.web.id/`
- **Admin panel URL:** `https://kelas-b-5.informatika-unjedir.web.id/admin`
- **Primary language of UI:** Indonesian (navigation labels are in English).
- **Tech stack:** Laravel 13 (PHP), Filament 5.6 (admin), Tailwind CSS v4, Swiper.js
  (sliders), Hotwired Turbo (SPA-like navigation). Server-rendered Blade pages.

### 1.1 User Roles
| Role | Access | Notes |
|------|--------|-------|
| **Visitor (public user)** | All public pages, no login required | Browses content, submits consultation form |
| **Admin** | `/admin` panel after login | Full CRUD over all content |

### 1.2 Admin Login Credentials (for TestSprite)
| Field | Value |
|-------|-------|
| Login URL | `/admin/login` |
| Email | `admin@smartani.id` |
| Password | `password123` |

> Any authenticated user can access the admin panel (`canAccessPanel` returns true).

---

## 2. Sitemap
**Public:**
| Page | URL | Notes |
|------|-----|-------|
| Home (Beranda) | `/` | Long single page with multiple sections |
| Products (Katalog) | `/katalog` | Paginated grid, category filter via `?category=` |
| Product Detail | `/katalog/{id}` | 404 if id not found |
| Articles (Artikel) | `/artikel` | Paginated grid, category filter via `?category=` |
| Article Detail | `/artikel/{slug}` | 404 if slug not found |
| FAQ | `/faq` | Accordion list, category filter |
| Consultation (Konsultasi) | `/konsultasi` | **Contains the contact form** |

**Admin (Filament):**
| Module | URL | Capability |
|--------|-----|-----------|
| Login | `/admin/login` | Email + password auth |
| Dashboard | `/admin` | Stats widgets |
| Hero Slides | `/admin/hero-slides` | CRUD |
| Features | `/admin/features` | CRUD |
| Sensors | `/admin/sensors` | CRUD |
| Products | `/admin/products` | CRUD |
| Articles | `/admin/articles` | CRUD |
| FAQs | `/admin/faqs` | CRUD |
| Contact Messages | `/admin/contact-messages` | View/manage submitted consultation messages |

---

## 3. Global UI — Navigation & Footer
**Top navigation bar (fixed, on every public page):**
- Logo "Smartani" (links to `/`)
- Menu links: **Home** (`/`), **Products** (`/katalog`), **Articles** (`/artikel`), **FAQ** (`/faq`)
- A primary button **"Contact Us"** → links to `/konsultasi`
- On mobile: a hamburger button toggles a dropdown menu with the same links.

**Footer (every public page):**
- Company info + social icons (Instagram, Facebook, LinkedIn, YouTube, TikTok) — links are placeholders (`#`).
- "Navigation" column: About Us (`/#tentang-kami`), Features (`/#fitur`), Products, Team (`/#tim`), Articles, FAQ (`/#faq`).
- "Subscribe to Newsletter" email input + send button — **non-functional by design** (form submit is prevented; no backend). Do not treat lack of submission as a bug.

---

## 4. Public Features (detailed)

### 4.1 Home page (`/`)
A long scrolling page composed of these sections, in order:
1. **Hero slider** — full-width Swiper carousel, auto-plays every 5s with fade effect, clickable pagination dots. Shows admin-managed hero slides (falls back to a default image if none).
2. **Features section** (`#fitur`) — heading "Fitur Terdepan Smartani". A Swiper carousel; each feature shows a title, description, and a **"Tonton Demo"** button. Clicking the button (or the image) opens a **video modal popup**; the modal has a close (X) button and closes when clicking the dark backdrop. (The video is a simulated placeholder.)
3. **Sensors section** (`#sensor`) — heading "Kemampuan Sensor Pintar". Grid of sensor cards (icon, name, description, dummy value + unit). Only shown if at least one active sensor exists.
4. **Products section** (`#produk`) — heading "Produk Unggulan Kami". Shows up to 3 latest products as cards (image, name, description, price label, **"Lihat Detail"** button → `/katalog/{id}`). A **"Lihat Semua Produk"** button → `/katalog`.
5. **About Us** (`#tentang-kami`) — company mission text + 3 highlight items + image.
6. **Team** (`#tim`) — heading "Tim Dibalik Smartani". 4 team member cards (CEO, COO, CTO, CMO) with hover effect.
7. **Latest Articles** (`#artikel`) — heading "Wawasan & Edukasi Terbaru". Up to 3 latest articles (image, category badge, date, title, excerpt, **"Baca Selengkapnya"** → `/artikel/{slug}`). A "Lihat Semua" link → `/artikel`.
8. **FAQ** (`#faq`) — up to 5 active FAQs of category "Umum", shown as **accordions** (click a question to expand/collapse the answer). A "Lihat Semua FAQ" button → `/faq`.
9. **Consultation CTA** (`#kontak`) — heading "Konsultasikan Greenhouse Anda" + a **"Mulai Konsultasi"** button → `/konsultasi`.

**Expected behaviors to test on Home:**
- Page loads without errors; all sections render.
- Hero slider auto-advances and pagination dots work.
- Feature "Tonton Demo" button opens and closes the video modal.
- FAQ accordion expands/collapses on click.
- All navigation buttons route to the correct page.

### 4.2 Products / Katalog (`/katalog`)
- Displays a grid of product cards, **paginated 9 per page** (`?page=`).
- **Category filter**: selecting a category reloads with `?category=<name>`; only products of that category are shown. "Semua" shows all.
- Each card has a **"Lihat Detail"** link → `/katalog/{id}`.
- **Pagination** preserves the active category filter (`withQueryString`).

### 4.3 Product Detail (`/katalog/{id}`)
- Shows full product info (name, image, description, content/specs, price).
- **Invalid id (e.g. `/katalog/999999`)** → returns HTTP 404 (Not Found page).

### 4.4 Articles / Artikel (`/artikel`)
- Grid of article cards, **paginated 9 per page**, ordered by newest `published_at`.
- **Category filter** via `?category=` (e.g. "Edukasi", "Tips & Trik", "Teknologi"). "Semua" shows all.
- Each card → `/artikel/{slug}`.

### 4.5 Article Detail (`/artikel/{slug}`)
- Shows the article (title, image, category, date, full HTML content).
- Shows up to **2 related articles** at the bottom.
- **Invalid slug (e.g. `/artikel/tidak-ada`)** → HTTP 404.

### 4.6 FAQ (`/faq`)
- Lists all **active** FAQs as accordions (click to expand/collapse).
- **Category filter** by FAQ category (e.g. "Umum", "Produk", "Artikel").

### 4.7 Consultation form (`/konsultasi`) — KEY FLOW
Left side shows contact info (Email `info.smartani@gmail.com`, Phone `+62 851 1755 1850`,
Address "Purwokerto, Indonesia"). Right side is the **consultation form** (POST to `/contact`).

**Form fields:**
| Label (UI) | name | Required | Rule |
|------------|------|----------|------|
| Nama Depan | `first_name` | Yes | string, max 50 |
| Nama Belakang | `last_name` | Yes | string, max 50 |
| Email | `email` | Yes | valid email, max 100 |
| Nama Green House | `greenhouse_name` | No | string, max 255 |
| Lokasi Green House | `greenhouse_location` | No | string, max 255 |
| Subjek | `subject` | Yes | string, max 100 |
| Konsultasi | `message` | Yes | string (textarea) |

Submit button label: **"Kirim Pesan"**.

**Submission behavior (AJAX):**
- On submit, the form sends an AJAX POST. While sending, the button shows "Mengirim...".
- **On success** (valid data): server returns JSON `{success:true, message:"Pesan Anda berhasil dikirim! ..."}`. The button turns green and shows **"Terkirim!"**, then the form is reset (cleared). The message is saved and appears in the admin "Contact Messages" module.
- **On failure** (validation error, e.g. empty required field or invalid email): the button shows **"Gagal Dikirim"**. Required HTML fields also trigger native browser validation.

**Expected tests:**
- Submit with all required valid fields → success state "Terkirim!".
- Submit with a required field empty → blocked / "Gagal Dikirim".
- Submit with invalid email format (e.g. `abc@`) → rejected.
- Optional greenhouse fields left empty → still succeeds.

---

## 5. Admin Panel Features (Filament, `/admin`)
> Requires login first. Use credentials in section 1.2.

### 5.1 Login (`/admin/login`)
- Email + password form.
- **Valid credentials** → redirected to the admin dashboard.
- **Invalid credentials** → error message, stays on login page.

### 5.2 Dashboard (`/admin`)
- Shows account widget + info widget + dashboard statistics (counts of content).

### 5.3 Content modules (each is a standard CRUD resource)
For every module below, an admin can: **List** records (table with search/sort/pagination),
**Create** a new record, **Edit** an existing record, and **Delete** records.

| Module | Manages | Key fields |
|--------|---------|-----------|
| **Hero Slides** | Homepage hero carousel images | image, title, order, is_active |
| **Features** | Homepage feature cards | title, description, image, order_index, is_active |
| **Sensors** | Sensor cards on home | name, icon, value_dummy, unit, description, is_active |
| **Products** | Product catalog | name, price, price_label, description, content, category, image |
| **Articles** | Blog/articles | title, slug, content, category, thumbnail, published_at |
| **FAQs** | FAQ entries | question, answer, category, is_active |
| **Contact Messages** | Submissions from `/konsultasi` form (read/manage) | first_name, last_name, email, greenhouse_name, greenhouse_location, subject, message |

**Expected admin tests (high value):**
1. Login with correct credentials succeeds; with wrong password fails.
2. Dashboard loads after login.
3. Each module's **List** page loads and shows data in a table.
4. **Create** a record (e.g. a new FAQ or Product) → it saves and appears in the list.
5. **Edit** a record → changes persist.
6. **Delete** a record → it is removed from the list.
7. A consultation submitted on the public `/konsultasi` form appears under **Contact Messages**.
8. Accessing `/admin` while logged out redirects to `/admin/login`.

---

## 6. Test Scope & Priorities

### In scope
- **Public site:** navigation, home sections, katalog (list/filter/pagination/detail/404),
  artikel (list/filter/pagination/detail/404), FAQ (list/filter/accordion),
  consultation form (valid/invalid/optional), responsive layout, 404 handling.
- **Admin panel:** login (valid/invalid), dashboard, and CRUD for each module, plus the
  end-to-end link (public form submission → appears in Contact Messages).

### Priorities
1. **P0 (critical):** Home loads, navigation works, consultation form valid submission,
   admin login, admin module list pages load.
2. **P1 (high):** Category filters, pagination, product/article detail, 404 pages,
   admin create/edit/delete on at least Products, Articles, FAQs.
3. **P2 (medium):** Hero/feature carousels, FAQ accordion, video modal, responsive view,
   admin Hero Slides / Sensors / Features CRUD.

### Out of scope (not bugs)
- Footer **newsletter** form (intentionally non-functional).
- Footer **social media** icons and Privacy/Terms links (placeholder `#`).
- The feature **video modal** plays a simulated placeholder, not a real video.
- Any feature requiring real payment, real IoT device data, or external integrations.

---

## 7. Notes for the Tester (TestSprite)
- The site uses Hotwired Turbo, so navigation may feel SPA-like; wait for content to load
  after clicking links.
- Success/error feedback on the consultation form is shown by changing the submit button
  text ("Mengirim..." → "Terkirim!" / "Gagal Dikirim"), not a separate alert box.
- Sliders auto-rotate; assert on presence/structure rather than a fixed slide.
- Admin tables, forms, and buttons are rendered by Filament (Livewire); allow for
  asynchronous updates after actions like save/delete.
