<?php
require_once 'Zend/Cache.php';
require_once 'Zend/Config/Xml.php';

$cache = Zend_Cache::factory('File', 'File', 
	array(
		'lifetime' => 7200, 
		'automatic_serialization' => TRUE,
		'master_file' => '../config/config.xml'
	),
	array(
		'cache_dir' => './cache/'
	)
);

if(!($xml = $cache->load('config_xml'))) {
	print('キャッシュがリフレッシュされました。<br />');
	$xml = new Zend_Config_Xml('../config/config.xml' ,'debug');
	$cache->save($xml, 'config_xml');
}

print_r($xml->toArray());
