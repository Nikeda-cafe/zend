<?php
require_once 'Zend/Controller/Plugin/Abstract.php';
require_once 'Zend/Auth.php';

class AuthPlugin extends Zend_Controller_Plugin_Abstract {
	public function dispatchLoopStartup($req) {
		$auth = Zend_Auth::getInstance();
		if (!$auth->hasIdentity()) {
			if($req->getModuleName() != 'default' || 
				$req->getControllerName() != 'auth' || 
				$req->getActionName() != 'process') {
				$sess = new Zend_Session_Namespace('myApp');
				$sess->currentModule  = $req->getModuleName();
				$sess->currentController  = $req->getControllerName();
				$sess->currentAction  = $req->getActionName();
				$req->setModuleName('default');
				$req->setControllerName('auth');
				$req->setActionName('index');
			}
		}
	}
}
