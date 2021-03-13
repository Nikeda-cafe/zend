<?php
require_once 'Zend/Controller/Action.php';

class DispatchController extends Zend_Controller_Action {
	public function init() {
		$this->_helper->viewRenderer->setNoRender();
	}

	public function preDispatch() {
		$res = $this->getResponse();
		$res->prepend('header',
		'<html>
		<head>
		<title>共通テンプレート</title>
		</head>
		<body>
		<img src="http://www.wings.msn.to/image/wings.jpg"
			 height="67" width="215" />
		<hr />');
	}

	public function postDispatch() {
		$res = $this->getResponse();
		$res->append('footer', 
		'<hr />
		Presented By YAMADA,Yoshihiro
		</body>
		</html>');
	}

	public function indexAction() {
		$res = $this->getResponse();
		$res->append('contents', 'indexアクションが呼び出されました。');
	}

	public function index2Action() {
		$res = $this->getResponse();
		$res->append('contents', 'index2アクションが呼び出されました。');
	}
}
