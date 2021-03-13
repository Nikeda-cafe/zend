<?php
require_once 'Zend/Controller/Action.php';

class AjaxController extends Zend_Controller_Action {

	public function init() {
		$ajax = $this->_helper->getHelper('AjaxContext');
		$ajax->addActionContext('process', array('html','json'))
				->initContext();
	}

	public function indexAction() { }

	public function processAction() {
		$req = $this->getRequest();
		$this->view->message = 'こんにちは、'.$req->getParam('name').'さん！';
	}
}
