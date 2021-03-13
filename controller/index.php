<?php
define('APP', './application');
require_once 'Zend/Controller/Front.php';
require_once 'Zend/Controller/Response/Http.php';

$front = Zend_Controller_Front::getInstance();
$front->setControllerDirectory(APP.'/controllers');
$front->addControllerDirectory(APP.'/modules/usr/controllers','usr');
//$front->setParam('noViewRenderer', TRUE);
//$front->setParam('noErrorHandler', TRUE);
$front->setParam('siteTitle', 'Zend Framework徹底入門');
$front->dispatch();
//Zend_Registry::set('siteName','zend-sample');

/*
$res = new Zend_Controller_Response_Http();
$res->renderExceptions(TRUE);
$front->setResponse($res);
$front->dispatch();
*/

/*
$front->throwExceptions(TRUE);
try {
  $front->dispatch();
} catch(Exception $e) {
  print($e->getMessage());
}
*/

/*
$front->returnResponse(TRUE);
$res = $front->dispatch();
if ($res->isException()) {
	print_r($res->getException());
} else {
	$res->sendResponse();
}
*/