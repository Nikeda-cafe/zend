<?php
require_once 'Zend/Controller/Action.php';

class ParamController extends Zend_Controller_Action {
	public function indexAction() {
		$this->_helper->ViewRenderer->setNoRender();
		$res = $this->getResponse();
		$res->setBody($this->getInvokeArg('siteTitle'));

		/*
		$front = Zend_Controller_Front::getInstance();
		$res->setBody($front->getParam('siteTitle'));
		*/
	}
}
