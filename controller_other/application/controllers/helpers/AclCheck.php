<?php
require_once 'Zend/Acl.php';
require_once 'Zend/Acl/Role.php';
require_once 'Zend/Acl/Resource.php';
require_once 'Zend/Auth.php';
require_once 'Zend/Controller/Action/Helper/Abstract.php';

class My_Action_Helper_AclCheck extends Zend_Controller_Action_Helper_Abstract {
	private $_acl;

	public function __construct() {
		$this->_acl = new Zend_Acl();
		$this->_acl->addRole(new Zend_Acl_Role('Guest'));
		$this->_acl->addRole(new Zend_Acl_Role('Member'),'Guest');
		$this->_acl->addRole(new Zend_Acl_Role('Administrator'),'Member');
		$this->_acl->addRole(new Zend_Acl_Role('SuperAdministrator'),'Administrator');

		$this->_acl->add(new Zend_Acl_Resource('Common'));
		$this->_acl->add(new Zend_Acl_Resource('Management'));

		$this->_acl->allow('Guest', 'Common', 'Read');
		$this->_acl->allow('Member', 'Common', 'Update');
		$this->_acl->allow('Administrator', 'Common', array('Create','Delete'));
		$this->_acl->allow('SuperAdministrator', 'Management', array('Read', 'Update', 'Create','Delete'));
	}

	public function check($resource, $priv) {
		$auth = Zend_Auth::getInstance();
		$roles = explode(',', $auth->getIdentity()->roles);
		$flag = FALSE;
		for($i = 0; $i < count($roles); $i++) {
			$role = trim($roles[$i]);
			if($this->_acl->isAllowed($role, $resource, $priv)) { $flag =TRUE; }
		}
		if(!$flag){
			$res = $this->getResponse();
			$res->setHttpResponseCode(403);
			$res->setBody('アクセスが拒否されました。');
			$res->sendResponse();
			exit();
		}
		return;
	}

	public function direct($resource, $priv) {
		return $this->check($resource, $priv);
	}
}
