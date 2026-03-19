<?php
// --- Project config block ---
// To create a new project page: duplicate this file, update the values below,
// and drop images into the corresponding gallery folder. No database required.
$project = [
    'title'       => 'WORCA',
    'description' => 'Weekly Toonie Races — photography and video for social media.',
    'folder'      => 'gallery/projects/worca',
    'web_folder'  => '/gallery/projects/worca',
    'cover'       => '/gallery/projects/worca/cover.webp',
];

include '../includes/gallery.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($project['title']); ?> - Jayden Inniss</title>

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

    <!-- LENIS - SMOOTH SCROLL -->
    <!-- <script src="https://unpkg.com/lenis@1.3.1/dist/lenis.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/lenis@1.3.1/dist/lenis.css"> -->

    <!-- SEO -->
    <meta property="og:title" content="<?php echo htmlspecialchars($project['title']); ?> - Jayden Inniss">
    <meta property="og:type" content="website">
    <meta property="og:URL" content="https://www.jaydeninniss.com/projects/worca">
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
        const options = {
            gallery: '#project-gallery',
            children: 'a',
            pswpModule: () => import('/plugins/photoswipe/photoswipe.esm.js')
        };
        const lightbox = new PhotoSwipeLightbox(options);
        lightbox.init();
    </script>

    <link rel="stylesheet" href="/plugins/photoswipe/photoswipe.css">
    <!-- END PHOTOSWIPE PLUGIN -->

    <!-- CSS -->
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/photo.css">
    <link rel="stylesheet" href="../styles/photo-project.css">

</head>
<body>

    <?php include "../parts/header.php" ?>
    <?php include "../parts/hamburger.php" ?>

    <main>

    <!-- HERO IMAGE -->
    <div id="photo-hero">
        <img src="<?php echo htmlspecialchars($project['cover']); ?>" alt="" loading="lazy">
    </div>
    <!-- END HERO IMAGE -->

    <div class="content-container">
        <div class="header-banner">
            <h3 id="first-back-btn"><a href="javascript:history.back()">← Back</a></h3>
            <h2><?php echo htmlspecialchars($project['title']); ?></h2>
            <p><?php echo htmlspecialchars($project['description']); ?></p>
        </div>

        <!-- Project gallery — filesystem-driven via render_gallery() -->
        <?php render_gallery($project['folder'], $project['web_folder'], 'project-gallery'); ?>

        <div class="header-banner" id="caboose">
            <h3 id="prev-project"><a href="#">← Prev</a></h3>
            <h3 id="all-project"><a href="javascript:history.back()">Back to All Projects</a></h3>
            <h3 id="next-project"><a href="#">Next →</a></h3>
        </div>
    </div>

    <?php include "../parts/footer.php" ?>

    </main>

    <script src="/js/scrollReveal.js"></script>
    <script src="/js/lenis.js"></script>

</body>
</html>
