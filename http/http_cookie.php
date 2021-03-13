<pre>
<?php
require_once 'Zend/Http/Client.php';
require_once 'Zend/Http/Cookie.php';

$cli = new Zend_Http_Client('http://www.wings.msn.to/',
	array(
		'maxredirects' => 1,
		'timeout' => 15
	)
);
$cli->setCookie('name', 'Y.Yamada');
$cli->setCookie('email', 'CQW15204@nifty.com');
/*
$cok1 = new Zend_Http_Cookie('name', 'Y.Yamada', '.wings.msn.to');
$cok2 = new Zend_Http_Cookie('email', 'CQW15204@nifty.com', '.wings.msn.to');
$cli->setCookie($cok1);
$cli->setCookie($cok2);
*/
$res = $cli->request();

print($cli->getLastRequest());
?>
</pre>