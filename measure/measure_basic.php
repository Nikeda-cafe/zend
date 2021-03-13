<?php
require_once 'Zend/Measure/Length.php';

$len = new Zend_Measure_Length(50, Zend_Measure_Length::METER);

print('メートル表記：'.$len->toString(2).'<br />');
print('ヤード表記：'.$len->convertTo(Zend_Measure_Length::YARD, 2));
/*
$len->setType(Zend_Measure_Length::YARD);
print('ヤード表記：'.$len->toString(2));
*/
/*
$len->setType(Zend_Measure_Length::YARD);
print('オブジェクト：'.$len.'<br />');
print('toStringメソッド：'.$len->toString(2).'<br />');
print('getValueメソッド：'.$len->getValue(2).'<br />');
print('getTypeメソッド：'.$len->getType());
*/