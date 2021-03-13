<html>
<head>
<title>Technoratiブログ検索サービス</title>
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
	require_once 'Zend/Service/Technorati.php';

	$tech = new Zend_Service_Technorati('xxxxx');
	$result = $tech->search($_POST['keywd'],
		array(
			'authority' => 'a4',
			'language' => 'ja'
		)
	);
?>
	<ul>
		<?php foreach($result as $item){ ?>
			<li><a href='<?php print($item->getPermalink()); ?>'>
				<?php print($item->getTitle()); ?></a></li>
		<?php } ?>
	</ul>
<?php
}
?>
</body>
</html>
