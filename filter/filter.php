<?php
require_once 'Zend/Filter.php';
require_once 'Zend/Filter/Alnum.php';

$str = '彼の身長は 175 cmです。';

print(Zend_Filter::get($str, 'Alnum', array(TRUE)).'<br />');

$alnum = new Zend_Filter_Alnum(TRUE);
print($alnum->filter($str));
