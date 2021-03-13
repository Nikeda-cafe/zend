<?php
require_once 'Zend/Controller/Action.php';

class InitController extends Zend_Controller_Action {
	public function init() {
		$this->_helper->viewRenderer->setNoRender();
	}

	public function indexAction() {
		$res = $this->getResponse();
		$res->setBody('indexアクションが呼び出されました。');
	}

	public function index2Action() {
		$res = $this->getResponse();
		$res->setBody('index2アクションが呼び出されました。');
	}
}
