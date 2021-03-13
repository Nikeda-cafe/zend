<?php
require_once 'Zend/Date.php';

print('2008/02/30：'.Zend_Date::isDate('2008/02/30').'<br />');
print('99999/01/01：'.Zend_Date::isDate('99999/01/01').'<br />');
print('2008年7月20日：'.Zend_Date::isDate('2008年7月20日').'<br />');
print('Aug 5, 2008：'.Zend_Date::isDate('Aug 5, 2008', 'en_US'));
