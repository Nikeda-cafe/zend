<?php
require_once 'Zend/Validate/Abstract.php';
require_once 'Zend/Uri.php';

class My_Validate_Uri extends Zend_Validate_Abstract {
	const URI = 'uri';
	protected $_messageTemplates = array(
		self::URI => "'%value%' は正しいURI文字列ではありません。"
	);

	public function isValid($value) {
		$this->_setValue($value);
		if(!Zend_Uri::check($value)) {
			$this->_error(self::URI);
			return FALSE;
		}
		return TRUE;
	}
}
