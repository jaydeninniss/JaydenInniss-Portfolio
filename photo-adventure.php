<?php include 'includes/gallery.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adventure Photography - Jayden Inniss</title>
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
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/photo.css">
</head>
<body>

    <?php include "./parts/header.php" ?>
    <?php include "parts/hamburger.php" ?>

    <main>
        <div class="content-container">

            <!-- ADVENTURE GALLERY -->
            <div id="adventure">
                <div class="header-banner">
                    <h2>Adventure</h2>
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
