<?php include 'includes/gallery.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lifestyle &amp; Brand Photography - Jayden Inniss</title>

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
    <meta property="og:title" content="Lifestyle &amp; Brand Photography - Jayden Inniss">
    <meta property="og:type" content="website">
    <meta property="og:URL" content="https://www.jaydeninniss.com/photo-lifestylebrand">
    <meta property="og:image" content="https://www.jaydeninniss.com/media/logo/jaydeninniss_logo.svg">
    <meta property="og:description" content="Jayden Inniss is a sports/adventure photographer and videographer proudly based in Whistler, BC.">
    <meta name="robots" content="all">
    <meta name="author" content="Jayden Inniss">
    <meta name="description" content="Jayden Inniss is a sports/adventure photographer and videographer proudly based in Whistler, BC.">
    <meta name="keywords" content="Lifestyle Photography, Brand Photography, Jayden Inniss, Whistler">
    <link rel="icon" type="image/x-icon" href="https://www.jaydeninniss.com/media/logo/jaydeninniss_logo.svg">
    <!-- End of SEO -->

    <!-- PHOTOSWIPE PLUGIN -->
    <script type="module">
        import PhotoSwipeLightbox from '/plugins/photoswipe/photoswipe-lightbox.esm.js';
        const lightbox = new PhotoSwipeLightbox({
            gallery: '#lifestylebrand-gallery',
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
                    <h2>Lifestyle &amp; Brand</h2>
                </div>

                <div class="grid">
                    <section class="section-6">
                        <div class="row">

                            <h3 class="client-title-mobile">Foon Skis</h3>
                            <figure class="figure client">
                                <img src="/gallery/projects/foon/cover.webp" loading="lazy">
                                <figcaption>
                                    <h3 class="client-title-desktop">Foon Skis</h3>
                                </figcaption>
                                <a href="projects/foon"></a>
                            </figure>

                            <h3 class="client-title-mobile">Knolly Bikes</h3>
                            <figure class="figure client">
                                <img src="/gallery/projects/knolly/cover.webp" loading="lazy">
                                <figcaption>
                                    <h3 class="client-title-desktop">Knolly Bikes</h3>
                                </figcaption>
                                <a href="projects/knolly"></a>
                            </figure>

                            <h3 class="client-title-mobile">Fungus Among Us</h3>
                            <figure class="figure client">
                                <img src="/gallery/projects/fungus/cover.webp" loading="lazy">
                                <figcaption>
                                    <h3 class="client-title-desktop">Fungus Among Us</h3>
                                </figcaption>
                                <a href="projects/fungus"></a>
                            </figure>

                            <h3 class="client-title-mobile">Mekong</h3>
                            <figure class="figure client">
                                <img src="/gallery/projects/mekong/cover.webp" loading="lazy">
                                <figcaption>
                                    <h3 class="client-title-desktop">Mekong</h3>
                                </figcaption>
                                <a href="projects/mekong"></a>
                            </figure>

                        </div>
                    </section>
                </div>
            </div>

            <!-- LIFESTYLE & BRAND GALLERY -->
            <div id="lifestylebrand">
                <div class="header-banner">
                    <h2>Gallery</h2>
                </div>

                <?php render_gallery('gallery/lifestylebrand', '/gallery/lifestylebrand', 'lifestylebrand-gallery'); ?>
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
