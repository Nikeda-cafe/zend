<html>
<head>
<title>Yahoo! 検索Webサービス</title>
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
	require_once 'Zend/Service/Yahoo.php';

	$yahoo = new Zend_Service_Yahoo('xxxxx');
	$options = array(
		'language' => 'ja',
		'country' => 'jp',
		'format' => 'html',
		'license' => ''
	);
	$result = $yahoo->webSearch($_POST['keywd'], $options);
?>
	<ul>
		<?php foreach($result as $item){ ?>
			<li><a href='<?php print($item->ClickUrl); ?>'>
				<?php print($item->Title); ?></a></li>
		<?php } ?>
	</ul>
<?php
}
?>
</body>
</html>
