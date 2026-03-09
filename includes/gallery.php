<?php

/**
 * Renders a PhotoSwipe v5 compatible photo gallery from a filesystem folder.
 *
 * Usage:
 *   render_gallery('gallery/adventure', '/gallery/adventure', 'adventure-gallery');
 *
 * @param string $folder_path  Filesystem path to the image folder (relative to site root or absolute)
 * @param string $web_path     Web-accessible path prefix for image URLs. Defaults to deriving
 *                             from $folder_path by stripping the server document root.
 * @param string $gallery_id   HTML id attribute for the gallery wrapper div. Defaults to 'my-gallery'.
 */
function render_gallery($folder_path, $web_path = null, $gallery_id = 'my-gallery') {

    // --- Resolve the filesystem path ---
    // If the path is not absolute, treat it as relative to the document root.
    if (!str_starts_with($folder_path, '/')) {
        $folder_path = rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/' . ltrim($folder_path, '/');
    }

    // --- Derive web path if not supplied ---
    // Strip the document root prefix to get the web-accessible URL path.
    if ($web_path === null) {
        $doc_root = rtrim($_SERVER['DOCUMENT_ROOT'], '/');
        $web_path = '/' . ltrim(str_replace($doc_root, '', $folder_path), '/');
    }

    // Normalise: remove trailing slashes for consistent concatenation later.
    $folder_path = rtrim($folder_path, '/');
    $web_path    = rtrim($web_path, '/');

    // --- Gather image files ---
    // Collect all supported image extensions (case-insensitive via glob patterns).
    $extensions = ['jpg', 'jpeg', 'webp', 'png', 'JPG', 'JPEG', 'WEBP', 'PNG'];
    $files = [];
    foreach ($extensions as $ext) {
        $matches = glob($folder_path . '/*.' . $ext);
        if ($matches) {
            $files = array_merge($files, $matches);
        }
    }

    // Remove any duplicate paths that may arise from case-insensitive matching.
    $files = array_unique($files);

    // Exclude cover.webp — it is used as the project card thumbnail, not a gallery image.
    $files = array_filter($files, fn($f) => strtolower(basename($f)) !== 'cover.webp');

    // Sort alphabetically so image order is controlled by filename.
    sort($files);

    // --- Handle empty gallery ---
    if (empty($files)) {
        echo '<p>No images found.</p>';
        return;
    }

    // --- Output gallery wrapper ---
    echo '<div class="pswp-gallery gallery-grid" id="' . htmlspecialchars($gallery_id) . '">' . "\n";

    // --- Loop over each image and output a PhotoSwipe-compatible anchor ---
    foreach ($files as $file_path) {

        // Get pixel dimensions for PhotoSwipe (required for correct lightbox sizing).
        $size = @getimagesize($file_path);
        if (!$size) {
            // Skip files that cannot be read as images.
            continue;
        }

        $width  = $size[0];
        $height = $size[1];

        // Determine the web URL for this image.
        $filename = basename($file_path);
        $img_url  = $web_path . '/' . $filename;

        // Add the 'wide' class for landscape-dominant images (aspect ratio > 1.3).
        $aspect_ratio = ($height > 0) ? ($width / $height) : 0;
        $extra_class  = ($aspect_ratio > 1.3) ? ' wide' : '';

        // Output the PhotoSwipe anchor and thumbnail img tag.
        echo '    <a href="' . htmlspecialchars($img_url) . '"' . "\n";
        echo '       class="grid-item' . $extra_class . '"' . "\n";
        echo '       data-pswp-width="' . $width . '"' . "\n";
        echo '       data-pswp-height="' . $height . '"' . "\n";
        echo '       target="_blank">' . "\n";
        echo '        <img src="' . htmlspecialchars($img_url) . '" alt="" loading="lazy" />' . "\n";
        echo '    </a>' . "\n";
    }

    // --- Close gallery wrapper ---
    echo '</div>' . "\n";
}
