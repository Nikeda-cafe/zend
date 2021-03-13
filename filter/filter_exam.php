<?php
require_once 'Zend/Filter.php';
require_once 'Zend/Filter/StringToUpper.php';
require_once 'Zend/Filter/StringToLower.php';

$str1 = '   彼の身長は 175 cmです。   ';
$str2 = '../../zend/filter/filter.php';
$str3 = '<a href="http://www.wings.msn.to/">サポートサイト</a>';
$str4 = '358.1231';
$str5 = 'ＷＩＮＧＳ ｐｒｏｊｅｃｔ';
$str6 = '<font color="Red"><i>サーバサイド技術の学び舎<!--コメント--></i></font>';

print(Zend_Filter::get($str1, 'Alnum', array(FALSE)).'<br />');
print(Zend_Filter::get($str1, 'Alnum', array(TRUE)).'<br />');
print(Zend_Filter::get($str1, 'Digits').'<br />');
print(Zend_Filter::get($str2, 'BaseName').'<br />');
print(Zend_Filter::get($str2, 'Dir').'<br />');
print(Zend_Filter::get($str2, 'RealPath').'<br />');
print(Zend_Filter::get($str3, 'HtmlEntities', array(ENT_QUOTES, 'UTF-8')).'<br />');
print(Zend_Filter::get($str3, 'HtmlEntities', array(ENT_NOQUOTES, 'UTF-8')).'<br />');
print(Zend_Filter::get($str4, 'Int').'<br />');
$low = new Zend_Filter_StringToLower();
$low->setEncoding('UTF-8');
print($low->filter($str5).'<br />');
$up = new Zend_Filter_StringToUpper();
$up->setEncoding('UTF-8');
print($up->filter($str5).'<br />');
print(Zend_Filter::get($str1, 'StringTrim').'<br />');
print(Zend_Filter::get($str6, 'StripTags',
	array(array('font'), array(), FALSE)).'<br />');
print(Zend_Filter::get($str6, 'StripTags',
	array(array('font'), array('color'), FALSE)).'<br />');
print(Zend_Filter::get($str6, 'StripTags',
	array(array(), array(), TRUE)).'<br />');
