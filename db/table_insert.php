<?php
require_once 'table_init.php';

$bok = new Book();
$key = $bok->insert(
	array(
		'isbn' => '978-4-7981-1363-0',
		'title' => '10日でおぼえるSQL Server 2005入門教室',
		'price' => 2940,
		'publish' => '翔泳社',
		'published' => new Zend_Db_Expr('CURDATE()')
	)
);
print('キー'.$key.'が登録されました。');