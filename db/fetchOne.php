<?php
require_once 'DbManager.class.php';

$db = DbManager::getConnection();
$rs = $db->fetchOne('SELECT COUNT(*) FROM book');
print('登録件数：'.$rs.'件');
