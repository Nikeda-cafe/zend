<?php
require_once 'Zend/Date.php';

$dat = new Zend_Date('2008/08/05 10:25:31');
print($dat.'<br />');
$dat->add(5, Zend_Date::YEAR);
print($dat.'<br />');
$dat->sub(10, Zend_Date::MONTH);
print($dat.'<br />');