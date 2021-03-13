<?php
require_once 'My/Validate/Uri.php';

$url = 'CQW15204@nifty.com';

$val = new My_Validate_Uri();
if(!$val->isValid($url)) {
	foreach ($val->getMessages() as $msg) {print($msg.'<br />');}
}