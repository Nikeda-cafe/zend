<?php
require_once 'Zend/Session.php';

Zend_Session::start();

$sess = Zend_Session::getIterator();
foreach($sess as $key=>$value) {
	print($key.'：'.$value.'<br />');
}
