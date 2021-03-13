<pre>
<?php
require_once 'DbManager.class.php';

$db = DbManager::getConnection();
$rs = $db->fetchCol('SELECT title FROM book WHERE publish = ?', array('翔泳社'));
print_r($rs);
?>
</pre>