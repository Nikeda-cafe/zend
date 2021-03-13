<pre>
<?php
require_once 'DbManager.class.php';

$db = DbManager::getConnection();
$rs = $db->fetchRow('SELECT title AS name, publish AS name FROM book WHERE isbn = ?', array('978-4-7981-1427-9'), Zend_Db::FETCH_NAMED);
print_r($rs);
?>
</pre>