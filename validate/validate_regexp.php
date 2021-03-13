<?php
require_once 'Zend/Validate/Regex.php';

$url = 'CQW15204@nifty.com';

$val = new Zend_Validate_Regex('`[[:alpha:]]+://[^<>[:space:]]+[[:alnum:]/]`i');
if(!$val->isValid($url)) {
	foreach ($val->getMessages() as $msg) {print($msg.'<br />');}
}