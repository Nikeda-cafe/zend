<?php
require_once 'Zend/Auth.php';
require_once 'MyArrayAdapter.php';

$data = array(
	'yyamada' => 'f400e38d6c08c2e7d51e25cca48d8a95',
	'tsuzuki' => 'f400e38d6c08c2e7d51e25cca48d8a95',
	'skakeya' => 'f400e38d6c08c2e7d51e25cca48d8a95'
);

$auth = Zend_Auth::getInstance();
if(!$auth->hasIdentity()) {
	$adapter = new MyArrayAdapter('yyamada', '12345++', $data);
	$result = $auth->authenticate($adapter);
	if (!$result->isValid()) {
		foreach ($result->getMessages() as $message) {
			print($message.'<br />');
		}
	} else {
		print('認証に成功しました：'.$auth->getIdentity());
	}
} else {
	print('認証済みです：'.$auth->getIdentity());
}
