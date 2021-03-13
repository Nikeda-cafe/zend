<?php
require_once 'Zend/Date.php';

$dat = new Zend_Date('2008/07/18');
print('昨日か：'.$dat->isYesterday().'<br />');
print('今日か：'.$dat->isToday().'<br />');
print('明日か：'.$dat->isTomorrow().'<br />');
print('閏年か：'.$dat->isLeapYear());
