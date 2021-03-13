<?php
require_once 'Zend/Validate/InArray.php';

$str = 'Struts';
$ary = array('symfony', 'Zend Framework', 'CakePHP', 'CodeIgniter');

$val = new Zend_Validate_InArray($ary);
if(!$val->isValid($str)) {
	foreach ($val->getMessages() as $msg) {print($msg.'<br />');}
}