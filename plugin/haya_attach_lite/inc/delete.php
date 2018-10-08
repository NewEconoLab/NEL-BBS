<?php

defined('DEBUG') OR exit('Forbidden');

$header['title'] = '查看附件';

$id = param('aid');

if (empty($id)) {
	message(1, jump('id不能为空', url('attachlite-attachs')));
}

// 设置高亮类型
$action = 'attach';

$attach = attach_read($id);
if (empty($attach)) {
	message(1, jump('文件不能存在', url('attachlite-attachs')));
}

$status = attach_delete($id);
if ($status === false) {
	message(1, jump('删除文件失败', 'back'));
}

message(0, jump('删除文件成功', url('attachlite-attachs')));


