<html>
<head>
<title>Yahoo! ウェブ検索Webサービス</title>
</head>
<body>
<form method="POST"
	action="<?php print(htmlspecialchars($_SERVER['PHP_SELF'])); ?>">
検索キーワード：
<input type="text" name="keywd" size="30"
	value="<?php print(htmlspecialchars($_POST['keywd'])); ?>" />
<input type="submit" name="submit" value="検索" />
</form>
<?php
if($_POST['submit']!=NULL){
	require_once 'Zend/Rest/Client.php';

	$cli = new Zend_Rest_Client('http://api.search.yahoo.co.jp/WebSearchService/V1/webSearch');
	$cli->appid('wings-project');
	$cli->query($_POST['keywd']);
	$cli->results(20);
	$result = $cli->get();
?>
	<ul>
		<?php foreach($result->Result as $res){ ?>
			<li><a href='<?php print($res->ClickUrl); ?>'>
				<?php print($res->Title); ?></a></li>
		<?php } ?>
	</ul>
<?php
}
?>
</body>
</html>
