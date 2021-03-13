<?php
require_once 'Zend/Controller/Action.php';

class SwitchController extends Zend_Controller_Action {

	public function init() {
		$context = $this->_helper->ContextSwitch;
		//$context->setContextParam('mode');
		$context->addActionContext('index', array('xml', 'json'))
						->initContext();
	}

	public function indexAction() {
		$this->view->message = 'こんにちは、SwitchContextヘルパー！';
	}
}
