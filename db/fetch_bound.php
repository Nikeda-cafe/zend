<?php
require_once 'DbManager.class.php';

$id = ($_GET['id'] == NULL) ? 1 : $_GET['id'];
$db = DbManager::getConnection();
$stt= $db->query('SELECT type,data FROM photo WHERE id=?', array($id));
$stt->bindColumn('type', $type, Zend_Db::PARAM_STR);
$stt->bindColumn('data', $data, Zend_Db::PARAM_LOB);
if($stt->fetch(Zend_Db::FETCH_BOUND)){
	header('Content-Type: '.$type);
	print($data);
} else {
	print('該当するデータがありません。');
}
