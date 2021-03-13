<?php
require_once 'Zend/Controller/Action.php';
require_once 'Zend/Controller/Plugin/ErrorHandler.php';

class ErrorController extends Zend_Controller_Action {
	public function errorAction() {
		$errs = $this->_getParam('error_handler');
		switch($errs->type) {
			case Zend_Controller_Plugin_ErrorHandler::EXCEPTION_NO_CONTROLLER :
			case Zend_Controller_Plugin_ErrorHandler::EXCEPTION_NO_ACTION :
				//$this->_redirect('/index/index');
				//$this->_forward('index', 'index');
				$this->view->msg = '存在しないコントローラ／アクションです。';
				break;
			default :
				$this->view->msg = $errs->exception->getMessage();
				break;
		}
	}
}
