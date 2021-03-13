<?php
require_once 'table_init.php';

$bok = new Book();
$row = $bok->fetchRow(
	$bok->select()->where('isbn = ?', '978-4-7981-1363-0')
);
$cnt = $row->delete();
print($cnt.'件が削除されました。');