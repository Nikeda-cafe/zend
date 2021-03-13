<?php
require_once 'Zend/Cache.php';

class MyClass {
	public static function showCurrent($format) {
		return '現在時刻：'.date($format);
	}
}


$cache = Zend_Cache::factory('Class', 'File', 
	array(
		'lifetime' => 7200, 
		'automatic_serialization' => TRUE,
		'cached_entity' => 'MyClass'),
	array(
		'cache_dir' => './cache/'
	)
);

print($cache->showCurrent('G:i:s'));
