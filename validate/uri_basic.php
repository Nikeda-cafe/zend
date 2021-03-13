<?php
require_once 'Zend/Uri.php';

$uri = Zend_Uri::factory('http');
$uri->setHost('www.wings.msn.to');
$uri->setPort('8080');
$uri->setPath('/zend/uri/index.php');
$uri->setQuery(array('id'=>'12345', 'category'=>'PHP'));
print($uri->getUri());