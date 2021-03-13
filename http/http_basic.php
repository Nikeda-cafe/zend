<?php
require_once 'Zend/Http/Client.php';

$cli = new Zend_Http_Client('http://www.wings.msn.to/',
	array(
		'maxredirects' => 1,
		'timeout' => 15
	)
);

$res = $cli->request();
if($res->isSuccessful()){
	print_r($res->getHeaders());
	print('<hr />');
	print(mb_convert_encoding($res->getBody(), 'UTF-8', 'auto'));
} else {
	print('HTTP通信に失敗しました。');
}