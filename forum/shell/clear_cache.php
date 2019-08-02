<?php
/**
 * @author chajr <chajr@bluetree.pl>
 * @version 0.1.0
 * @copyright chajr/bluetree
 */

$path = __DIR__ . '/../cache';

if (!file_exists($path)) {
    return null;
}

$handle = opendir($path);

if ($handle) {
    while ($element = readdir($handle)) {
        if ($element === '..' || $element === '.') {
            continue;
        }

        @unlink($path . '/' . $element);
    }
    closedir($handle);
}

echo 'deleted' . PHP_EOL;
