<html>
<head>
<title>YouTube Data API</title>
</head>
<body>
<form method="POST"
	action="<?php print(htmlspecialchars($_SERVER['PHP_SELF'])); ?>">
検索キーワード：
<input type="text" name="keywd" size="20" maxlength="50"
	value="<?php print($_POST['keywd']); ?>" />
<input type="submit" name="submit" value="検索" />
</form>
<?php
if($_POST['submit']!=NULL){
	require_once 'Zend/Gdata/YouTube.php';

	$tube = new Zend_Gdata_YouTube();
	$q = $tube->newVideoQuery();
	$q->videoQuery = $_POST['keywd'];
	$q->orderBy = 'viewCount';
	$result = $tube->getVideoFeed($q);
	foreach($result as $entry){ print($entry->content); }
}
?>
</body>
</html>
