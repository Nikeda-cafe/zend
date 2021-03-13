<?php
require_once 'table_init.php';

$bok = new Book();
$row = $bok->createRow();
$row->isbn = '978-4-7981-1363-0';
$row->title = '10日でおぼえるSQL Server 2005入門教室';
$row->price = 2940;
$row->publish = '翔泳社';
$row->published = new Zend_Db_Expr('CURDATE()');
$key = $row->save();
print('キー'.$key.'が登録されました。');