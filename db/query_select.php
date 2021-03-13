<?php
require_once 'DbManager.class.php';

$db = DbManager::getConnection();
$stt = $db->query('SELECT * FROM book ORDER BY published DESC');
?>
<table border="1">
<tr>
	<th>ISBNコード</th><th>書名</th><th>価格</th><th>出版社</th><th>刊行日</th>
</tr>
<?php while($row = $stt->fetch(Zend_Db::FETCH_ASSOC)){ ?>
	<tr>
		<td><?php print($row['isbn']); ?></td>
		<td><?php print($row['title']); ?></td>
		<td><?php print(number_format($row['price'])); ?>円</td>
		<td><?php print($row['publish']); ?></td>
		<td><?php print($row['published']); ?></td>
	</tr>
<?php } ?>
</table>
