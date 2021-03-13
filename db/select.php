<html>
<head>
<title>SELECT命令の動的な生成</title>
</head>
<body>
<form method="POST"
	action="<?php print(htmlspecialchars($_SERVER['PHP_SELF'])); ?>">
出版社：
<input type="text" name="publish" size="10" />
<input type="submit" name="submit" value="検索" />
</form>
<pre>
<?php
if($_POST['submit']!=NULL){
	require_once 'DbManager.class.php';

	$db = DbManager::getConnection();
	$sel = $db->select();
	$sel->from('book', array('isbn', 'title', 'price'));
	$sel->order('published');
	/*
	$sel = $db->select()
		->from('book', array('isbn', 'title', 'price'))
		->order('published');
	*/
	if($_POST['publish']!=''){
		$sel->where('publish = ?', $_POST['publish']);
	}
	$stt = $db->query($sel);
	print_r($stt->fetchAll());
}
?>
</pre>
</body>
</html>
