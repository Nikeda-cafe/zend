<?php
require_once 'Zend/Session.php';

function showName() {
	$sess = new Zend_Session_Namespace('MyNs1');
	print('セッション識別子：'.Zend_Session::getId().'<br />');
	print('MyNs1名前空間：'.$sess->name.'<hr />');
}

showName();
Zend_Session::regenerateId();
showName();
