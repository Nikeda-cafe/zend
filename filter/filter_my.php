<?php
require_once 'Zend/Filter.php';
require_once 'My/Filter/Uri.php';

$str = 'サポートサイトはhttp://www.wings.msn.to/です。';

print(Zend_Filter::get($str, 'Uri', array(), 'My_Filter').'<br />');

$uri = new My_Filter_Uri();
print($uri->filter($str));
