<?php
require_once 'Zend/Date.php';

$dat = new Zend_Date('2008/08/05 10:25:31');
print('時の比較：'.$dat->isLater(12, Zend_Date::HOUR).'<br />');
print('日の比較：'.$dat->isEarlier(2, Zend_Date::DAY).'<br />');
print('月の比較：'.$dat->equals(8, Zend_Date::MONTH));
