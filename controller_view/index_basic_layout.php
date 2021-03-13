<?php
define('APP', './application');
require_once 'Zend/Controller/Front.php';
require_once 'Zend/Layout.php';

$front = Zend_Controller_Front::getInstance();
$front->setControllerDirectory(APP.'/controllers');

$layout = Zend_Layout::startMvc(
	array(
		'layoutPath' => APP.'/views',
		'layout' => 'master',
		'contentKey' => 'content')
);

$front->dispatch();
