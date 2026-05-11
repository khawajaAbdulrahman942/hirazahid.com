<?php

$directories = ['public/project-images', 'public/assets'];

echo "Starting image conversion to WebP...\n";

foreach ($directories as $directory) {
    echo "Processing directory: $directory\n";
    $files = scandir($directory);
    
    foreach ($files as $file) {
        if ($file === '.' || $file === '..') continue;
        
        $filePath = $directory . '/' . $file;
        if (is_dir($filePath)) continue;

        $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        $filename = pathinfo($file, PATHINFO_FILENAME);
        $outputFile = $directory . '/' . $filename . '.webp';

        // Skip if it's already webp or if webp already exists
        if ($extension === 'webp' || file_exists($outputFile)) continue;

        $image = null;
        if ($extension === 'jpg' || $extension === 'jpeg') {
            $image = @imagecreatefromjpeg($filePath);
        } elseif ($extension === 'png') {
            $image = @imagecreatefrompng($filePath);
            if ($image) {
                imagepalettetotruecolor($image);
                imagealphablending($image, true);
                imagesavealpha($image, true);
            }
        }

        if ($image) {
            if (imagewebp($image, $outputFile, 80)) {
                echo "Converted: $directory/$file -> $filename.webp\n";
            } else {
                echo "Failed to convert: $directory/$file\n";
            }
            imagedestroy($image);
        }
    }
}

echo "Conversion complete!\n";
