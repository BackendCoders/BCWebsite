<?php

$dirs = ['public/assets/images', 'public/assets/icons', 'storage/app/public'];

$report = [];

foreach ($dirs as $dir) {
    if (!is_dir($dir)) continue;
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    foreach ($iterator as $file) {
        if ($file->isFile()) {
            $ext = strtolower($file->getExtension());
            if (in_array($ext, ['png', 'jpg', 'jpeg', 'webp', 'gif', 'svg'])) {
                $path = $file->getPathname();
                $relPath = str_replace('\\', '/', substr($path, strlen('public/')));
                $size = filesize($path);
                $info = @getimagesize($path);
                $dims = $info ? "{$info[0]}x{$info[1]}" : "vector/unknown";
                $report[] = [
                    'path' => $path,
                    'rel' => $relPath,
                    'size' => $size,
                    'ext' => $ext,
                    'name' => $file->getFilename(),
                    'dims' => $dims,
                    'width' => $info ? $info[0] : 0,
                    'height' => $info ? $info[1] : 0,
                ];
            }
        }
    }
}

// Sort by size descending
usort($report, fn($a, $b) => $b['size'] <=> $a['size']);

echo "=== TOP 40 LARGEST ASSETS ===\n";
foreach (array_slice($report, 0, 40) as $item) {
    $kb = round($item['size'] / 1024, 1);
    echo "{$kb} KB | {$item['dims']} | {$item['rel']}\n";
}

echo "\n=== DUPLICATE EXTENSIONS (webp.webp) ===\n";
foreach ($report as $item) {
    if (str_ends_with($item['name'], '.webp.webp') || str_contains($item['name'], '.webp.')) {
        echo "{$item['rel']} ({$item['size']} bytes, {$item['dims']})\n";
    }
}
