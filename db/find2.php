<?php
require_once 'table_init.php';

$bok = new Book();
$rows = $bok->find(
	array('978-4-7981-1495-8', '978-4-7981-1427-9')
);
foreach ($rows as $row) {
	print($row->title.'<br />');
}
