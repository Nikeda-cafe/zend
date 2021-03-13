<?php
require_once 'DbManager.class.php';

$db = DbManager::getConnection();
$stt = $db->query("DELETE FROM book WHERE published <= '2006-12-31'");
print('削除件数：'.$stt->rowCount().'件');
