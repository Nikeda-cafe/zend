<?php
require_once 'Zend/Controller/Action.php';

class NewsController extends Zend_Controller_Action {
	public function indexAction() {
		$this->_helper->viewRenderer->setNoRender();
		$req = $this->getRequest();
		$y = $req->getUserParam('year');
		$m = $req->getUserParam('month');
		$d = $req->getUserParam('day');
		$res = $this->getResponse();
		$res->setBody($y.'年'.$m.'月'.$d.'日のニュースです。');
	}
}
