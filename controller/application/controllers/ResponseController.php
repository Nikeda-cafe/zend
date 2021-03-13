<?php
require_once 'Zend/Controller/Action.php';

class ResponseController extends Zend_Controller_Action {
	public function indexAction() {
		$res = $this->getResponse();
		$res->setHeader('Content-Type', 'text/xml;charset=UTF-8');
		$this->view->result = 'こんにちは、Zend Framework！';
	}
}
