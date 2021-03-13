<?php
require_once 'Zend/Controller/Action.php';

class SmartyController extends Zend_Controller_Action {
	public function indexAction() {
		$this->view->result = 'こんにちは、Zend_View_Smartyクラス！';
	}

	public function simpleAction() {
		$this->_helper->viewRenderer->setNoRender();
		require_once 'Smarty/Smarty.class.php';
		$s = new Smarty();
		$s->template_dir  = APP.'/smarty/templates/';
		$s->compile_dir   = APP.'/smarty/templates_c/';
		$s->assign('result', 'こんにちは、Smarty！');
		$s->display('default/smarty/index.tpl');
	}

	public function layoutAction() {
		$this->view->result = 'こんにちは、Zend_Layout！';
	}
}
