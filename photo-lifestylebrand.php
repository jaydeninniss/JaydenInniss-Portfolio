<?php include 'includes/gallery.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lifestyle &amp; Brand Photography - Jayden Inniss</title>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QPYBLBF2QD"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-QPYBLBF2QD');
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anybody:ital,wght@0,100..900;1,100..900&family=Be+Vietnam+Pro:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/scrollreveal"></script>
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
                    <p>Featured Projects</p>
                </div>
                <div class="grid">
                    <section class="section-6">
                        <div class="row">
<!-- 
                            <h3 class="client-title-mobile">Maxine + Connie Arc'teryx Shoot</h3>
                            <figure class="figure client">
                                <img src="/gallery/projects/arcteryx/cover.webp" loading="lazy">
                                <figcaption><h3 class="client-title-desktop">Maxine + Connie Arc'teryx Shoot</h3></figcaption>
                                <a href="projects/arcteryx"></a>
                            </figure>                 -->
                            
                            <h3 class="client-title-mobile">False Creek Friends</h3>
                            <figure class="figure client">
                                <img src="/gallery/projects/falsecreekfriends/cover.webp" loading="lazy">
                                <figcaption><h3 class="client-title-desktop">False Creek Friends</h3></figcaption>
                                <a href="projects/falsecreekfriends"></a>
                            </figure>

                            <!-- <h3 class="client-title-mobile">Emma Englund Brand Shoot</h3>
                            <figure class="figure client">
                                <img src="/gallery/projects/emma/cover.webp" loading="lazy">
                                <figcaption><h3 class="client-title-desktop">Emma Englund Brand Shoot</h3></figcaption>
                                <a href="projects/emma"></a>
                            </figure>                             -->
                            
                            <h3 class="client-title-mobile">Whistler Real Estate Co.</h3>
                            <figure class="figure client">
                                <img src="/gallery/projects/wrec/cover.webp" loading="lazy">
                                <figcaption><h3 class="client-title-desktop">Whistler Real Estate Co.</h3></figcaption>
                                <a href="projects/wrec"></a>
                            </figure>

                            <h3 class="client-title-mobile">Community Futures Howe Sound</h3>
                            <figure class="figure client">
                                <img src="/gallery/projects/cfhs/cover.webp" loading="lazy">
                                <figcaption><h3 class="client-title-desktop">Community Futures Howe Sound</h3></figcaption>
                                <a href="projects/cfhs"></a>
                            </figure>

                            <h3 class="client-title-mobile">Whistler Sliding Centre</h3>
                            <figure class="figure client">
                                <img src="/gallery/projects/slidingcentre/cover.webp" loading="lazy">
                                <figcaption><h3 class="client-title-desktop">Whistler Sliding Centre</h3></figcaption>
                                <a href="projects/slidingcentre"></a>
                            </figure>

                            <h3 class="client-title-mobile">Treeline Aerial</h3>
                            <figure class="figure client">
                                <img src="/gallery/projects/treeline/cover.webp" loading="lazy">
                                <figcaption><h3 class="client-title-desktop">Treeline Aerial</h3></figcaption>
                                <a href="projects/treeline"></a>
                            </figure>

                            <h3 class="client-title-mobile">Whistler Naturalists</h3>
                            <figure class="figure client">
                                <img src="/gallery/projects/fungus/cover.webp" loading="lazy">
                                <figcaption><h3 class="client-title-desktop">Whistler Naturalists</h3></figcaption>
                                <a href="projects/fungus"></a>
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
