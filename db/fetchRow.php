<pre>
<?php
require_once 'DbManager.class.php';

$db = DbManager::getConnection();
$rs = $db->fetchRow('SELECT * FROM book WHERE isbn = ?', array('978-4-7981-1427-9'));
print_r($rs);
?>
</pre>