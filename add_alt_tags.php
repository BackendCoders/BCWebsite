<?php
$dir = new RecursiveDirectoryIterator('resources/views');
$ite = new RecursiveIteratorIterator($dir);

$count = 0;
foreach ($ite as $file) {
    if ($file->isFile() && pathinfo($file, PATHINFO_EXTENSION) == 'php') {
        $content = file_get_contents($file);
        
        $newContent = preg_replace_callback('/<img(?![^>]*\balt=["\'])([^>]+)>/i', function($matches) {
            // Check if there is already an alt tag without quotes (rare but possible)
            if (stripos($matches[0], ' alt=') !== false) {
                return $matches[0];
            }
            return '<img alt=""' . $matches[1] . '>';
        }, $content, -1, $replacements);
        
        if ($replacements > 0) {
            file_put_contents($file, $newContent);
            $count += $replacements;
            echo "Added $replacements alt attributes to " . $file->getPathname() . "\n";
        }
    }
}
echo "Total alt attributes added: $count\n";
