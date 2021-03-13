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

$cid = 'query_'.md5($_GET['category']);
if($data = $cache->load($cid)) {
	print($data);
} else {
	$data = 'クエリ情報categoryの値：'.$_GET['category'];
	$cache->save($data, $cid);
	print($data);
}
