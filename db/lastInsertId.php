<?php
require_once 'DbManager.class.php';

$db = DbManager::getConnection();
$db->query("INSERT INTO quest(name, sex, age, comment, updated) VALUES('掛谷奈美', 1, 30, 'ためになりました。', NOW())");
print('最新のID値：'.$db->lastInsertId());
