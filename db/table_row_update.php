<?php
require_once 'table_init.php';

$bok = new Book();
$row = $bok->fetchRow(
	$bok->select()->where('isbn = ?', '978-4-7981-1363-0')
);
$row->published = '2007-09-17';
$key = $row->save();
print('キー'.$key.'が更新されました。');