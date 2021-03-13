<?php
require_once 'Zend/Validate/StringLength.php';

$str = 'にわにはにわにわとりがいる。';

$val = new Zend_Validate_StringLength(0, 14);
if(!$val->isValid($str)) {
  foreach ($val->getMessages() as $msg) {print($msg.'<br />');}
}
