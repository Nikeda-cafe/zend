<?php
require_once 'table_init.php';

$bok = new Book();
$rows = $bok->fetchAll(
	$bok->select()
		->from($bok, array('publish', new Zend_Db_Expr('COUNT(*) AS cnt')))
		->group('publish')
);
foreach($rows as $row) {
	print($row->publish.':'.$row->cnt.'件<br />');
}
