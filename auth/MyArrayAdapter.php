<?php
require_once 'Zend/Auth/Adapter/Interface.php';
require_once 'Zend/Auth/Result.php';

class MyArrayAdapter implements Zend_Auth_Adapter_Interface {

	private $_uid;
	private $_passwd;
	private $_data;

	public function __construct($uid, $passwd, $data) {
		$this->_uid = $uid;
		$this->_passwd = $passwd;
		$this->_data = $data;
	}

	public function authenticate() {
		if(array_key_exists($this->_uid, $this->_data)) {
			if($this->_data[$this->_uid] == md5($this->_passwd)) {
				return new Zend_Auth_Result(
					Zend_Auth_Result::SUCCESS,
					$this->_uid,
					array('Success.')
				);
			} else {
				return new Zend_Auth_Result(
					Zend_Auth_Result:: FAILURE_CREDENTIAL_INVALID,
					$this->_uid,
					array('Credential is invalid.')
				);
			}
		} else {
			return new Zend_Auth_Result(
				Zend_Auth_Result::FAILURE_IDENTITY_NOT_FOUND,
				$this->_uid,
				array('User is not existed.')
			);
		}
	}
}
