<?php
require_once 'Zend/Controller/Plugin/Abstract.php';

class StopPlugin extends Zend_Controller_Plugin_Abstract {
	public function dispatchLoopStartup($req) {
		$req->setModuleName('default');
		$req->setControllerName('stop');
		$req->setActionName('stop');
	}
}
