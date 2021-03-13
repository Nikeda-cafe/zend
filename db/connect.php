<?php
require_once 'Zend/Db.php';

try {
	$db =  Zend_Db::factory(
		'Pdo_mysql',
		array(
			'host'     => 'localhost',
			'username' => 'zusr',
			'password' => 'zpass',
			'dbname'   => 'zend'
		)
	);
	$db->getConnection();
	print('データベースへの接続に成功しました。');
} catch (Zend_Exception $e) {
	die($e->getMessage());
}
$db->closeConnection();
