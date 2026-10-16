<?php
$dir = new RecursiveDirectoryIterator('resources/views');
$ite = new RecursiveIteratorIterator($dir);

echo "--- Missing ALT attributes ---\n";
foreach ($ite as $file) {
    if ($file->isFile() && pathinfo($file, PATHINFO_EXTENSION) == 'php') {
        $content = file_get_contents($file);
        
        // Find <img ...> tags that don't have alt="..."
        preg_match_all('/<img(?![^>]*\balt=["\'])([^>]+)>/i', $content, $matches);
        
        if (!empty($matches[0])) {
            echo $file->getPathname() . ": " . count($matches[0]) . " missing alt tags\n";
            foreach($matches[0] as $match) {
                echo "  " . htmlspecialchars($match) . "\n";
            }
        }
    }
}

echo "\n--- Base64 Images in Blade ---\n";
foreach ($ite as $file) {
    if ($file->isFile() && pathinfo($file, PATHINFO_EXTENSION) == 'php') {
        $content = file_get_contents($file);
        if (stripos($content, 'data:image') !== false) {
            echo $file->getPathname() . " contains base64 data:image\n";
        }
    }
}
