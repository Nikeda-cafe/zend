<?php
require_once 'Zend/Controller/Action.php';

class CheckController extends Zend_Controller_Action {
	public function indexAction() {
		$this->_helper->AclCheck('Common', 'Create');
		$this->_helper->viewRenderer->setNoRender();
		$this->getResponse()->setBody('アクセスに成功しました。');
	}
}