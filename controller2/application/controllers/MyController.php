<?php
require_once 'Zend/Controller/Action.php';

class MyController extends Zend_Controller_Action {
	public function exceptAction() {
		$this->_helper->viewRenderer->setNoRender();
		$res = $this->getResponse();
		$res->setBody('例外が発生しました。');
	}
}
