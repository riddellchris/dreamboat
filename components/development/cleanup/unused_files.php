<?php


function get_php_files($dir) {
    $files = [];
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    foreach ($iterator as $file) {
        if ($file->getExtension() === 'php') {
            $files[] = $file->getPathname();
        }
    }
    return $files;
}

function find_unused_files($dir) {
    $php_files = get_php_files($dir);
    $used_files = [];

    foreach ($php_files as $file) {
        $content = file_get_contents($file);
        foreach ($php_files as $check_file) {
            if ($file !== $check_file && strpos($content, basename($check_file)) !== false) {
                $used_files[] = $check_file;
            }
        }
    }

    $unused_files = array_diff($php_files, $used_files);
    return $unused_files;
}

$project_dir = '/Users/riddellchris/Sites/localhost/'; 
$unused_files = find_unused_files($project_dir);

if (empty($unused_files)) {
    echo "No unused files found.\n";
} else {
    echo "Unused files:\n";
    foreach ($unused_files as $file) {
        echo $file . "\n";
    }
}