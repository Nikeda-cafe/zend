<?php
require_once 'Zend/Currency.php';

$cur = new Zend_Currency();
print_r($cur->getCurrencyList());
