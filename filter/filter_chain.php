<?php
require_once 'Zend/Filter.php';
require_once 'Zend/Filter/Digits.php';
require_once 'Zend/Filter/Int.php';

$str = '彼の身長は 175 cmです。';

$chain = new Zend_Filter();
$chain->addFilter(new Zend_Filter_Digits())
	->addFilter(new Zend_Filter_Int());

print($chain->filter($str));
