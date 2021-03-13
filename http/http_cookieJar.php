<pre>
<?php
require_once 'Zend/Http/Client.php';

function showOutput($req, $res) {
	print($req->getLastRequest());
	print('<hr />');
	print_r($res->getHeaders());
	print('<br />');
	print(mb_convert_encoding($res->getBody(), 'UTF-8', 'auto'));
	print('<hr />');
}

$cli = new Zend_Http_Client('http://localhost/zend/http/session.php',
	array(
		'maxredirects' => 1,
		'timeout' => 15
	)
);
$cli->setCookieJar();
$res = $cli->request();
showOutput($cli, $res);
$res = $cli->request();
showOutput($cli, $res);
?>
</pre>
