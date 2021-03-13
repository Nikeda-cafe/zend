<?php
require_once 'Zend/Date.php';

$dat = new Zend_Date('2008/08/05 10:25:31');
$dat->set(12, Zend_Date::MONTH);
$dat->set(4, Zend_Date::DAY);
/*
$dat->setMonth(12);
$dat->setDay(4);
*/
print($dat);
