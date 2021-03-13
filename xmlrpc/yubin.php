<html>
<head>
<title>郵便番号による住所検索</title>
</head>
<body>
<form method="POST"
	action="<?php print(htmlspecialchars($_SERVER['PHP_SELF'])); ?>">
郵便番号：
<input type="text" name="postnum" size="9" maxlength="7"
	value="<?php print($_POST['postnum']); ?>" />
<input type="submit" name="submit" value="検索" />
</form>
<?php
if($_POST['submit']!=NULL){
	require_once 'Zend/XmlRpc/Client.php';

	$rpc = new Zend_XmlRpc_Client('http://yubin.senmon.net/service/xmlrpc/');
	try {
		/*
		$proxy = $rpc->getProxy('yubin');
		$result = $proxy->fetchAddressByPostcode($_POST['postnum']);
		*/
		/*
		$result = $proxy->fetchAddressByPostcode(
			Zend_XmlRpc_Value::getXmlRpcValue($_POST['postnum'],
				Zend_XmlRpc_Value::XMLRPC_TYPE_STRING)
		);
		*/
		$result = $rpc->call('yubin.fetchAddressByPostcode', array($_POST['postnum']));
	} catch(Zend_XmlRpc_Client_HttpException $e) {
		die('HTTP通信エラー：'.$e->getMessage());
	}	catch(Zend_XmlRpc_Client_FaultException $e) {
		die('RPC実行エラー：'.$e->getMessage());
	}
	print('<ul>');
	foreach($result as $address){
		print('<li>'.$address['pref'].$address['city'].
			$address['town'].$addess['other'].'</li>');
	}
	print('</ul>');
}
?>
</body>
</html>
