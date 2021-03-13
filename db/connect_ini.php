<?php
require_once 'Zend/Config/Ini.php';
require_once 'Zend/Db.php';

try {
	$config = new Zend_Config_Ini('../zend.ini', 'database');
	$db = Zend_Db::factory($config);
	$db->getConnection();	
	print('データベースへの接続に成功しました。');
} catch (Zend_Exception $e) {
	die($e->getMessage());
}
$db->closeConnection();
