<?php
require_once 'DbManager.class.php';

$isbn = '978-4-7981-1206-0';
$title = 'Zend Framework徹底入門';
$publish = '翔泳社';
$published = '2008-09-18';

$db = DbManager::getConnection();
$num = $db->update(
	'book',
	array(
		'title' => $title,
		'price' => new Zend_Db_Expr('price * 1.05'),
		'publish' => $publish,
		'published' => $published
	),
	$db->quoteInto('isbn = ?', $isbn)
);
print($num.'件のデータが更新されました。');
