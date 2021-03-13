<?php
require_once 'Zend/Date.php';

//Zend_Date::setOptions(array('format_type' => 'php'));

$dat = new Zend_Date('2008/08/05 10:25:31');
$format = 'yyyy年 MMMM dd日 a hh時mm分ss秒';
//$format = 'Y年 m月 d日 A h時i分s秒';
print($dat->toString($format).'<br />');
print($dat->toString($format, 'en_US'));
