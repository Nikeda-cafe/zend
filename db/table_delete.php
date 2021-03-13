<?php
require_once 'table_init.php';

$bok = new Book();
$cnt = $bok->delete(
	$bok->getAdapter()->quoteInto('isbn = ?', '978-4-7981-1363-0')
);
print($cnt.'件のデータが削除されました。');