<?php
/**
 * @author chajr <chajr@bluetree.pl>
 * @version 0.1.0
 * @copyright chajr/bluetree
 */

$path = '../cache';
if(!file_exists($path)){
    return NULL;
}
$handle = opendir($path);

if($handle){
    while($element = readdir($handle)){
        if ($element == '..' 
            || $element == '.'
            || $element == '.htaccess'
            || $element == 'index.htm'
        ) {
            continue;
        }
        @unlink($path . '/' . $element);
    }
    closedir($handle);
}
echo 'deleted';