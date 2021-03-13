<?php
require_once APP.'/DbManager.class.php';
require_once 'Zend/Controller/Action/Helper/Abstract.php';

class My_Action_Helper_MetaInfo extends Zend_Controller_Action_Helper_Abstract {
	public function preDispatch() {
		$req = $this->getRequest();
		$action = $this->getActionController();
		$db = DbManager::getConnection();
		$stt = $db->prepare('SELECT * FROM metadata WHERE module=:module AND controller=:controller AND action=:action');
		$stt->bindValue(':module', $req->getModuleName());
		$stt->bindValue(':controller', $req->getControllerName());
		$stt->bindValue(':action', $req->getActionName());
		$stt->execute();
		if(($row = $stt->fetch()) !== FALSE) {
			$action->view->title = $row['title'];
			$action->view->keywd = $row['keywords'];
			$action->view->descript = $row['description'];
		} else {
			$action->view->title = 'Zend Framework徹底入門';
			$action->view->keywd = 'Zend Framework';
			$action->view->descript = 'Zend Frameworkのサンプルです。';
		}
	}
}
