# Jayden Inniss Portfolio — Claude Context

## Project Overview
PHP portfolio site for Jayden Inniss, a sports/adventure photographer and videographer based in Whistler, BC.
Live site: https://www.jaydeninniss.com

## Tech Stack
- **Backend**: PHP (no framework, plain includes)
- **CSS**: Modern CSS with nesting, no preprocessor
- **JS**: ScrollReveal, Lenis (smooth scroll), PhotoSwipe v5 (lightbox)
- **Fonts**: Anybody + Be Vietnam Pro (Google Fonts)
- **Analytics**: Google Tag Manager (G-QPYBLBF2QD)

## Brand Colours (`styles/variables.css`)
```css
--jigrey:       #1f1f1f   /* dark background */
--jilightgreen: #4c8856   /* primary accent */
--jidarkgreen:  #253527
--jiolive:      #222922
--jiwhite:      #fff
```

## Project Structure
```
/
├── index.php                  # Homepage
├── photo.php                  # Photography hub (4 category cards)
├── photo-sports.php           # Sports sub-page (project cards + gallery)
├── photo-events.php           # Events sub-page (project cards + gallery)
├── photo-lifestylebrand.php   # Lifestyle & Brand sub-page (project cards + gallery)
├── photo-adventure.php        # Adventure sub-page (gallery only, no project cards)
├── photo-project.php          # Individual project page template
├── video.php                  # Video page
├── about.php / contact.php
├── projects/                  # Individual client project pages (one PHP file each)
├── gallery/
│   ├── sports/                # Category gallery images
│   ├── events/
│   ├── lifestylebrand/
│   ├── adventure/
│   └── projects/[name]/       # Per-project images + cover.webp
├── includes/
│   └── gallery.php            # render_gallery() function
├── parts/
│   ├── header.php
│   ├── footer.php
│   └── hamburger.php
├── styles/
│   ├── style.css              # Global styles (loaded on all pages)
│   ├── variables.css          # CSS custom properties
│   ├── photo.css              # Photo hub + sub-pages + gallery grid
│   ├── photo-project.css      # Individual project pages
│   └── project-master.css     # Shared project page layout
└── js/
    ├── scrollReveal.js
    └── lenis.js
```

## PHP Gallery System (`includes/gallery.php`)
The `render_gallery()` function scans a folder and outputs a PhotoSwipe-compatible grid:
```php
render_gallery('gallery/adventure', '/gallery/adventure', 'adventure-gallery');
//              ^filesystem path     ^web URL path          ^HTML id
```
- Auto-detects image dimensions for PhotoSwipe
- Adds `.wide` class to landscape images (ratio > 1.3) — they span 2 grid columns
- Excludes `cover.webp` (used as project card thumbnail, not a gallery image)
- Sort order is controlled by filename (alphabetical)

## PhotoSwipe Setup (per page)
Each gallery page imports PhotoSwipe v5 ESM and creates one lightbox instance:
```html
<script type="module">
    import PhotoSwipeLightbox from '/plugins/photoswipe/photoswipe-lightbox.esm.js';
    const lightbox = new PhotoSwipeLightbox({
        gallery: '#[gallery-id]',
        children: 'a',
        pswpModule: () => import('/plugins/photoswipe/photoswipe.esm.js')
    });
    lightbox.init();
</script>
<link rel="stylesheet" href="/plugins/photoswipe/photoswipe.css">
```

## CSS Architecture

### Responsive Breakpoints
- Mobile: default
- Tablet: `min-width: 768px`
- Desktop: `min-width: 1200px`

### Gallery Grid (`.gallery-grid` in `photo.css`)
```css
grid-template-columns: repeat(2, 1fr);    /* mobile */
/* 768px → */ repeat(3, 1fr)
/* 1200px → */ repeat(6, 1fr)
grid-auto-flow: dense;                    /* fills gaps from wide images */
```

### Client Project Cards (`.section-6 .figure`)
- `flex-basis: 31%` — 3-across on desktop
- `aspect-ratio: 3/2` on the `img` — consistent card height regardless of source image
- `object-fit: cover` + `object-position: center`
- Hover: image dims to `opacity: 0.2`, green border lines grow, figcaption fades in
- Mobile: title shown above card as `.client-title-mobile`; desktop: title in figcaption overlay

### Photo Hub Cards (`.photo-hub-row .figure` in `photo.css`)
- 2×2 CSS grid, `height: 90vh`
- Image: `position: absolute`, always `opacity: 0.8`
- Figcaption: always visible (`opacity: 1 !important`), gradient overlay, no transition
- These cards do NOT use the section-6 border-line hover animation

### Project Page Caboose (`#caboose` in `photo-project.css`)
- Prev/Next project navigation (left/right translateX animation on hover)
- `h3:hover { transform: none; }` scoped inside `#caboose` to cancel the global translateY from `photo.css`
- Prev/Next hidden on mobile, visible at 1200px+

## Photo Sub-Page Structure
Each sub-page (`photo-sports.php` etc.) follows this pattern:
```html
<?php include 'includes/gallery.php'; ?>
<head>
    <!-- PhotoSwipe ESM import with correct gallery ID -->
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/photo.css">
</head>
<body>
    <main>
        <div class="content-container">
            <!-- FEATURED PROJECTS section (not on adventure page) -->
            <div id="commercial">
                <div class="header-banner">
                    <h2>[Category]</h2>
                    <p>Featured Projects</p>
                </div>
                <div class="grid"><section class="section-6"><div class="row">
                    <!-- project cards here -->
                </div></section></div>
            </div>

            <!-- GALLERY section -->
            <div id="[category]">
                <div class="header-banner"><h2>Gallery</h2></div>
                <?php render_gallery('gallery/[category]', '/gallery/[category]', '[category]-gallery'); ?>
            </div>

            <!-- Back button -->
            <div class="header-banner" id="caboose">
                <h3><a href="photo">← Back to Photography</a></h3>
            </div>
        </div>
    </main>
</body>
```

## Project Card Template
```html
<h3 class="client-title-mobile">Client Name</h3>
<figure class="figure client">
    <img src="/gallery/projects/[slug]/cover.webp" loading="lazy">
    <figcaption><h3 class="client-title-desktop">Client Name</h3></figcaption>
    <a href="projects/[slug]"></a>
</figure>
```

## Current Project Cards by Page

### Sports (`photo-sports.php`)
Oyuki, Whistler Sliding Centre, RMU Athletes, FIS Nordic Championships, Knolly Bikes, Polygon Bikes, Foon Skis, Green River Motocross
_(Arc'teryx commented out)_

### Events (`photo-events.php`)
Nicklaus North Golf Course, Whistler Chamber of Commerce, Whistler Secondary Graduation, Partners in Tourism, Mekong Grand Opening, Balam, VRCA Awards, Whistler Writers Festival, UBC Ski and Board Club

### Lifestyle & Brand (`photo-lifestylebrand.php`)
False Creek Friends, Whistler Real Estate Co., Community Futures Howe Sound, Whistler Sliding Centre, Treeline Aerial, Whistler Naturalists
_(Arc'teryx and Emma Englund commented out)_

### Adventure (`photo-adventure.php`)
No project cards — gallery only.

## Gallery Folders
Each category and project needs:
- `gallery/[category]/` — actual gallery images (named alphabetically for sort order)
- `gallery/projects/[slug]/cover.webp` — card thumbnail (excluded from gallery render)

## Key Gotchas
- `cover.webp` is excluded by `render_gallery()` — always name thumbnails exactly `cover.webp`
- The global `h3:hover { transform: translateY(-5px); }` in `photo.css` affects all h3s — override with scoped CSS if needed (see `#caboose` in `photo-project.css`)
- Hub cards on `photo.php` must not inherit `.section-6` hover styles — use `.photo-hub-row` specificity to override
- CSS `../styles/` path used on sub-pages; `/styles/` or absolute paths used in `projects/`
- `photo-project.css` is for **individual project pages** only; `photo.css` covers all photo hub/sub-pages
