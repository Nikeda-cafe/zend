<?php
require_once 'Zend/Rest/Server.php';

class MyService {
	public function bookSearch($publish, $result) {
		require_once '../db/DbManager.class.php';
		$db = DbManager::getConnection();
		$sel = $db->select();
		$sel->from('book');
		$sel->where('isbn LIKE ?', '978-4-'.$publish.'%');
		$sel->order('published DESC');
		if(!is_numeric($result) || $result > 10) { $result = 10; }
		$sel->limit($result);
		$stt = $db->query($sel);
		return array(
			'status' => 'succeed',
			'msg' => 'Book Search succeed.',
			'result' => $stt->fetchAll()
		);
	}
}

$srv = new Zend_Rest_Server();
$srv->setClass('MyService');
$srv->handle();