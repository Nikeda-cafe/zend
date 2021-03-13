<?php
require_once 'Zend/Controller/Action.php';

class TestController extends Zend_Controller_Action{
	public function indexAction() {
		$this->_helper->ViewRenderer->setNoRender();
		//$this->_helper->ViewRenderer->setNeverRender();
		$this->_forward('index2');
	}

	public function index2Action() {
	}

	public function noconAction() {
		$this->_helper->ViewRenderer->setNoController();
	}

	public function renderAction() {
		$this->_helper->ViewRenderer->setNoController();
		$this->_helper->ViewRenderer->setScriptAction('error');
	}

}