<?php
// --- Project config ---
$project = [
    'title'       => 'Broadcast Television',
    'description' => 'Camera operator and utility — Crankworx, Grey Cup, Luge World Cup.',
    'folder'      => 'gallery/projects/broadcast',
    'web_folder'  => '/gallery/projects/broadcast',
    'cover'       => '/gallery/projects/broadcast/cover.webp',
];

include '../includes/gallery.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Broadcast Camera Op - Jayden Inniss</title>

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

    <!-- LENIS - SMOOTH SCROLL -->
    <!-- <script src="https://unpkg.com/lenis@1.3.1/dist/lenis.min.js"></script> 
    <link rel="stylesheet" href="https://unpkg.com/lenis@1.3.1/dist/lenis.css"> -->

    <!-- CSS -->
    <link rel="stylesheet" href="../styles/style.css">    
    <link rel="stylesheet" href="../styles/project-master.css">
    <link rel="stylesheet" href="../styles/project-broadcast.css">


    <!-- SEO -->
    <meta property="og:title" content="Broadcast Camera Op - Jayden Inniss">
    <meta property="og:type" content="website">
    <meta property="og:URL" content="https://www.jaydeninniss.com/projects/broadcast">
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
</head>
<body>

    <?php include "../parts/header.php" ?>
    <?php include "../parts/hamburger.php" ?>

    <main>
        <!-- Header Img -->
        <div class="hero">
        </div>
        <!-- END Header Img -->

        <div class="content-container">
            <div class="qa-container">
                <div class="project-description">
                        <h2>Experience as a Broadcast Camera Operator</h2>
                        <p>Since July 2023</p>
                </div>

                <!-- Project gallery — filesystem-driven via render_gallery() -->
                <?php render_gallery($project['folder'], $project['web_folder'], 'project-gallery'); ?>

                <h3 class="question"  id="first">Grey Cup Football Game 2024 - TVA Utility</h3>
                <p class="answer">I worked with the broadcast team to cover the 2024 Grey Cup held at BC Place. I worked for Dome Productions + TSN. </p>
                
                <div class="image-container">
                    <img class = "smaller" src="../media/img/projects/broadcast/greycup/extbcplace.webp" alt="">
                    <img class = "smaller" src="../media/img/projects/broadcast/greycup/truckint.webp" alt="">
                </div>

                <p class="answer">Arriving at BC Place seven days before the event, we set up the <span class="highlight">50 cameras</span> and their respective cabling/infastructure. Over the course of the week we worked <span class="highlight">10 hour days</span> as a team of about 15 people, setting up all the necessary gear for this huge event to be covered for the television broadcast.</p>

                <p class="answer">On game day, I was positioned on the field with three camera operators to help them with cable management, battery swaps, crowd control and ensure the safety of our camera team during the game by acting as their 'eyes' while they filmed. </p>
                
                <div class="image-container">
                    <img class = "smaller" src="../media/img/projects/broadcast/greycup/camera1.webp" alt="">
                    <video class = "smaller" src="../media/img/projects/broadcast/greycup/gameday1.mp4" autoplay loop muted></video>
                    <img class = "smaller" src="../media/img/projects/broadcast/greycup/camera3.webp" alt="">
                    <video src="../media/img/projects/broadcast/greycup/halftime2.mp4" autoplay loop muted></video>
                    <img src="../media/img/projects/broadcast/greycup/halftimestill.webp" alt="">
                    <video src="../media/img/projects/broadcast/greycup/halftime3.mp4" autoplay loop muted></video>
                </div>

                <p class="answer">This entire experience was mind-blowing to be working in such a unique and massive venue! <span class="highlight">I learned a ton from the very experienced broadcast team and I feel much more comfortable taking initiaive with tasks and projects on future broadcast events.</span>
                </p>


                <h3 class="question">Crankworx 2024 - TVA Utility</h3>
                <p class="answer">
                    When Crankworx came around again for Whistler in July 2024, I was approached to work with the broadcast team in a different role than the previous year. I was brought on as a TVA Utility which meant I was part of the setup and take-down crew. We were tasked with running over 100km of cable, first up a 3km 35˚ plus course, followed by running cabling for 4 simultaneous bike events at the Whistler Mountain base. 
                </p>

                <div class="image-container">
                    <video loading="lazy" src="../media/img/projects/broadcast/crankworx24/opening.mp4" autoplay loop muted></video>
                    <video loading="lazy" src="../media/img/projects/broadcast/crankworx24/joyride.mp4" autoplay loop muted></video>
                </div>

                <p class="answer">
                    It was an incredibly physical week of hauling equipment into places they were not designed to be used in. It took four days to run cables up the mountain through the incredibly dense forest to reach remote camera positions. A total of 18 cameras lined the course for the downhill event in Creekside and another 22 at Whistler base. Throughout this hectic week, I learned so much about the inner workings of a television broadcast event and feel more comfortable working with the different departments within a broadcast truck! The entire experience was amazing and I am very grateful for how willing my colleagues were to take the time to teach me the ropes (and the cables). 
                </p>
                <div class="image-container">
                    <video loading="lazy" src="../media/img/projects/broadcast/crankworx24/camera.mp4" autoplay loop muted></video>
                    <img loading="lazy" src="../media/img/projects/broadcast/crankworx24/sunrise.webp" alt="">
                    <video loading="lazy" src="../media/img/projects/broadcast/crankworx24/cabling2.mp4" autoplay loop muted></video>
                    <video loading="lazy" src="../media/img/projects/broadcast/crankworx24/cabling.mp4" autoplay loop muted></video>
                    <img loading="lazy" src="../media/img/projects/broadcast/crankworx24/seflie.webp" alt="">
                    <video loading="lazy" src="../media/img/projects/broadcast/crankworx24/fibre.mp4" autoplay loop muted></video>
                </div>

                <h3 class="question">FIL Luge World Championships 2023</h3>
                <p class="answer">
                    In December 2023, the Luge World Cup came to The Whistler Sliding Centre. I was approached to work as a camera operator for the week of races.
                </p>

                <div class="image-container">
                    <img loading="lazy" src="../media/img/projects/broadcast/lugecam.webp" alt="">
                    <img loading="lazy" src="../media/img/projects/broadcast/lugeselfie2.webp" alt="">
                </div>

                <p class="answer">
                    This was a full-circle opportunity for me, as I trained as a luge athlete for 9 years. I started sliding when I was 7 years old and competed in numerous national and international championships until I was 16 years old. Returning to the sliding center to film the championships was an incredible opportunity to give back to the sport that had given me so much!
                
                    My previous knowledge of the sport of Luge and this venue helped out within our broadcast team. This event was a perfect blend of both of my hobbies, which made it a ton of fun to work on!
                </p>

                <h3 class="question">Crankworx 2023 - Camera Operator</h3>
                <p class="answer">
                    In June 2023, I was approached to work as a camera operator for Crankworx's television broadcast produced by Mesh Productions. I was over the moon to have an opportunity to work for Crankworx, as I grew up as a spectator of the yearly mountain bike event. 
                    
                    For the first weekend of events, I worked as a camera operator on the very first RockShox 1199 Downhill Race held in Creekside.
                </p>

                <div class="image-container">
                    <img loading="lazy" class = "smaller" src="../media/img/projects/broadcast/crankworxcam2.webp" alt="">
                    <img loading="lazy" class = "smaller" src="../media/img/projects/broadcast/crankworxcamalex.webp" alt="">
                    <img loading="lazy" class = "smaller" src="../media/img/projects/broadcast/crankworxcam3.webp" alt="">
                </div>

                <p class="answer">
                    During the next 4 days of racing, I joined Crankworx's lead photographer, Clint Trahan, as his assistant. He broke his arm earlier in the season, so I carried his gear for him, but he also gave me the opportunity to second-shoot for him. I shot 6 events/races with him and it was mind-blowing to see into the process of such a talented photographer! I joined him on the final day of events, shooting the enduro on Top of the World. Those 5 long days taught me so much! 
                </p>

                <div class="image-container">
                    <img loading="lazy" class = "smaller" src="../media/img/projects/broadcast/crankworxvip.webp" alt="">
                    <video loading="lazy" class = "smaller" src="../media/img/projects/broadcast/viewfinder.mp4" autoplay loop muted></video>
                    <img loading="lazy" class = "smaller" src="../media/img/projects/broadcast/clintedit1.webp" alt="">
                    <video loading="lazy" class = "smaller" src="../media/img/projects/broadcast/clint.mp4" autoplay loop muted></video>
                </div>
                
                <p class="answer">
                    I joined the broadcast crew again for Red Bull Joyride! I worked alongside our presenters shooting the live show. I was the only camera for the live show, so it was very fast-paced! I was filming everything that was displayed on the jumbotrons placed throughout the village. For the hour before the event started and when the main livestream would go to a commercial break, the screens would switch to my camera for the in-person audience.
                </p>

                <div class="image-container">
                    <video loading="lazy" src="../media/img/projects/broadcast/corral.mp4" autoplay loop muted></video>
                    <video loading="lazy" src="../media/img/projects/broadcast/joyridetower.mp4" autoplay loop muted></video>
                    <video loading="lazy" src="../media/img/projects/broadcast/camera.mp4" autoplay loop muted></video>
                </div>
                
                <p class="answer">
                    Overall, the week of events was amazing! I learned so much in such a short amount of time and I am so grateful to have the opportunity to see so many sides of this epic event!
                </p>
                
            </div>
        </div>
        <?php include "../parts/footer.php" ?>

    </main>

    <script src="/js/lenis.js"></script>

</body>
</html>
