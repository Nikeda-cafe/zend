<?php
require_once 'Zend/Cache.php';

function showCurrent($format) {
	return '現在時刻：'.date($format);
}

$cache = Zend_Cache::factory('Function', 'File', 
	array(
		'lifetime' => 7200, 
		'automatic_serialization' => TRUE,
		'cache_by_default'=>FALSE, 
		'cached_functions'=>array('showCurrent')
	),
	array(
		'cache_dir' => './cache/'
	)
);
print($cache->call('showCurrent', array('G:i:s')));
