<?php
require_once 'Zend/Rest/Server.php';

function bookSearch($publish, $result) {
	require_once '../db/DbManager.class.php';
	$db = DbManager::getConnection();
	$sel = $db->select();
	$sel->from('book');
	$sel->where('isbn LIKE ?', '978-4-'.$publish.'%');
	$sel->order('published DESC');
	if(!is_numeric($result) || $result > 10) { $result = 10; }
	$sel->limit($result);
	$stt = $db->query($sel);

	$writer = new xmlWriter();
	$writer->openMemory();
	$writer->startDocument('1.0', 'UTF-8');
	$writer->startElement('books');
	while($row = $stt->fetch(PDO::FETCH_BOTH)) {
		$writer->startElement('book');
		for($i=0; $i < $stt->columnCount(); $i++){
			$data = $stt->getColumnMeta($i);
			$writer->startElement($data['name']);
			$writer->text($row[$i]);
			$writer->endElement();
		}
		$writer->endElement();
	}
	$writer->endElement();
	$writer->endDocument();
	return simplexml_load_string($writer->outputMemory(TRUE));
}

$srv = new Zend_Rest_Server();
$srv->addFunction('bookSearch');
$srv->handle();