<?php

/** 指定された出版社コードで書籍情報を検索
  * 
	* @param string $publish 出版社コード
	* @return struct
  */
function bookSearch($publish){
	require_once '../db/DbManager.class.php';
	$db = DbManager::getConnection();
	$sel = $db->select();
	$sel->from('book');
	$sel->where('isbn LIKE ?', '978-4-'.$publish.'%');
	$sel->order('published DESC');
	$sel->limit($result);
	$stt = $db->query($sel);
	return $stt->fetchAll();;
}