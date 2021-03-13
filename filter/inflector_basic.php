<?php
require_once 'Zend/Filter/Inflector.php';

$inf = new Zend_Filter_Inflector(':controller/:action.:suffix');
$inf->setRules(
	array(
		':controller' => array('Word_CamelCaseToDash', 'StringToLower'),
		':action' => array('Word_CamelCaseToDash', 'StringToLower'),
		'suffix' => 'tpl'
	)
);

print(
	$inf->filter(
		array(
			'controller' => 'WingsMemberBook',
			'action' => 'SearchByAuthor',
		)
	)
);

