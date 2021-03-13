<pre>
<?php
require_once 'DbManager.class.php';

$db = DbManager::getConnection();
$tables = $db->listTables();
foreach($tables as $table){
	print('テーブル名：'.$table.'<br />');
	print_r($db->describeTable($table));
}
?>
</pre>