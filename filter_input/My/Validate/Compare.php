<?php
require_once 'Zend/Validate/Abstract.php';
require_once 'Zend/Date.php';

class My_Validate_Compare extends Zend_Validate_Abstract {
	const COMPARE = 'compare';
	protected $_messageTemplates = array(
		self::COMPARE => '前者の値が後者の値よりも大きいです。'
	);

	public function isValid($value) {
		$start = new Zend_Date(current($value));
		$end = new Zend_Date(next($value));
		if($start->compare($end, Zend_Date::DATES) !== -1) {
			$this->_error(self::COMPARE);
			return FALSE;
		}
		return TRUE;
	}
}
