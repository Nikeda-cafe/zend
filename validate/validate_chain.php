<?php
require_once 'Zend/Validate.php';
require_once 'Zend/Validate/Int.php';
require_once 'Zend/Validate/GreaterThan.php';

$num = 10.5;

$val = new Zend_Validate_Int();
$val->setMessage('項目Xは整数値でなければいけません。');
$val2 = new Zend_Validate_GreaterThan(20);
$val2->setMessage('項目Xは %min% 以上でなければいけません。');

$chain = new Zend_Validate();
$chain->addValidator($val)
	->addValidator($val2);
if(!$chain->isValid($num)) {
  foreach ($chain->getMessages() as $msg) {print($msg.'<br />');}
}
