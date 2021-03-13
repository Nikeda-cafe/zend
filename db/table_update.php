<?php
require_once 'table_init.php';

$bok = new Book();
$cnt = $bok->update(
	array(
		'published' => '2007-09-19'
	),
	$bok->getAdapter()->quoteInto('isbn = ?', '978-4-7981-1363-0')
);
print($cnt.'件のデータが更新されました。');