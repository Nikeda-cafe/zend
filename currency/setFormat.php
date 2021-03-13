<?php
require_once 'Zend/Currency.php';

$cur = new Zend_Currency();
$cur->setFormat(
	array(
	'position' => Zend_Currency::RIGHT,
	'display' => Zend_Currency::USE_SHORTNAME,
	'precision' => 5,
	'currency' => '円'
	)
);
print($cur->toCurrency(2850));