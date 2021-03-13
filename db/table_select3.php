<?php
require_once 'table_init.php';

$bok = new Book();
$rows = $bok->fetchAll(
	$bok->select()
		->setIntegrityCheck(FALSE)
		->from(array('b' => 'book'), array('isbn', 'title', 'price'))
		->join(array('a' => 'author'), 'b.author_id = a.author_id')
		//->join(array('a' => 'author'), 'b.author_id = a.author_id', array())

);

foreach($rows as $row) {
	print($row->title.':'.$row->name.'<br />');
	//print($row->title.'<br />');

}
//print_r($rows);