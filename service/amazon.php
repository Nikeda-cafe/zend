<html>
<head>
<title>Amazon Webサービス</title>
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
	require_once 'Zend/Service/Amazon.php';
	$amazon = new Zend_Service_Amazon('XXXXXXXXXXXXXXXXXXXX', 'JP');
	$results = $amazon->itemSearch(
		array(
			'SearchIndex' => 'Books', 
			'Keywords' => $_POST['keywd'],
			'ResponseGroup' => 'Large'
		)
	);
?>
	<ul>
		<?php foreach($results as $item){ ?>
			<li><a href='<?php print($item->DetailPageURL); ?>'>
				<?php print($item->Title); ?></a></li>
		<?php } ?>
	</ul>
<?php
}
?>
</body>
</html>
