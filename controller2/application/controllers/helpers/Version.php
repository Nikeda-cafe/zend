<?php
require_once 'Zend/Controller/Action/Helper/Abstract.php';
require_once 'Zend/Version.php';

class My_Action_Helper_Version extends Zend_Controller_Action_Helper_Abstract {
	public function getVersion() {
		return Zend_Version::VERSION;
	}

	public function direct() {
		return $this->getVersion();
	}
}
