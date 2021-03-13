<?php
require_once 'Zend/Controller/Action.php';

class Usr_IndexController extends Zend_Controller_Action {
	public function indexAction() {
		$req = $this->getRequest();
		$this->view->module = $req->getModuleName();
		$this->view->ctrl = $req->getControllerName();
		$this->view->action = $req->getActionName();
	}
}
