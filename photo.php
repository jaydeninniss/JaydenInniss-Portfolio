<?php include 'includes/gallery.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jayden Inniss - Photography</title>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QPYBLBF2QD"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-QPYBLBF2QD');
    </script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anybody:ital,wght@0,100..900;1,100..900&family=Be+Vietnam+Pro:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- GSAP -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>

    <!-- ScrollReveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- LENIS - SMOOTH SCROLL -->
    <!-- <script src="https://unpkg.com/lenis@1.3.1/dist/lenis.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/lenis@1.3.1/dist/lenis.css"> -->

    <!-- SEO -->
    <meta property="og:title" content="Photo - Jayden Inniss">
    <meta property="og:type" content="website">
    <meta property="og:URL" content="https://www.jaydeninniss.com/photo">
    <meta property="og:image" content="https://www.jaydeninniss.com/media/logo/jaydeninniss_logo.svg">
    <meta property="og:description" content="Jayden Inniss is a sports/adventure photographer and videographer proudly based in Whistler, BC.">
    <meta name="robots" content="all">
    <meta name="author" content="Jayden Inniss">
    <meta name="description" content="Jayden Inniss is a sports/adventure photographer and videographer proudly based in Whistler, BC.">
    <meta name="keywords" content="Photography, Videography, Jayden Inniss, Whistler, Camera, Photography Services in Whistler, Filmer in Whistler, Biking, Skiing, Hiking, Camping, Whistler British Columbia Photo/Video, Sport Photographer, Landscape Photography, Action Sport Photography and Videography">
    <link rel="icon" type="image/x-icon" href="https://www.jaydeninniss.com/media/logo/jaydeninniss_logo.svg">
    <!-- End of SEO -->

    <!-- PHOTOSWIPE PLUGIN -->
    <script type="module">
        import PhotoSwipeLightbox from '/plugins/photoswipe/photoswipe-lightbox.esm.js';

        // Initialise a separate PhotoSwipe instance for each gallery on the page.
        ['adventure-gallery', 'landscape-gallery'].forEach(function(id) {
            const lightbox = new PhotoSwipeLightbox({
                gallery: '#' + id,
                children: 'a',
                pswpModule: () => import('/plugins/photoswipe/photoswipe.esm.js')
            });
            lightbox.init();
        });
    </script>

    <link rel="stylesheet" href="/plugins/photoswipe/photoswipe.css">
    <!-- END PHOTOSWIPE PLUGIN -->

    <!-- CSS -->
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/photo.css">

</head>
<body>

    <?php include "./parts/header.php" ?>
    <?php include "parts/hamburger.php" ?>

    <main>

    <!-- HERO IMAGE -->
    <!-- <div id="photo-hero">
        <div id="photo-hero-bg"></div>
    </div> -->
    <!-- END HERO IMAGE -->

    <div class="content-container">

        <!-- CLIENT PROJECTS — static grid of figure cards linking to project pages -->
        <div id="commercial">
            <div class="header-banner">
                <h2>Client Projects</h2>
            </div>

            <div class="grid">
                <section class="section-6">
                    <div class="row">

                        <h3 class="client-title-mobile">WORCA</h3>
                        <figure class="figure client">
                            <img src="/gallery/projects/worca/cover.webp" loading="lazy">
                            <figcaption>
                                <h3 class="client-title-desktop">WORCA</h3>
                            </figcaption>
                            <a href="projects/worca"></a>
                        </figure>

                        <h3 class="client-title-mobile">UBC Ski and Board Club</h3>
                        <figure class="figure client">
                            <img src="/gallery/projects/ubcsnb/cover.webp" loading="lazy">
                            <figcaption>
                                <h3 class="client-title-desktop">UBC Ski and Board Club</h3>
                            </figcaption>
                            <a href="projects/ubcsnb"></a>
                        </figure>

                        <h3 class="client-title-mobile">Broadcast Television</h3>
                        <figure class="figure client">
                            <img src="/gallery/projects/broadcast/cover.webp" loading="lazy">
                            <figcaption>
                                <h3 class="client-title-desktop">Broadcast Television</h3>
                            </figcaption>
                            <a href="projects/broadcast"></a>
                        </figure>

                        <h3 class="client-title-mobile">Alpine Armour</h3>
                        <figure class="figure client">
                            <img src="/gallery/projects/alpinearmour/cover.webp" loading="lazy">
                            <figcaption>
                                <h3 class="client-title-desktop">Alpine Armour</h3>
                            </figcaption>
                            <a href="projects/alpinearmour"></a>
                        </figure>

                        <h3 class="client-title-mobile">Sea to Sky Film Fest</h3>
                        <figure class="figure client">
                            <img src="/gallery/projects/stsfilmfest/cover.webp" loading="lazy">
                            <figcaption>
                                <h3 class="client-title-desktop">Sea to Sky Film Fest</h3>
                            </figcaption>
                            <a href="projects/stsfilmfest"></a>
                        </figure>

                        <h3 class="client-title-mobile">SD48 Indigenous Teachings</h3>
                        <figure class="figure client">
                            <img src="/gallery/projects/sd48indigenousteachings/cover.webp" loading="lazy">
                            <figcaption>
                                <h3 class="client-title-desktop">SD48 Indigenous Teachings</h3>
                            </figcaption>
                            <a href="projects/sd48indigenousteachings"></a>
                        </figure>

                        <!-- Hello future Jayden. For mobile, make the hover state constant and display none the description. -->
                    </div>
                </section>
            </div>
        </div>

        <!-- ADVENTURE GALLERY — filesystem-driven via render_gallery() -->
        <div id="adventure">
            <div class="header-banner">
                <h2>Adventure</h2>
            </div>

            <?php render_gallery('gallery/adventure', '/gallery/adventure', 'adventure-gallery'); ?>
        </div>

        <!-- LANDSCAPE GALLERY — filesystem-driven via render_gallery() -->
        <div id="landscape">
            <div class="header-banner">
                <h2>Landscape</h2>
            </div>

            <?php render_gallery('gallery/landscape', '/gallery/landscape', 'landscape-gallery'); ?>
        </div>

        <div class="header-banner" id="caboose">
            <h3><a href="#commercial">Back to Top</a></h3>
        </div>

    </div>

    <?php include "./parts/footer.php" ?>

    </main>

    <script src="/js/scrollReveal.js"></script>
    <script src="/js/lenis.js"></script>

</body>
</html>
