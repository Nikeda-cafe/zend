<?php
require_once 'Zend/Controller/Action.php';

class ForwardController extends Zend_Controller_Action {
	public function indexAction() {
		$req = $this->getRequest();
		$req->setParam('greeting', 'こんにちは');
		$this->_forward('result');
	}

	public function index2Action() {
		$req = $this->getRequest();
		$req->setParam('greeting', 'こんばんは');
		$this->_forward('result');
		//$this->_forward('result', 'forward', 'default', array('greeting'=>'こんばんは'));
	}

	public function resultAction() {
		$req = $this->getRequest();
		$this->view->result = $req->getUserParam('greeting').'、'.$req->getQuery('lang').'！';
	}
}
