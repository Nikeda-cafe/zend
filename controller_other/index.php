<?php
define('APP', './application');
require_once 'Zend/Controller/Front.php';
require_once 'Zend/Controller/Response/Http.php';
require_once APP.'/AuthPlugin.class.php';

$front = Zend_Controller_Front::getInstance();
$front->setControllerDirectory(APP.'/controllers');
$front->registerPlugin(new AuthPlugin());

Zend_Controller_Action_HelperBroker::addPath(
	APP.'/controllers/helpers', 'My_Action_Helper');

$front->dispatch();
