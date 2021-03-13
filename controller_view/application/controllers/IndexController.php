<?php
require_once 'Zend/Controller/Action.php';
require_once 'Zend/View.php';

class IndexController extends Zend_Controller_Action {
	public function indexAction() {
		$v = new Zend_View();
		$v->setScriptPath(APP.'/views/scripts');
		//$v->setBasePath(APP.'/views');
		$v->data1 = 'Zend Framework';
		$v->data2 = 'symfony';
		$v->data3 = 'CakePHP';

		/*
		$data = array(
			'data1' => 'Zend Framework',
			'data2' => 'symfony',
			'data3' => 'CakePHP',
		);
		$v->assign($data);
		*/

		/*
		$data = new StdClass();
		$data->data1 = 'Zend Framework';
		$data->data2 = 'symfony';
		$data->data3 = 'CakePHP';
		$v->assign((array)$data);
		*/

		$res = $this->getResponse();
		$res->appendBody($v->render('index.phtml'));
	}
}
