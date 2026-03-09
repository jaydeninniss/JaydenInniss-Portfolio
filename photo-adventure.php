<?php include 'includes/gallery.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adventure Photography - Jayden Inniss</title>

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

    <!-- ScrollReveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- SEO -->
    <meta property="og:title" content="Adventure Photography - Jayden Inniss">
    <meta property="og:type" content="website">
    <meta property="og:URL" content="https://www.jaydeninniss.com/photo-adventure">
    <meta property="og:image" content="https://www.jaydeninniss.com/media/logo/jaydeninniss_logo.svg">
    <meta property="og:description" content="Jayden Inniss is a sports/adventure photographer and videographer proudly based in Whistler, BC.">
    <meta name="robots" content="all">
    <meta name="author" content="Jayden Inniss">
    <meta name="description" content="Jayden Inniss is a sports/adventure photographer and videographer proudly based in Whistler, BC.">
    <meta name="keywords" content="Adventure Photography, Jayden Inniss, Whistler, Hiking, Landscape, Outdoor Photography">
    <link rel="icon" type="image/x-icon" href="https://www.jaydeninniss.com/media/logo/jaydeninniss_logo.svg">
    <!-- End of SEO -->

    <!-- PHOTOSWIPE PLUGIN -->
    <script type="module">
        import PhotoSwipeLightbox from '/plugins/photoswipe/photoswipe-lightbox.esm.js';
        const lightbox = new PhotoSwipeLightbox({
            gallery: '#adventure-gallery',
            children: 'a',
            pswpModule: () => import('/plugins/photoswipe/photoswipe.esm.js')
        });
        lightbox.init();
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

        <div class="content-container">

            <!-- CLIENT PROJECTS -->
            <div id="commercial">
                <div class="header-banner">
                    <h2>Adventure</h2>
                </div>

                <div class="grid">
                    <section class="section-6">
                        <div class="row">

                            <h3 class="client-title-mobile">Treeline Aerial</h3>
                            <figure class="figure client">
                                <img src="/gallery/projects/treeline/cover.webp" loading="lazy">
                                <figcaption>
                                    <h3 class="client-title-desktop">Treeline Aerial</h3>
                                </figcaption>
                                <a href="projects/treeline"></a>
                            </figure>

                            <h3 class="client-title-mobile">UBC Ski and Board Club</h3>
                            <figure class="figure client">
                                <img src="/gallery/projects/ubcsnb/cover.webp" loading="lazy">
                                <figcaption>
                                    <h3 class="client-title-desktop">UBC Ski and Board Club</h3>
                                </figcaption>
                                <a href="projects/ubcsnb"></a>
                            </figure>

                            <h3 class="client-title-mobile">Alpine Armour</h3>
                            <figure class="figure client">
                                <img src="/gallery/projects/alpinearmour/cover.webp" loading="lazy">
                                <figcaption>
                                    <h3 class="client-title-desktop">Alpine Armour</h3>
                                </figcaption>
                                <a href="projects/alpinearmour"></a>
                            </figure>

                            <h3 class="client-title-mobile">Nicklaus North Golf Course</h3>
                            <figure class="figure client">
                                <img src="/gallery/projects/nicknorth/cover.webp" loading="lazy">
                                <figcaption>
                                    <h3 class="client-title-desktop">Nicklaus North Golf Course</h3>
                                </figcaption>
                                <a href="projects/nicknorth"></a>
                            </figure>

                        </div>
                    </section>
                </div>
            </div>

            <!-- ADVENTURE GALLERY -->
            <div id="adventure">
                <div class="header-banner">
                    <h2>Gallery</h2>
                </div>

                <?php render_gallery('gallery/adventure', '/gallery/adventure', 'adventure-gallery'); ?>
            </div>

            <div class="header-banner" id="caboose">
                <h3><a href="photo">← Back to Photography</a></h3>
            </div>

        </div>

        <?php include "./parts/footer.php" ?>

    </main>

    <script src="/js/scrollReveal.js"></script>
    <script src="/js/lenis.js"></script>

</body>
</html>
