<?php
require_once 'table_init.php';

$bok = new Book();
$sel = $bok->select();
$sel->where('published > ?', '2008-01-01')
		->order('published DESC');
$rows = $bok->fetchAll($sel);
foreach($rows as $row) {
	print($row->title.'<br />');
}
