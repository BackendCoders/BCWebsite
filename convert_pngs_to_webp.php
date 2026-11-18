<?php

$targets = [
    'public/assets/images/blogcus.png',
    'public/assets/images/google1.png',
    'public/assets/images/about.png',
    'public/assets/images/custom.png',
    'public/assets/images/best.png',
    'public/assets/images/seo.png',
    'public/assets/images/banner.png',
    'public/assets/images/bannerC.png',
    'public/assets/images/banner-team.png',
    'public/assets/images/team-banner.png',
    'public/assets/images/faq.png',
    'public/assets/images/Ladiguelogo.png',
    'public/assets/images/la.png',
    'public/assets/images/arrive.png',
    'public/assets/images/scgo;d.png',
    'public/assets/images/praslin.png',
    'public/assets/images/marley.png',
    'public/assets/images/acetaxi.png',
    'public/assets/images/pulse.png',
    'public/assets/images/ifnoss-logo.png',
    'public/assets/images/logo3.png',
    'public/assets/images/recipe.png',
    'public/assets/images/riceweb.png',
    'public/assets/images/mark.png',
    'public/assets/images/img1.png',
    'public/assets/images/plum.png',
    'public/assets/images/small-busines.png',
    'public/assets/images/erdata.png',
    'public/assets/images/seopro.png',
    'public/assets/images/childcare.png',
    'storage/app/public/blogs/UZeTbWMjn6r20GrFL85SCcaydqqmsiynghuqtnoX.png',
];

$totalOrigBytes = 0;
$totalWebpBytes = 0;

echo "=== CONVERTING PNG ASSETS TO WEBP ===\n";

foreach ($targets as $srcPath) {
    if (!file_exists($srcPath)) {
        echo "Skip (not found): $srcPath\n";
        continue;
    }

    $origSize = filesize($srcPath);
    $totalOrigBytes += $origSize;

    $webpPath = preg_replace('/\.png$/i', '.webp', $srcPath);

    // If webp already exists and is valid, report it
    $img = @imagecreatefrompng($srcPath);
    if (!$img) {
        echo "Error reading PNG: $srcPath\n";
        continue;
    }

    if (!imageistruecolor($img)) {
        imagepalettetotruecolor($img);
    }

    imagealphablending($img, false);
    imagesavealpha($img, true);

    $success = imagewebp($img, $webpPath, 85);
    imagedestroy($img);

    if ($success) {
        $webpSize = filesize($webpPath);
        $totalWebpBytes += $webpSize;
        $saved = $origSize - $webpSize;
        $percent = round(($saved / $origSize) * 100, 1);
        echo sprintf("%-45s | Orig: %7.1f KB | WebP: %7.1f KB | Saved: %5.1f%%\n",
            basename($srcPath), $origSize / 1024, $webpSize / 1024, $percent
        );
    } else {
        echo "Failed to save: $webpPath\n";
    }
}

echo "--------------------------------------------------------------------------------\n";
$totalSaved = $totalOrigBytes - $totalWebpBytes;
$totalPercent = $totalOrigBytes > 0 ? round(($totalSaved / $totalOrigBytes) * 100, 1) : 0;
echo sprintf("TOTAL ORIGINAL: %.2f MB | TOTAL WEBP: %.2f MB | TOTAL SAVINGS: %.2f MB (%s%%)\n",
    $totalOrigBytes / (1024 * 1024),
    $totalWebpBytes / (1024 * 1024),
    $totalSaved / (1024 * 1024),
    $totalPercent
);
