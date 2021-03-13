<?php
require_once 'Zend/Feed.php';
require_once '../db/DbManager.class.php';

$feed = array(
	'title' => 'サーバサイド技術の学び舎 - WINGS',
	'link' => 'http://www.wings.msn.to/',
	'charset' => 'UTF-8',
	'description' => 'サーバサイド技術に関する最新情報を提供中',
	'author' => 'WINGSプロジェクト',
	'email' => 'webmaster@wings.msn.to',
	'image' => 'http://www.wings.msn.to/image/wings.jpg',
	'entries' => array()
);

$db = DbManager::getConnection();
$stt = $db->prepare('SELECT * FROM contents ORDER BY updated DESC LIMIT 15');
$stt->execute();
while($row = $stt->fetch()) {
	$feed['entries'][] = array(
		'title' => $row['title'],
		'link' => $row['url'],
		'description' => $row['descript'],
		'lastUpdate' => strtotime($row['updated']),
		'category' => array(
				array('term' => $row['category'])
			)
	);
}

$rss = Zend_Feed::importArray($feed, 'rss');
$rss->send();
