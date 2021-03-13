<?php
require_once 'table_init.php';

$bok = new Book();
$rows = $bok->fetchAll(
	$bok->select()->order('published ASC')
);
foreach($rows as $row) {
	try {
		$auth = $row->findParentRow('Author', 'ref_author');
		//$auth = $row->findParentAuthorByref_author();
		print($row->title.' - '.$auth->name.'<br />');
	} catch(Zend_Db_Statement_Exception $e) {
		print($row->title.'<br />');
	}
}
