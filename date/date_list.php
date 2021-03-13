<?php
require_once 'Zend/Date.php';

print(new Zend_Date('2008/08/05 10:25:31').'<br />');
print(new Zend_Date('2008/08/05 10:25:31', Zend_Date::DATES).'<br />');
print(new Zend_Date(22, Zend_Date::HOUR).'<br />');
print(new Zend_Date(
	array(
		'year' => 2008,
		'month' => 6,
		'day' => 25,
		'hour' => 11,
		'minute' => 37,
		'second' => 10
	)
));

/*
print(new Zend_Date('2008年08月05日').'<br />');
print(new Zend_Date('2008.08.05').'<br />');
print(new Zend_Date('Aug 05, 2008' ,NULL, 'en').'<br />');
print(new Zend_Date('08-05-2008' ,NULL, 'en').'<br />');
*/
