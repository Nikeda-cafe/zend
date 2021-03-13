<?php
require_once 'myConfig.php';
require_once 'Zend/Mail/Storage/Pop3.php';

$pop = new Zend_Mail_Storage_Pop3($opt);
$msg = $pop[$_GET['num']];
if($msg->isMultiPart()) {
	$part = $msg->getPart($_GET['file']);
	header('Content-Type: '.$part->contentType);
	print(base64_decode($part->getContent()));
} else {
	print('不正なパラメータが指定されました。');
}
