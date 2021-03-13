<?php
require_once 'Zend/Cache.php';

$cache = Zend_Cache::factory('Core', 'File', 
	array(
		'lifetime' => 7200, 
		'automatic_serialization' => TRUE
	),
	array(
		'cache_dir' => './cache/'
	)
);
if($data = $cache->load('core')) {
	print('現在時刻：'.$data);
} else {
	$data = date('G:i:s');
	$cache->save($data, 'core', array('common'));
	print('現在時刻：'.$data);
}
