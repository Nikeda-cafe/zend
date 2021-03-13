<?php
require_once 'DbManager.class.php';
require_once './dao/Book.class.php';
require_once './dao/Author.class.php';
require_once './dao/BookInf.class.php';

$db = DbManager::getConnection();
Zend_Db_Table_Abstract::setDefaultAdapter($db);
