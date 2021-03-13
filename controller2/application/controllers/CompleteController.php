<?php
require_once 'Zend/Controller/Action.php';

class CompleteController extends Zend_Controller_Action {

	public function indexAction() { }

	public function listAction() {
		$keywd = $this->getRequest()->getParam('keywd');
		$data = array();
		for($i = 0; $i < 10; $i++) {
			$data[] = $keywd.'_'.$i;
		}
		$this->_helper->AutoCompleteScriptaculous($data);
	}
}
