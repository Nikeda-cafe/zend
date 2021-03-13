<?php
require_once 'Zend/Controller/Action.php';
require_once 'Zend/Config/Ini.php';

class Init2Controller extends Zend_Controller_Action {
	private $_config = NULL;

	public function init() {
		$this->_config = new Zend_Config_Ini('../config/config.ini' ,'debug');
	}

	public function indexAction() {
		$this->_helper->viewRenderer->setNoRender();
		$res = $this->getResponse();
		$res->setBody($this->_config->adapter);
	}
}
