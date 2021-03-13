<?php
define('APP', './application');
require_once 'Zend/Controller/Front.php';
require_once 'Zend/Controller/Plugin/ErrorHandler.php';
require_once 'Zend/Controller/Router/Route/Regex.php';
require_once 'Zend/Config/Ini.php';

require_once APP.'/StopPlugin.class.php';

$front = Zend_Controller_Front::getInstance();
$front->setControllerDirectory(APP.'/controllers');

$router = $front->getRouter();

$router->addRoute('news',
	new Zend_Controller_Router_Route('news/:day/:month/:year',
		array(
			'module' => 'default',
			'controller' => 'news',
			'action' => 'index',
			'day' => date('d'),
			'month' => date('m'),
			'year' => date('Y')
		),
		array(
			'day' => '\d{2}',
			'month' => '\d{2}',
			'year' => '\d{4}'
		)
	)
);

$router->addRoute('my',
	new Zend_Controller_Router_Route_Static('my',
		array(
			'module' => 'default',
			'controller' => 'member',
			'action' => 'show',
			'id' => 'yyamada'
		)
	)
);

$router->addRoute('article',
	new Zend_Controller_Router_Route_Regex(
		'article/(\d+)\.html',
		array(
			'module' => 'default',
			'controller' => 'article',
			'action' => 'index'
		),
		array(1 => 'aid')
	)
);

/*
$config = new Zend_Config_Ini(APP.'/myRoutes.ini', 'debug');
$router->addConfig($config, 'routes');
*/
/*
$front->registerPlugin(
	new Zend_Controller_Plugin_ErrorHandler(
		array(
			'module' => 'default',
			'controller' => 'my',
			'action' => 'except'
		)
	)
);
*/
//$front->registerPlugin(new StopPlugin());

/*
require_once APP.'/controllers/helpers/Version.php';
$helper = new My_Action_Helper_Version();
Zend_Controller_Action_HelperBroker::addHelper($helper);
*/
/*
Zend_Controller_Action_HelperBroker::addPath(
	APP.'/controllers/helpers', 'My_Action_Helper');
*/
//Zend_Controller_Action_HelperBroker::addPrefix('My_Action_Helper');

/*
require_once APP.'/controllers/helpers/MetaInfo.php';
$helper = new My_Action_Helper_MetaInfo();
Zend_Controller_Action_HelperBroker::addHelper($helper);
*/
$front->dispatch();
