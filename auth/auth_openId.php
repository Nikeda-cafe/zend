<html>
<head>
<title>OpenId認証</title>
</head>
<body>
<form method="POST"
	action="<?php print(htmlspecialchars($_SERVER['PHP_SELF'])); ?>">
<table border="0">
OpenId：
<input type="text" name="oid" size="25" maxlength="50"
	value="<?php print($_POST['oid']); ?>" />
<input type="submit" name="submit" value="認証" />
</form>
<?php
require_once 'Zend/Auth.php';
require_once 'Zend/Auth/Adapter/OpenId.php';
require_once 'Zend/OpenId/Extension/Sreg.php';

$auth = Zend_Auth::getInstance();

if($auth->hasIdentity()) {
	print('認証済みです。<br />');
	print_r($auth->getIdentity());
} else if ($_POST['submit'] != NULL 
	|| isset($_GET['openid_mode']) || isset($_POST['openid_mode'])) {
	$sreg = new Zend_OpenId_Extension_Sreg(
		array(
			'nickname' => TRUE,
			'email' => FALSE,
			'fullname' => FALSE,
		)
	);
	$adapter = new Zend_Auth_Adapter_OpenId(
		$_POST['oid'], NULL, NULL, NULL, $sreg);
	$result = $auth->authenticate($adapter);
	if (!$result->isValid()) {
		foreach ($result->getMessages() as $message) {
			print($message.'<br />');
		}
	} else {
		$auth->getStorage()->write($sreg->getProperties());
		$data = $auth->getIdentity();
		print('認証に成功しました：'.$data['nickname']);
	}
}
?>
</body>
</html>
