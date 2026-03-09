<?php include 'includes/gallery.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events Photography - Jayden Inniss</title>

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
    <meta property="og:title" content="Events Photography - Jayden Inniss">
    <meta property="og:type" content="website">
    <meta property="og:URL" content="https://www.jaydeninniss.com/photo-events">
    <meta property="og:image" content="https://www.jaydeninniss.com/media/logo/jaydeninniss_logo.svg">
    <meta property="og:description" content="Jayden Inniss is a sports/adventure photographer and videographer proudly based in Whistler, BC.">
    <meta name="robots" content="all">
    <meta name="author" content="Jayden Inniss">
    <meta name="description" content="Jayden Inniss is a sports/adventure photographer and videographer proudly based in Whistler, BC.">
    <meta name="keywords" content="Events Photography, Jayden Inniss, Whistler, Event Photographer">
    <link rel="icon" type="image/x-icon" href="https://www.jaydeninniss.com/media/logo/jaydeninniss_logo.svg">
    <!-- End of SEO -->

    <!-- PHOTOSWIPE PLUGIN -->
    <script type="module">
        import PhotoSwipeLightbox from '/plugins/photoswipe/photoswipe-lightbox.esm.js';
        const lightbox = new PhotoSwipeLightbox({
            gallery: '#events-gallery',
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
                    <h2>Events</h2>
                </div>

                <div class="grid">
                    <section class="section-6">
                        <div class="row">

                            <h3 class="client-title-mobile">VRCA Awards</h3>
                            <figure class="figure client">
                                <img src="/gallery/projects/vrca/cover.webp" loading="lazy">
                                <figcaption>
                                    <h3 class="client-title-desktop">VRCA Awards</h3>
                                </figcaption>
                                <a href="projects/vrca"></a>
                            </figure>

                            <h3 class="client-title-mobile">Sea to Sky Film Fest</h3>
                            <figure class="figure client">
                                <img src="/gallery/projects/stsfilmfest/cover.webp" loading="lazy">
                                <figcaption>
                                    <h3 class="client-title-desktop">Sea to Sky Film Fest</h3>
                                </figcaption>
                                <a href="projects/stsfilmfest"></a>
                            </figure>

                            <h3 class="client-title-mobile">Partners in Tourism</h3>
                            <figure class="figure client">
                                <img src="/gallery/projects/pit/cover.webp" loading="lazy">
                                <figcaption>
                                    <h3 class="client-title-desktop">Partners in Tourism</h3>
                                </figcaption>
                                <a href="projects/pit"></a>
                            </figure>

                            <h3 class="client-title-mobile">Broadcast Television</h3>
                            <figure class="figure client">
                                <img src="/gallery/projects/broadcast/cover.webp" loading="lazy">
                                <figcaption>
                                    <h3 class="client-title-desktop">Broadcast Television</h3>
                                </figcaption>
                                <a href="projects/broadcast"></a>
                            </figure>

                        </div>
                    </section>
                </div>
            </div>

            <!-- EVENTS GALLERY -->
            <div id="events">
                <div class="header-banner">
                    <h2>Gallery</h2>
                </div>

                <?php render_gallery('gallery/events', '/gallery/events', 'events-gallery'); ?>
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
