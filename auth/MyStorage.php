<?php
require_once 'Zend/Auth/Storage/Session.php';

class MyStorage extends Zend_Auth_Storage_Session {
	public function __construct($namespace = self::NAMESPACE_DEFAULT, $member = self::MEMBER_DEFAULT) {
		parent::__construct();
		$this->_session->setExpirationSeconds(60);
	}
}