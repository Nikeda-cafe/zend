<?php
require_once 'Zend/Validate/EmailAddress.php';

$mails = array(
	'yamada@yoshihiro@nifty.com',
	'"YAMADA Yoshihiro"@wings.msn.to',
	'yoshihiro@wings.aa',
);

$val = new Zend_Validate_EmailAddress();
foreach($mails as $mail) {
	if(!$val->isValid($mail)) {
		foreach ($val->getMessages() as $msg) {print($msg.'<br />');}
	} else {
		print($mail. ' is valid.<br />');
	}
}