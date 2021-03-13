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
	require_once 'Zend/XmlRpc/Client.php';

	$rpc = new Zend_XmlRpc_Client('http://localhost/zend/xmlrpc/rpc_server.php');
	try {
		$proxy = $rpc->getProxy('wings');
		$result = $proxy->bookSearch($_POST['publish']);
	} catch(Zend_XmlRpc_Client_HttpException $e) {
		die('HTTP通信エラー：'.$e->getMessage());
	}	catch(Zend_XmlRpc_Client_FaultException $e) {
		die('RPC実行エラー：'.$e->getMessage());
	}
	print('<ul>');
	foreach($result as $book){
		print('<li>'.$book['title'].'（'.$book['publish'].','.
			$book['published'].' '.$book['price'].'円）</li>');
	}
	print('</ul>');
}
?>
</body>
</html>
