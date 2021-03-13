<?php
require_once 'Zend/Validate/Int.php';
require_once 'Zend/Validate/GreaterThan.php';

$num = 10.5;

$val = new Zend_Validate_Int();
if(!$val->isValid($num)) {
  foreach ($val->getMessages() as $msg) {print($msg.'<br />');}
}

$val2 = new Zend_Validate_GreaterThan(20);
if(!$val2->isValid($num)) {
	foreach ($val2->getMessages() as $msg) {print($msg.'<br />');}
}
