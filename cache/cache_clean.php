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

$cache->clean(Zend_Cache::CLEANING_MODE_MATCHING_TAG, array('common'));
