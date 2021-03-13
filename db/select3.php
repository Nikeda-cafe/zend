<?php
require_once 'DbManager.class.php';

$db = DbManager::getConnection();
$sel = $db->select();
$sel->from('book', array('isbn', 'title', 'price'))
	->joinInner('author', 'book.author_id = author.author_id', array('name'))
	->order('published');


print('クエリ全体：'.$sel->__toString().'<br />');
print('取得列：');
print_r($sel->getPart(Zend_Db_Select::COLUMNS));
