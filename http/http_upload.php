<?php
require_once 'Zend/Http/Client.php';

$cli = new Zend_Http_Client('http://localhost/zend/http/upload.php',
	array(
		'maxredirects' => 0,
		'timeout' => 15
	)
);

$data = 'アップロードのテストです。';
$cli->setFileUpload('examples.dat', 'uploaded', $data, 'text/plain');
$res = $cli->request('POST');

if($res->isSuccessful()){
	print(mb_convert_encoding($res->getBody(), 'UTF-8', 'auto'));
} else {
	print('HTTP通信に失敗しました。');
}