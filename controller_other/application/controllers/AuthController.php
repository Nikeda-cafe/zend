<?php
require_once 'Zend/Auth.php';
require_once 'Zend/Auth/Adapter/DbTable.php';
require_once 'Zend/Controller/Action.php';
require_once 'Zend/Session/Namespace.php';
require_once '../db/DbManager.class.php';

class AuthController extends Zend_Controller_Action{
	public function indexAction(){ }

	public function processAction(){
		$req = $this->getRequest();
		$db = DbManager::getConnection();
		$a_db = new Zend_Auth_Adapter_DbTable($db, 'user', 'uid', 'passwd', 'md5(?)');
		$a_db->setIdentity($req->getPost('uid'))
			->setCredential($req->getPost('passwd'));
		$auth = Zend_Auth::getInstance();
		$result = $auth->authenticate($a_db);
		if($result->isValid()) {
			$auth->getStorage()->write($a_db->getResultRowObject(NULL, 'passwd'));
			$sess = new Zend_Session_Namespace('myApp');
			$action = $sess->currentAction;
			$controller = $sess->currentController;
			$module = $sess->currentModule;
			$sess->currentAction = NULL;
			$sess->currentController = NULL;
			$sess->currentModule = NULL;
			$this->_redirect($module.'/'.$controller.'/'.$action);
		} else {
			$res = $this->getResponse();
			$res->appendBody('<div style="color:Red">認証に失敗しました。</div>');
			$this->_forward('index', 'auth');
		}
	}

	public function logoutAction() {
		Zend_Auth::getInstance()->clearIdentity();
		$this->_redirect('/index/index');
	}
}
