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

if($data = $cache->load('query')) {
	print($data);
} else {
	$data = 'クエリ情報categoryの値：'.$_GET['category'];
	$cache->save($data, 'query');
	print($data);
}
