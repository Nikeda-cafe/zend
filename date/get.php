<?php
require_once 'Zend/Date.php';

$dat = new Zend_Date('2008/08/05 10:25:31');
print($dat->get(Zend_Date::YEAR).'<br />');
print($dat->get(Zend_Date::MONTH_NAME).'<br />');
print($dat->get(Zend_Date::WEEKDAY).'<br />');
print($dat->get(Zend_Date::DATES).'<br />');
print($dat->get(Zend_Date::DATES, 'en_US').'<br />');
print($dat->get(Zend_Date::ISO_8601).'<br />');
