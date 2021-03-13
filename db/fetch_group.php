<pre>
<?php
require_once 'DbManager.class.php';

$db = DbManager::getConnection();
$stt = $db->query('SELECT publish, title FROM book ORDER BY published DESC');
$rs = $stt->fetchAll(Zend_DB::FETCH_COLUMN|Zend_DB::FETCH_GROUP);
print_r($rs);
?>
</pre>