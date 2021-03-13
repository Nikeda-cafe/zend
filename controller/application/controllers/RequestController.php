<?php
require_once 'Zend/Controller/Action.php';

class RequestController extends Zend_Controller_Action {
	public function indexAction() { }

	public function postAction() {
		$req = $this->getRequest();
		if(!$req->isPost()) { die('不正なアクセスです。'); }
		if($req->getPost('name') == NULL) {
			$this->_helper->ViewRenderer->setNoRender();
			$res = $this->getResponse();
			$res->setBody('名前を入力してください。');
		} else {
			$this->view->result = 'こんにちは、'.$req->getPost('name').'さん！';
		}
	}
}
