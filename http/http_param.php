<?php
require_once 'Zend/Http/Client.php';

$cli = new Zend_Http_Client('http://www.wings.msn.to/contents/showMember.php',
	array(
		'maxredirects' => 0,
		'timeout' => 15
	)
);

$cli->setParameterGet(
	array(
		'id' => 1
	)
);

//$cli->setParameterGet('id', 1);

/*
$cli = new Zend_Http_Client(
  'http://www.wings.msn.to/contents/showMember.php?id=1');
*/

$res = $cli->request();

if($res->isSuccessful()){
	print(mb_convert_encoding($res->getBody(), 'UTF-8', 'auto'));
} else {
	print('HTTP通信に失敗しました。');
}