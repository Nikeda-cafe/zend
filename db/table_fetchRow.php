<?php
require_once 'table_init.php';

$bok = new Book();
$row = $bok->fetchRow(
	$bok->select()->where('isbn = ?', '978-4-7981-1495-8')
);
print($row->title);
