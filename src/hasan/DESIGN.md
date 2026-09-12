# DESIGN.md — CV Website Retro Pixel Vintage

## 1. Design Direction

### Konsep
Website CV/portfolio pribadi dengan tema **retro pixel vintage** yang terasa seperti gabungan:

- komputer 8-bit / 16-bit
- game RPG klasik
- komputer desktop era 90-an
- kartu identitas/arsip vintage
- terminal komputer lama

Desain harus terlihat **unik, playful, nostalgic, tetapi tetap profesional dan mudah dibaca**.

### Kata kunci visual

`retro` · `pixel art` · `vintage computer` · `8-bit` · `16-bit` · `CRT` · `RPG UI` · `old terminal` · `arcade` · `portfolio`

### Prinsip utama

1. **Pixel-first** — border, icon, button, divider, dan dekorasi menggunakan bentuk pixelated.
2. **Readable first** — efek retro tidak boleh mengurangi keterbacaan CV.
3. **Limited palette** — gunakan palet warna terbatas agar website terasa konsisten.
4. **Layered UI** — gunakan panel/card seperti window komputer atau menu RPG.
5. **Subtle animation** — animasi pendek dan ringan, bukan efek berlebihan.
6. **Responsive** — tampilan desktop dan mobile harus sama-sama terasa sebagai desain yang utuh.

---

# 2. Overall Visual Style

## 2.1 Background

Gunakan background utama berwarna gelap dengan tekstur halus.

Recommended:

- warna dasar: `#171B1F`
- pixel grid sangat halus
- noise/grain tipis
- vignette ringan di bagian tepi

Background tidak boleh terlalu ramai karena konten CV tetap menjadi fokus.

### Optional effects

- scanline CRT sangat tipis
- pixel dust/noise
- animated blinking cursor
- subtle screen flicker

Efek harus memiliki opacity rendah agar tidak mengganggu teks.

---

# 3. Color Palette

Gunakan palet utama berikut.

| Token | Hex | Penggunaan |
|---|---|---|
| `--bg` | `#171B1F` | Background utama |
| `--panel` | `#22282D` | Card/panel |
| `--panel-light` | `#2D353B` | Panel sekunder |
| `--cream` | `#F2E7C9` | Teks utama |
| `--muted` | `#AFA58F` | Teks sekunder |
| `--green` | `#9BBC68` | Primary accent |
| `--green-dark` | `#506C45` | Accent gelap |
| `--yellow` | `#E8C96A` | Highlight |
| `--orange` | `#D9824B` | Secondary accent |
| `--red` | `#B8564B` | Warning/status |
| `--blue` | `#7097A8` | Informasi |
| `--black` | `#0D1012` | Shadow/border |

### Color rule

Jangan menggunakan terlalu banyak warna sekaligus.

Prioritas:

- Cream → typography
- Green → primary interaction
- Yellow → highlight
- Orange → secondary visual accent
- Red → status/error
- Blue → metadata/information

---

# 4. Typography

## 4.1 Primary font

Gunakan font pixel/bitmap yang tetap mudah dibaca.

Recommended font categories:

- Pixel font
- Bitmap font
- Monospace font

Contoh pilihan:

- `Press Start 2P` — judul dan decorative text
- `VT323` — body/terminal text
- `Pixelify Sans` — alternatif yang lebih modern
- `JetBrains Mono` — fallback teknis

### Font hierarchy

```text
Hero title       : 32–52px desktop / 24–34px mobile
Section title    : 20–28px
Card title       : 16–22px
Body             : 14–17px
Small metadata   : 11–13px
Pixel label      : 10–12px
```

Gunakan font display pixel pada heading, tetapi gunakan font pixel yang lebih readable pada body.

### Text styling

- Heading: uppercase atau title case
- Body: normal casing
- Label: uppercase
- Metadata: monospace
- Gunakan `letter-spacing` kecil, jangan terlalu lebar

---

# 5. Layout

## 5.1 Desktop

Canvas:

```text
┌────────────────────────────────────────────────────────────┐
│                        TOP NAV                             │
├────────────────────────────────────────────────────────────┤
│                                                            │
│   ┌────────────────────────┐     ┌──────────────────────┐  │
│   │                        │     │                      │  │
│   │      HERO / PROFILE    │     │   CHARACTER CARD     │  │
│   │                        │     │                      │  │
│   └────────────────────────┘     └──────────────────────┘  │
│                                                            │
│   ┌──────────────────────────────────────────────────────┐ │
│   │ ABOUT / PROFILE                                      │ │
│   └──────────────────────────────────────────────────────┘ │
│                                                            │
│   ┌─────────────────────┐  ┌────────────────────────────┐ │
│   │ SKILLS / STATS      │  │ EXPERIENCE / QUEST LOG     │ │
│   └─────────────────────┘  └────────────────────────────┘ │
│                                                            │
│   ┌──────────────────────────────────────────────────────┐ │
│   │ PROJECT INVENTORY                                    │ │
│   └──────────────────────────────────────────────────────┘ │
│                                                            │
│   ┌──────────────────────────────────────────────────────┐ │
│   │ CONTACT / STATUS                                     │ │
│   └──────────────────────────────────────────────────────┘ │
│                                                            │
└────────────────────────────────────────────────────────────┘
```

Maximum content width:

```text
1100–1200px
```

Outer horizontal padding:

```text
24–40px
```

## 5.2 Mobile

Pada mobile, semua section menjadi satu kolom:

```text
┌─────────────────────┐
│ NAV                 │
├─────────────────────┤
│ PROFILE             │
├─────────────────────┤
│ HERO                │
├─────────────────────┤
│ ABOUT               │
├─────────────────────┤
│ SKILLS              │
├─────────────────────┤
│ EXPERIENCE          │
├─────────────────────┤
│ PROJECTS            │
├─────────────────────┤
│ CONTACT             │
└─────────────────────┘
```

Mobile padding:

```text
16px
```

---

# 6. Navigation

Navigation harus terlihat seperti **menu komputer / game menu**.

Contoh:

```text
┌────────────────────────────────────────────────────┐
│ [PX] SAN.EXE        ABOUT  SKILLS  QUESTS  CONTACT │
└────────────────────────────────────────────────────┘
```

### Navigation behavior

Desktop:

- sticky/fixed top navigation
- panel semi-solid
- pixel border
- active item memiliki `>` atau cursor blinking

Contoh active state:

```text
> ABOUT
  SKILLS
  QUESTS
  CONTACT
```

Mobile:

- gunakan hamburger/button pixelated
- menu dapat dibuka seperti dialog window

---

# 7. Hero Section

Hero adalah bagian paling kuat secara visual.

## Structure

Sebelah kiri:

- greeting
- nama
- job title
- short description
- CTA

Sebelah kanan:

- pixel avatar
- character card
- status indicator

Contoh:

```text
┌────────────────────────────────────────────────────┐
│ SYSTEM MESSAGE                                     │
│ > INITIALIZING PROFILE...                          │
│ > USER FOUND                                       │
│                                                    │
│ HELLO, I'M                                         │
│ SAN                                                 │
│ ─────────────────────                              │
│ WEB DEVELOPER / DESIGNER                           │
│                                                    │
│ Building digital experiences with code + design.  │
│                                                    │
│ [ VIEW PROJECTS ] [ CONTACT ]                     │
└────────────────────────────────────────────────────┘
```

### Hero status

Gunakan status seperti:

```text
● ONLINE
● AVAILABLE
● CURRENTLY BUILDING
```

Untuk active state, gunakan warna green.

---

# 8. Character/Profile Card

Gunakan konsep **RPG character status screen**.

```text
┌──────────────────────────────┐
│ CHARACTER                    │
├──────────────────────────────┤
│                              │
│          [ PIXEL ]           │
│           AVATAR             │
│                              │
├──────────────────────────────┤
│ NAME      : SAN              │
│ CLASS     : DEVELOPER        │
│ LEVEL     : 03               │
│ LOCATION  : INDONESIA        │
│ STATUS    : ONLINE           │
├──────────────────────────────┤
│ EXP ███████████░░ 82%        │
└──────────────────────────────┘
```

Data dapat disesuaikan dengan profil asli.

---

# 9. About Section

Gunakan panel dengan heading seperti:

```text
[01] ABOUT_ME.TXT
```

Layout:

```text
┌────────────────────────────────────────────────────────┐
│ [01] ABOUT_ME.TXT                                      │
├────────────────────────────────────────────────────────┤
│                                                        │
│ > Hello! I'm a developer who enjoys building...       │
│                                                        │
│ > My interests include web development, UI design,    │
│   Linux, open source, and creative coding.             │
│                                                        │
└────────────────────────────────────────────────────────┘
```

Gunakan paragraf pendek agar terasa seperti terminal/log.

---

# 10. Skills Section

Skill ditampilkan seperti **character statistics**.

Contoh:

```text
SKILLS / STATS

HTML       ██████████████████░░  90%
CSS        █████████████████░░░  85%
JavaScript ███████████████░░░░░  75%
PHP        ██████████████░░░░░░  70%
Linux      █████████████████░░░  85%
UI Design  ███████████████░░░░░  75%
```

### Alternative card

```text
┌───────────────┐
│ HTML          │
│ LV. 09        │
│ ████████████  │
└───────────────┘
```

Progress bar harus pixelated, bukan rounded modern.

---

# 11. Experience Section

Ubah istilah `Experience` menjadi sesuatu yang tetap profesional tetapi terasa retro.

Recommended heading:

```text
[02] QUEST_LOG
```

Setiap pengalaman menjadi quest.

```text
┌────────────────────────────────────────────────────────────┐
│ QUEST #03                                                   │
│ Web Developer                                               │
│ 2025 — PRESENT                                              │
├────────────────────────────────────────────────────────────┤
│ Built and maintained web applications...                   │
│                                                            │
│ REWARDS                                                     │
│ + PHP                                                       │
│ + MySQL                                                     │
│ + API                                                       │
└────────────────────────────────────────────────────────────┘
```

Gunakan vertical timeline sederhana untuk beberapa pengalaman.

---

# 12. Projects Section

Gunakan konsep **inventory / cartridge collection**.

Heading:

```text
[03] PROJECT_INVENTORY
```

Project card:

```text
┌──────────────────────────────────────┐
│ [01] PROJECT                         │
├──────────────────────────────────────┤
│                                      │
│        [ PROJECT PREVIEW ]           │
│                                      │
├──────────────────────────────────────┤
│ PROJECT NAME                         │
│                                      │
│ Short project description goes here. │
│                                      │
│ [ HTML ] [ JS ] [ PHP ]              │
│                                      │
│ [ VIEW ]       [ SOURCE ]            │
└──────────────────────────────────────┘
```

### Project states

Hover:

- card bergeser 2–4px
- pixel shadow muncul
- border menjadi accent color
- preview dapat sedikit zoom

Jangan menggunakan smooth glassmorphism.

---

# 13. Contact Section

Gunakan konsep **communication console**.

```text
┌────────────────────────────────────────────────────────┐
│ [04] COMMUNICATION_CONSOLE                              │
├────────────────────────────────────────────────────────┤
│                                                        │
│ > CONNECTION STATUS: ONLINE                            │
│ > CHANNELS AVAILABLE:                                 │
│                                                        │
│ [ EMAIL ]                                              │
│ [ GITHUB ]                                             │
│ [ LINKEDIN ]                                           │
│ [ INSTAGRAM ]                                          │
│                                                        │
└────────────────────────────────────────────────────────┘
```

CTA utama:

```text
[SEND MESSAGE]
```

Button harus memiliki feedback visual ketika di-hover/click.

---

# 14. Buttons

Gunakan pixelated rectangular buttons.

Default:

```text
┌────────────────────┐
│ > VIEW PROJECTS    │
└────────────────────┘
```

### Button rules

- border 2px
- border-radius: `0`
- shadow offset 3–5px
- uppercase label
- cursor/arrow indicator

Hover:

```text
transform: translate(2px, 2px)
```

Active:

```text
transform: translate(4px, 4px)
box-shadow: none
```

---

# 15. Cards / Windows

Semua card menggunakan sistem **retro window**.

```text
┌──────────────────────────────────────┐
│ ● ● ●  WINDOW_TITLE                  │
├──────────────────────────────────────┤
│                                      │
│              CONTENT                 │
│                                      │
└──────────────────────────────────────┘
```

Alternatif window header:

```text
┌──────────────────────────────────────┐
│ > ABOUT_ME.TXT                 [□][x]│
├──────────────────────────────────────┤
```

### Card style

- `border: 2px solid`
- `border-radius: 0`
- hard shadow
- no excessive blur
- no giant gradients

---

# 16. Pixel Borders

Border menjadi salah satu identitas visual utama.

Prefer:

- 2px solid border
- double border
- stepped pixel corners
- CSS pseudo-element untuk pixel corners

Avoid:

- rounded 16px/24px cards
- glassmorphism
- excessive drop shadow
- modern neumorphism

---

# 17. Icons

Gunakan icon yang memiliki gaya pixel/bitmap.

Recommended icon concepts:

- cursor arrow
- floppy disk
- folder
- terminal
- computer
- game controller
- cartridge
- star
- heart
- lightning
- mail
- globe
- GitHub mark

Icon harus sederhana dan konsisten dengan ukuran pixel-grid.

---

# 18. Decorative Elements

Tambahkan dekorasi secara terkontrol.

### Pixel decorations

- `+` marks
- stars
- tiny squares
- arrows
- loading bars
- status LEDs
- cursor
- horizontal scanline
- pseudo terminal symbols

Contoh:

```text
+------------------------------------------------+
|                                                |
|     *             +                 .          |
|                                                |
|                  >_                            |
|                                                |
+------------------------------------------------+
```

Dekorasi tidak boleh mengganggu navigasi atau konten.

---

# 19. Animation

Animasi harus terasa seperti UI komputer lama.

## Recommended

### Blinking cursor

```text
_ 
```

Blink setiap `500–700ms`.

### Boot text

Saat halaman pertama dibuka:

```text
> BOOTING PORTFOLIO...
> LOADING PROFILE...
> LOADING PROJECTS...
> SYSTEM READY.
```

Gunakan animasi hanya saat initial load.

### Hover

Card:

- translate 2px
- shadow menjadi lebih tegas

Button:

- translate 2px
- icon `>` dapat berpindah sedikit

### Avoid

- parallax berlebihan
- spinning animation
- infinite floating elements
- excessive glitch
- animation yang mengganggu reading

---

# 20. CRT / Scanline Effect

Gunakan pseudo-element global untuk efek CRT opsional.

Contoh konsep:

```css
body::after {
  content: "";
  position: fixed;
  inset: 0;
  pointer-events: none;
  opacity: 0.035;
  background: repeating-linear-gradient(
    to bottom,
    transparent 0,
    transparent 2px,
    rgba(255,255,255,.08) 3px
  );
}
```

Efek harus sangat subtle.

Untuk pengguna yang memilih `prefers-reduced-motion`, nonaktifkan animasi dan efek flicker.

---

# 21. Responsive Rules

## Desktop ≥ 1024px

- gunakan 2-column layout pada hero
- project grid 2–3 column
- navigation horizontal
- decorative pixel elements lebih banyak

## Tablet 768–1023px

- hero mulai menjadi single column jika ruang sempit
- project grid 2 column
- kurangi dekorasi

## Mobile < 768px

- single column
- project card 1 column
- font heading diperkecil
- navigation menjadi compact menu
- panel padding 14–18px
- hindari horizontal overflow

## Small mobile < 480px

- gunakan typography lebih compact
- button full-width bila diperlukan
- avatar lebih kecil
- hide decorative elements yang tidak penting

---

# 22. Accessibility

Retro visual tidak boleh mengorbankan accessibility.

### Requirements

- text contrast harus cukup tinggi
- jangan menyampaikan informasi hanya melalui warna
- semua button memiliki accessible label
- image memiliki `alt`
- keyboard navigation harus berfungsi
- visible focus state wajib tersedia
- animasi mengikuti `prefers-reduced-motion`
- jangan gunakan cursor blink untuk informasi penting

Focus state:

```text
outline: 2px solid var(--yellow);
outline-offset: 3px;
```

---

# 23. Interaction Language

Gunakan istilah retro sebagai **lapisan visual**, bukan mengganti informasi profesional secara berlebihan.

| Istilah Visual | Informasi sebenarnya |
|---|---|
| `QUEST LOG` | Experience |
| `PROJECT INVENTORY` | Projects |
| `CHARACTER` | Profile |
| `STATS` | Skills |
| `COMMUNICATION CONSOLE` | Contact |
| `SYSTEM STATUS` | Availability |
| `REWARD` | Achievement/Technology |
| `LEVEL` | Experience indicator |

Hindari istilah yang membuat recruiter bingung.

---

# 24. Microcopy

Tone:

**friendly + technical + nostalgic**.

Contoh:

```text
> HELLO, WORLD!
> SYSTEM READY.
> PROFILE LOADED.
> CURRENTLY BUILDING COOL THINGS.
> CONNECTION ESTABLISHED.
> THANK YOU FOR VISITING.
```

CTA:

```text
[ VIEW WORK ]
[ DOWNLOAD CV ]
[ CONTACT ME ]
[ OPEN GITHUB ]
```

Status:

```text
● ONLINE
● AVAILABLE
● BUSY BUILDING
● OPEN TO COLLABORATION
```

---

# 25. Footer

Footer dibuat seperti system status bar.

```text
┌────────────────────────────────────────────────────────┐
│ SYSTEM: ONLINE   VERSION: 1.0   © 2026 SAN            │
└────────────────────────────────────────────────────────┘
```

Tambahkan:

- copyright
- current year
- version kecil
- social links
- optional `last updated`

---

# 26. Suggested Page Structure

```text
App
├── Navigation
├── Hero
│   ├── Intro
│   ├── CTA
│   └── Character Card
├── About
├── Skills / Stats
├── Experience / Quest Log
├── Projects / Inventory
├── Contact / Communication Console
└── Footer / System Status
```

Single-page scrolling adalah pendekatan utama.

---

# 27. Component Naming

Jika menggunakan React/Next.js, struktur komponen yang direkomendasikan:

```text
components/
├── RetroWindow.tsx
├── PixelButton.tsx
├── PixelIcon.tsx
├── Navbar.tsx
├── Hero.tsx
├── CharacterCard.tsx
├── About.tsx
├── SkillStats.tsx
├── QuestLog.tsx
├── ProjectInventory.tsx
├── ProjectCard.tsx
├── ContactConsole.tsx
├── StatusBar.tsx
└── CRTOverlay.tsx
```

---

# 28. CSS Design Tokens

Contoh token dasar:

```css
:root {
  --bg: #171B1F;
  --panel: #22282D;
  --panel-light: #2D353B;
  --cream: #F2E7C9;
  --muted: #AFA58F;
  --green: #9BBC68;
  --green-dark: #506C45;
  --yellow: #E8C96A;
  --orange: #D9824B;
  --red: #B8564B;
  --blue: #7097A8;
  --black: #0D1012;

  --border: 2px;
  --shadow-size: 4px;
  --radius: 0px;

  --content-width: 1180px;
  --page-padding: 24px;
}
```

---

# 29. Pixel Shadow System

Hindari soft shadow modern.

Gunakan hard offset shadow:

```css
box-shadow: 4px 4px 0 var(--black);
```

Untuk button:

```css
box-shadow: 3px 3px 0 var(--black);
```

Untuk active state:

```css
transform: translate(3px, 3px);
box-shadow: none;
```

---

# 30. Image / Avatar Direction

Avatar idealnya berupa pixel-art portrait.

Style:

- 16-bit
- limited colors
- strong silhouette
- simple background
- no photorealistic rendering

Avatar dapat ditampilkan dalam frame:

```text
┌──────────────────┐
│                  │
│    PIXEL ART     │
│     AVATAR       │
│                  │
└──────────────────┘
```

Untuk project screenshot, gambar boleh lebih modern tetapi harus diberi frame pixel agar masuk ke visual system.

---

# 31. Do / Don't

## DO

- gunakan border tegas
- gunakan warna terbatas
- gunakan typography pixel secara konsisten
- gunakan layout seperti komputer/game UI
- gunakan micro-interactions sederhana
- prioritaskan readability
- gunakan hard shadow
- gunakan spacing yang konsisten

## DON'T

- jangan gunakan glassmorphism
- jangan gunakan gradient modern yang berlebihan
- jangan gunakan rounded card besar
- jangan memakai terlalu banyak warna neon
- jangan membuat semua teks menjadi pixel font yang sulit dibaca
- jangan memenuhi seluruh halaman dengan glitch
- jangan membuat animasi terus-menerus yang mengganggu

---

# 32. Visual Priority

Urutan fokus visual:

```text
1. Nama / Identity
2. Role / Profession
3. CTA
4. Character/Profile
5. Projects
6. Experience
7. Skills
8. Contact
```

Website harus tetap dapat dipahami dalam 5–10 detik pertama.

---

# 33. Final Design Target

Hasil akhir harus terasa seperti:

> **"Sebuah CV modern yang dibangun seolah-olah merupakan interface komputer/game retro tahun 90-an."**

Bukan sekadar website dengan font pixel.

Identitas visual harus muncul dari kombinasi:

```text
PIXEL TYPOGRAPHY
        +
RETRO COLOR PALETTE
        +
HARD PIXEL BORDERS
        +
RPG / TERMINAL UI
        +
CRT DETAILS
        +
SUBTLE INTERACTION
        +
MODERN RESPONSIVE LAYOUT
```

Target akhirnya adalah **retro secara visual, modern secara UX, dan profesional sebagai CV.**
