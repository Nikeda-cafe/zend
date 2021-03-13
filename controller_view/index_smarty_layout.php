<?php
define('APP', './application');
require_once 'Zend/Controller/Front.php';
require_once 'Zend/Controller/Action/Helper/ViewRenderer.php';
require_once 'Zend/Layout.php';
require_once APP.'/Zend_View_Smarty.class.php';

$front = Zend_Controller_Front::getInstance();
$front->setControllerDirectory(APP.'/controllers');

$view = new Zend_View_Smarty();
$render = new Zend_Controller_Action_Helper_ViewRenderer($view);
$render->setViewBasePathSpec(APP.'/smarty')
	->setViewScriptPathSpec(':module/:controller/:action.:suffix')
	->setViewScriptPathNoControllerSpec(':action.:suffix')
	->setViewSuffix('tpl');
Zend_Controller_Action_HelperBroker::addHelper($render);

$layout = Zend_Layout::startMvc(
	array(
		'layoutPath' => APP.'/smarty',
		'layout' => 'master',
		'contentKey' => 'content')
);
$layout->setViewSuffix('tpl');

$front->dispatch();
