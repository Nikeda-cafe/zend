<?php
require_once 'Zend/Cache.php';

$cache = Zend_Cache::factory('Output', 'File', 
	array(
		'lifetime' => 7200, 
		'automatic_serialization' => TRUE
	),
	array(
		'cache_dir' => './cache/'
	)
);

if(!$cache->start('output')) {
	print('現在時刻：'.date('G:i:s'));
	$cache->end();
}