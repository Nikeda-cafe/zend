<pre>
<?php
require_once 'DbManager.class.php';

$db = DbManager::getConnection();
$rs = $db->fetchPairs('SELECT isbn, title FROM book');
print_r($rs);
?>
</pre>
