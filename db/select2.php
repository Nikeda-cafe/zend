<?php
require_once 'DbManager.class.php';

$db = DbManager::getConnection();
$sel = $db->select();
$sel->from('book', array('publish', 'average' => 'AVG(price)'))
//$sel->from('book', array('publish', 'AVG(price) AS average'))
//$sel->from('book', array('publish', 'average' => new Zend_Db_Expr('AVG(price)')))
	->group('publish')
	->having('average < 3000');

$stt = $db->query($sel);
print_r($stt->fetchAll());
