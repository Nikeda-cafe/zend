<?php
require_once 'table_init.php';

$bok = new Book();
$rows = $bok->find(
	array('978-4-7981-1495-8', '978-4-7981-1427-9')
);
$rows->seek(1);
print($rows->current()->title);

/*
$row = $rows->getRow(1);
print($row->title);
*/