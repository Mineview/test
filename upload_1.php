<?php
header('Content-type: text/html; charset=utf-8');

$result = uploadFile($_FILES['goods_image']);
var_dump($result);

/**
 * 文件上传（业务逻辑判断）函数
 * 一次上传（判断）一个文件
 * @param array $file_info 某个临时上传文件的5个信息，由$_FILES中获得！
 * @return string:成功，目标文件名；false: 失败
 */
function uploadFile($file_info) {
	// 判断是否有错误
	if ($file_info['error'] != 0) {
		echo '上传文件存在错误';
		return false;
	}

	// 判断文件类型
	// 后缀名
	$ext_list = array('.jpg', '.png', '.gif', '.jpeg');// 允许的后缀名列表
	$ext = strrchr($file_info['name'], '.');
	if (! in_array($ext, $ext_list)) {
		echo '类型，后缀不合法';
		return false;
	}
	// MIME
	$mime_list = array('image/jpeg', 'image/png', 'image/gif');// 允许的mime列表！
	if (! in_array($file_info['type'], $mime_list)) {
		echo '类型，MIME不合法';
		return false;
	}

	// 判断大小
	$max_size = 700*1024;// 允许的最大尺寸
	if ($file_info['size'] > $max_size) {
		echo '文件过大';
		return false;
	}

	// 设置目标文件地址
	// 上传目录
	$upload_path = './';
	// 目标文件名
	$prefix = '';// 前缀
	$dst_name = uniqid($prefix, true) . $ext;

	// 移动！
	if (move_uploaded_file($file_info['tmp_name'], $upload_path . $dst_name)) {
		// 移动成功
		return $dst_name;// 仅仅返回 上传目录之后的地址即可！
	} else {
		echo '移动失败';
		return false;
	}
}