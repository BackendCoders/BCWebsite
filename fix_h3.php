<?php
$file = 'd:/backend-coders/backends/backend_coders/resources/views/frontend/index.blade.php';
$content = file_get_contents($file);

// We want to replace `<h3` with `<div` and `</h3>` with `</div>` inside flip-back articles.
// To do this reliably:
$parts = explode('class="flip-back', $content);
for ($i = 1; $i < count($parts); $i++) {
    // inside each flip-back part, find the first <h3> and replace it.
    // The h3 is usually within the first 500 characters.
    $pos1 = strpos($parts[$i], '<h3');
    if ($pos1 !== false && $pos1 < 1000) {
        $parts[$i] = substr_replace($parts[$i], '<div', $pos1, 3);
        $pos2 = strpos($parts[$i], '</h3>', $pos1);
        if ($pos2 !== false && $pos2 < $pos1 + 500) {
            $parts[$i] = substr_replace($parts[$i], '</div>', $pos2, 5);
        }
    }
}
$new_content = implode('class="flip-back', $parts);
file_put_contents($file, $new_content);
echo "Replaced h3s in index.blade.php";
