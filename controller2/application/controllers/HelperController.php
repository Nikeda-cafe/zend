<?php
require_once 'Zend/Controller/Action.php';

class HelperController extends Zend_Controller_Action {

	public function indexAction() {
		$this->_helper->viewRenderer->setNoRender();
		$v = $this->_helper->version();
		$this->getResponse()->setBody($v);
	}
}
