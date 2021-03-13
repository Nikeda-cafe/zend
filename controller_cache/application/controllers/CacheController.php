<?php
require_once 'Zend/Controller/Action.php';

class CacheController extends Zend_Controller_Action{
	public function init() {
		$this->_helper->viewRenderer->setNoRender();
	}

	public function index1Action() {
		$res = $this->getResponse();
		$res->setBody('クエリ情報categoryの値：');
		$res->appendBody($this->getRequest()->getQuery('category'));
	}

	public function index2Action() {
		$res = $this->getResponse();
		$res->setBody('クエリ情報categoryの値：');
		$res->appendBody($this->getRequest()->getQuery('category'));
	}

	public function index3Action() {
		$res = $this->getResponse();
		$res->setBody('クエリ情報categoryの値：');
		$res->appendBody($this->getRequest()->getQuery('category'));
	}
}