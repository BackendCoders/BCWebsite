<?php

$images = [
    1 => 'public/assets/images/backend_coders_split_1(1)_compressed.webp',
    2 => 'public/assets/images/backend_coders_split_2_compressed.webp',
    3 => 'public/assets/images/backend_coders_split_3_compressed.webp',
    4 => 'public/assets/images/backend_coders_split_4_compressed.webp',
];

$widths = [320, 480, 640];

foreach ($images as $num => $srcPath) {
    if (!file_exists($srcPath)) {
        echo "Missing source: $srcPath\n";
        continue;
    }

    $srcImg = imagecreatefromwebp($srcPath);
    if (!$srcImg) {
        echo "Failed to load: $srcPath\n";
        continue;
    }

    $origW = imagesx($srcImg);
    $origH = imagesy($srcImg);
    $ratio = $origH / $origW;

    echo "Processing Split #$num (Original: {$origW}x{$origH}, " . filesize($srcPath) . " bytes)\n";

    // 1. Generate canonical backend_coders_split_{num}.webp if not exists
    $canonicalPath = "public/assets/images/backend_coders_split_{$num}.webp";
    if (!file_exists($canonicalPath)) {
        copy($srcPath, $canonicalPath);
        echo "  Created canonical: $canonicalPath\n";
    }

    // 2. Generate 1024w copy
    $p1024 = "public/assets/images/backend_coders_split_{$num}-1024.webp";
    if (!file_exists($p1024)) {
        copy($srcPath, $p1024);
        echo "  Created 1024w: $p1024\n";
    }

    // 3. Generate 320w, 480w, 640w
    foreach ($widths as $targetW) {
        $targetH = (int) round($targetW * $ratio);
        $destImg = imagecreatetruecolor($targetW, $targetH);
        
        // Preserve alpha/transparency if any
        imagealphablending($destImg, false);
        imagesavealpha($destImg, true);

        imagecopyresampled($destImg, $srcImg, 0, 0, 0, 0, $targetW, $targetH, $origW, $origH);
        
        $destPath = "public/assets/images/backend_coders_split_{$num}-{$targetW}.webp";
        imagewebp($destImg, $destPath, 85);
        imagedestroy($destImg);
        
        echo "  Generated {$targetW}w: $destPath ({$targetW}x{$targetH}, " . filesize($destPath) . " bytes)\n";
    }

    imagedestroy($srcImg);
}

echo "Done generating responsive split image variants!\n";
