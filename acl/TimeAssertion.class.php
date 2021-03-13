<?php
require_once 'Zend/Acl/Assert/Interface.php';

class TimeAssertion implements Zend_Acl_Assert_Interface {
	public function assert(Zend_Acl $acl, Zend_Acl_Role_Interface $role = NULL,
		Zend_Acl_Resource_Interface $resource = NULL, $privilege = NULL) {
		$hour = date('H');
		return ($hour >=9 && $hour <=17);
	}
}
