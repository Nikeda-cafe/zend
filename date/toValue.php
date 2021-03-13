<?php
require_once 'Zend/Date.php';

$dat = new Zend_Date('2008/08/05 10:25:31');
print($dat->toValue(Zend_Date::YEAR));
print($dat->toValue(Zend_Date::MONTH_NAME));
