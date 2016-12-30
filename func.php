<?php


$file = './hack.txt.jpg';
// 实例化一个可以获得文件MIME类型的对象$finfo
$finfo = new Finfo(FILEINFO_MIME_TYPE);
// 利用对象，获得某个文件的mime类型
$mime_type = $finfo->file($file);

echo $mime_type;

// $path = 'e:/amp/apache/htdocs/php39';
// var_dump(is_dir($path));
// $path = 'e:/amp/apache/htdocs/php39/abcdefg';
// var_dump(is_dir($path));

// $path = 'e:/amp/apache/htdocs/php39/abcdefg';
// $result = mkdir($path);
// var_dump($result);



// echo uniqid(), '<br>';
// echo uniqid('goods_'), '<br>';
// echo uniqid('', true), '<br>';
// echo uniqid('goods_', true), '<br>';



// $name = 'kang.han.abc.jpg';
// $ext = strrchr($name, '.');
// echo $ext;