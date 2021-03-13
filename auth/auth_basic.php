<?php
require_once 'Zend/Auth.php';
require_once 'Zend/Auth/Adapter/DbTable.php';
require_once '../db/DbManager.class.php';
//require_once 'MyStorage.php';

$auth = Zend_Auth::getInstance();
//$auth->setStorage(new MyStorage());

if(!$auth->hasIdentity()) {
	$db = DbManager::getConnection();
	$adapter = new Zend_Auth_Adapter_DbTable($db, 'user', 'uid', 'passwd', 'md5(?)');
	$adapter->setIdentity('yyamada')->setCredential('12345++');
	$result = $auth->authenticate($adapter);
	if (!$result->isValid()) {
		foreach ($result->getMessages() as $message) {
			print($message.'<br />');
		}
	} else {
		$auth->getStorage()->write($adapter->getResultRowObject(NULL, 'passwd'));
		print('認証に成功しました：'.$auth->getIdentity()->uid);
	}
} else {
	print('認証済みです。<br />');
	print_r($auth->getIdentity());
}
