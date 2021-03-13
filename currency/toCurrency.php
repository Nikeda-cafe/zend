<?php
require_once 'Zend/Currency.php';

$cur = new Zend_Currency();
//$cur = new Zend_Currency('JPY');
//$cur = new Zend_Currency('ja_JP');
//$cur = new Zend_Currency('JPY', 'ja_JP');

print($cur->toCurrency(2850));
/*
print($cur->toCurrency(2850,
	array(
	'position' => Zend_Currency::RIGHT,
	'display' => Zend_Currency::USE_SHORTNAME,
	'precision' => 5,
	'currency' => '円'
	)
));
*/