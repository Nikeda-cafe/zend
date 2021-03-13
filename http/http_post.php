<?php
require_once 'Zend/Http/Client.php';

$cli = new Zend_Http_Client('http://d.hatena.ne.jp/WINGS/20080627',
	array(
		'maxredirects' => 0,
		'timeout' => 15
	)
);

$cli->setParameterPost(
	array(
		'title' => 'Zend_Httpコンポーネントによるトラックバック機能',
		'excerpt' => 'Zend_Http_ClientはsetParameterPostメソッドで...',
		'url' => 'http://www.wings.msn.to/tmp/test3.html',
		'blog_name' => 'サーバサイド技術の学び舎 - WINGS'
	)
);
$res = $cli->request('POST');

if($res->isSuccessful()){
	header('Content-Type: text/xml; charset=UTF-8');
	print(mb_convert_encoding($res->getBody(), 'UTF-8', 'auto'));
} else {
	print('HTTP通信に失敗しました。');
}