<?php
require_once 'Zend/Controller/Action.php';
require_once 'Zend/View.php';

class IndexController extends Zend_Controller_Action {
	public function indexAction() {
		$this->view->result = 'こんにちは、Zend Framework！';
		/*
		$v = new Zend_View();
		$v->setScriptPath(APP.'/views/scripts/index');
		$v->result = 'こんにちは、Zend Framework！';
		$res = $this->getResponse();
		$res->appendBody($v->render('index.phtml'));
		*/
	}

	public function exAction()
	{
		//Zend_Registry::get('siteName');
		$data['title'] = 'fnvd';
		$data['h1'] = 'sampleです';
		$this->view->result = $data;
		
	}

	public function postAction()
	{
		// getRequestでリクエストオブジェクト取得
		$request = $this->getRequest();
		
		if(!$request->isPost()){
			$this->_forward('index','index');
		}else{
			$data['name'] = $request->getPost('name');
			$data['server'] = $request->getServer();
			$this->view->result = $data;
		}
	}

	public function throwAction() {
		throw new Exception('例外が発生しました！！');
	}
}
