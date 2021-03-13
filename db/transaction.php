<?php
require_once 'DbManager.class.php';
try {
	$db = DbManager::getConnection();
	$db->beginTransaction();
	$db->query('INSERT INTO book(isbn, author_id, title, price, publish, published) VALUE("978-4-7981-0981-7", "A0001", "独習PHP", 3360, "翔泳社", "2006-01-24")');
	$db->query('INSERT INTO book(isbn, author_id, title, price, publish, published) VALUE("978-4-7981-0981-7", "A0001", "独習PHP", 3360, "翔泳社", "2006-01-24")');
	$db->commit();
} catch (Zend_Db_Statement_Exception $e) {
	$db->rollBack();
	print($e->getMessage());
} catch (Exception $e) {
	print($e->getMessage());
}
