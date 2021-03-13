<?php
require_once 'Zend/Validate/Hostname.php';

$names = array('www.wings.msn.to', '255.255.255.0', 'localhost');

$val = new Zend_Validate_HostName(Zend_Validate_HostName::ALLOW_DNS);
//$val = new Zend_Validate_HostName(Zend_Validate_HostName::ALLOW_IP);
//$val = new Zend_Validate_HostName(Zend_Validate_HostName::ALLOW_LOCAL);
foreach($names as $name) {
	if(!$val->isValid($name)) {
		foreach ($val->getMessages() as $msg) {print($msg.'<br />');}
	}
}