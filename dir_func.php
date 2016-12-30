<?php

// mkdir
/*
$path = './where/to/some/path';

// $result = mkdir($path, 0755);
$result = mkdir($path, 0755, true);
var_dump($result);
*/

// rmdir
/*
// $path = './where/to/some/path';
$path = './where';
$result = rmdir($path);
var_dump($result);
*/


// opendir, readdir, closedir
/*
$path = 'e:/amp/apache/htdocs/shop39';
$handle = opendir($path);
// var_dump($handle);
//
while(false !== ($filename = readdir($handle))) {
	// ., .. 直接跳过
	if ($filename == '.' || $filename == '..') continue;

	echo $filename, '<br>';
}

closedir($handle);

// $filename = readdir($handle);
// echo $filename, '<br>';
// $filename = readdir($handle);
// echo $filename, '<br>';
// $filename = readdir($handle);
// echo $filename, '<br>';
// $filename = readdir($handle);
// echo $filename, '<br>';
*/

// rename

$old_path = './where';
$new_path = 'e:/amp/some';
// $new_path = './new_where';
$result = rename($old_path, $new_path);
var_dump($result);