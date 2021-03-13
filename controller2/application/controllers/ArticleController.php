<?php
require_once 'Zend/Controller/Action.php';

class ArticleController extends Zend_Controller_Action {
	public function indexAction() {
		$this->_helper->viewRenderer->setNoRender();
		$req = $this->getRequest();
		$aid = $req->getUserParam('aid');
		$res = $this->getResponse();
		$res->setBody('記事番号：'.$aid);
	}
}
