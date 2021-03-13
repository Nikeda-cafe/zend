<?php
require_once 'Zend/Controller/Action.php';
require_once 'Zend/Controller/Action/HelperBroker.php';

class UrlController extends Zend_Controller_Action {
	public function indexAction() {
		$this->_helper->viewRenderer->setNoRender();
		$url = $this->_helper->getHelper('Url');
		$link = $url->simple('index', 'metainfo', 'default');

		/*
		$url = $this->_helper->Url;
		$link = $url->simple('index', 'metainfo', 'default');
		*/

		//$link = $this->_helper->Url('index', 'metainfo', 'default');

		/*
		$url = Zend_Controller_Action_HelperBroker::getStaticHelper('Url');
		$link = $url->simple('index', 'metainfo', 'default');
		*/
		$this->getResponse()->setBody($link);
	}
}
