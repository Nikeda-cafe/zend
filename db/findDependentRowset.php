<?php
require_once 'table_init.php';

$auth = new Author();
$rows = $auth->fetchAll(
	$auth->select()->order('author_id ASC')
);
foreach($rows as $row) {
	print('<dl>');
	print('<dt>'.$row->name.'</dt>');
	print('<dd>');
	$boks = $row->findDependentRowset('Book');
	// $boks = $row->findBook();
	foreach($boks as $bok) {
		print($bok->title.'<br />');
	}
	print('</dd></dl>');
}
