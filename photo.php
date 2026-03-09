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

    <!-- ScrollReveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

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
            <img src="/gallery/photo-hero.webp" alt="">
        </div> -->
        <!-- END HERO IMAGE -->

        <div class="content-container">

            <div class="photo-hub-grid">
                <section class="section-6">
                    <div class="photo-hub-row">

                        <figure class="figure">
                            <img src="/gallery/sports/cover.webp" loading="lazy">
                            <figcaption>
                                <h3>Sports</h3>
                            </figcaption>
                            <a href="photo-sports"></a>
                        </figure>

                        <figure class="figure">
                            <img src="/gallery/events/cover.webp" loading="lazy">
                            <figcaption>
                                <h3>Events</h3>
                            </figcaption>
                            <a href="photo-events"></a>
                        </figure>

                        <figure class="figure">
                            <img src="/gallery/lifestylebrand/cover.webp" loading="lazy">
                            <figcaption>
                                <h3>Lifestyle &amp; Brand</h3>
                            </figcaption>
                            <a href="photo-lifestylebrand"></a>
                        </figure>

                        <figure class="figure">
                            <img src="/gallery/adventure/cover.webp" loading="lazy">
                            <figcaption>
                                <h3>Adventure</h3>
                            </figcaption>
                            <a href="photo-adventure"></a>
                        </figure>

                    </div>
                </section>
            </div>

        </div>

        <?php include "./parts/footer.php" ?>

    </main>

    <script src="/js/scrollReveal.js"></script>
    <script src="/js/lenis.js"></script>

</body>
</html>
