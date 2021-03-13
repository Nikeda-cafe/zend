<pre>
<?php
require_once 'DbManager.class.php';

$db = DbManager::getConnection();
$rs = $db->fetchAll('SELECT * FROM book WHERE publish = ?', array('翔泳社'));
/*
$stt = $db->query('SELECT * FROM book WHERE publish = ?', array('翔泳社'));
$rs = $stt->fetchAll();
*/
print_r($rs);
?>
</pre>