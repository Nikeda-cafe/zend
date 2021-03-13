<?php
require_once 'Zend/Controller/Action.php';

class LayoutController extends Zend_Controller_Action {
	public function indexAction() {
		$this->view->result = 'こんにちは、Zend_Layout！';
	}

	public function nolayoutAction() {
		$this->_helper->layout->disableLayout();
		$this->view->result = 'こんにちは、Zend_Layout！';
	}

	public function otherAction() {
		$this->_helper->layout->setLayout('master2');
		$this->view->result = 'こんにちは、Zend_Layout！';
	}
}
