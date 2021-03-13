<?php
require_once 'DbManager.class.php';

$db = DbManager::getConnection();
$stt = $db->prepare('INSERT INTO photo(type, data) VALUES(:type, :data)');
$file = fopen($_FILES['photo']['tmp_name'], 'rb');
$stt->bindValue(':type', $_FILES['photo']['type'], Zend_Db::PARAM_STR);
$stt->bindValue(':data', $file, Zend_Db::PARAM_LOB);
$stt->execute();
if($stt->rowCount() == 1) {
	print('写真のアップロードに成功しました。');
}