<?php
require_once 'Zend/Validate/StringLength.php';

$str = 'にわにはにわにわとりがいる';

$val = new Zend_Validate_StringLength(5, 10);
$val->setMessage('項目strは %min% 文字以上でなければいけません。',
	Zend_Validate_StringLength::TOO_SHORT);
$val->setMessage('項目strは %max% 文字以下でなければいけません。',
	Zend_Validate_StringLength::TOO_LONG);

if(!$val->isValid($str)) {
	foreach ($val->getMessages() as $msg) {print($msg.'<br />');}
}
