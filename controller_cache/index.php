<?php
define('APP', './application');
require_once 'Zend/Cache.php';

$cache = Zend_Cache::factory('Page', 'File', 
	array(
		'lifetime' => 7200,
		'automatic_serialization' => TRUE,
		'debug_header' => TRUE,
		'default_options' => array(
			'cache' => FALSE
		),
		'regexps' => array(
				'^/zend/controller_cache/cache/' => array(
					'cache' => TRUE,
					'cache_with_get_variables' => TRUE
				),
				'^/zend/controller_cache/cache/index2/' => array(
						'cache' => FALSE,
				),
				'^/zend/controller_cache/cache/index3/' => array(
					'cache' => TRUE
				)
		)
	),
	array(
		'cache_dir' => APP.'/cache/'
	)
);
$cache->start();

require_once 'Zend/Controller/Front.php';

$front = Zend_Controller_Front::getInstance();
$front->setControllerDirectory(APP.'/controllers');
$front->dispatch();
