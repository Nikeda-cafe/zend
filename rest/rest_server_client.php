<html>
<head>
<title>書籍検索サービス</title>
</head>
<body>
<form method="POST"
	action="<?php print(htmlspecialchars($_SERVER['PHP_SELF'])); ?>">
出版社：
<select name="publish">
	<option value="7981">翔泳社</option>
	<option value="7980">秀和システム</option>
	<option value="8399">マイコミ</option>
</select>
<input type="submit" name="submit" value="検索" />
</form>
<?php
if($_POST['submit']!=NULL){
	require_once 'Zend/Rest/Client.php';

	$cli = new Zend_Rest_Client('http://localhost/zend/rest/rest_server.php');
	$cli->bookSearch($_POST['publish'], 10);
	$res = $cli->get();
	$result = $res->result;
?>
	<ul>
		<?php
		for($i = 0; $i < 10; $i++) {
			$item = $result->{'key_'.$i};
			if($item->isbn == NULL) { break; }
		?>
			<li><a href='<?php print('http://www.wings.msn.to/index.php/-/A-03/'.
				$item->isbn); ?>'><?php print($item->title); ?></a></li>
		<?php } ?>
	</ul>
<?php
}
?>
</body>
</html>
