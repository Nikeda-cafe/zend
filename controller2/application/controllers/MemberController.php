<?php
require_once 'Zend/Controller/Action.php';

class MemberController extends Zend_Controller_Action {
	public function showAction() {
		$this->_helper->viewRenderer->setNoRender();
		$req = $this->getRequest();
		$id = $req->getUserParam('id');
		$res = $this->getResponse();
		$res->setBody('メンバ'.$id.'の紹介です。');
	}
}
