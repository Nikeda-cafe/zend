<html>
<head>
<title>新規データの挿入</title>
</head>
<body>
<form method="POST"
	action="<?php print(htmlspecialchars($_SERVER['PHP_SELF'])); ?>">
<table border="0">
  <tr>
    <th align="right">ISBNコード：</th>
    <td><input type="text" name="isbn" size="25" maxlength="30" /></td>
  </tr><tr>
    <th align="right">書名：</th>
    <td><input type="text" name="title" size="35" maxlength="170" /></td>
  </tr><tr>
    <th align="right">価格：</th>
    <td><input type="text" name="price" size="5" maxlength="5" />円</td>
  </tr><tr>
    <th align="right">出版社：</th>
    <td><input type="text" name="publish" size="15" maxlength="20" /></td>
  </tr><tr>
    <th align="right">刊行日：</th>
    <td><input type="text" name="published" size="10" maxlength="10" /></td>
  </tr>
  <tr>
    <td colspan="2">
      <input type="submit" name="submit" value="登録" />
      <input type="reset" value="クリア" />
    </td>
  </tr>
</table>
</form>
</body>
</html>
<?php
if($_POST['submit'] != NULL) {
	require_once 'DbManager.class.php';

	$db = DbManager::getConnection();
	$stt = $db->query('INSERT INTO book(isbn, title, price, publish, published) VALUE(?, ?, ?, ?, ?)',
		array(
			$_POST['isbn'],
			$_POST['title'],
			$_POST['price'],
			$_POST['publish'],
			$_POST['published']
		)
	);
}
