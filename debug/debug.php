<?php
require_once 'Zend/Debug.php';

$data = array(
	'PHP' => '<PHP:Hypertext Preprocessor>',
	'XML' => 'eXtensible Markup Language',
	'Z/F' => 'Zend Framework'
);

Zend_Debug::dump($data, '変数$data：', TRUE);
print('<hr />');
var_dump($data);