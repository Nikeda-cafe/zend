<?php
require_once 'Zend/Filter/Interface.php';

class My_Filter_Uri implements Zend_Filter_Interface {
	protected $_pattern;

	public function __construct($pattern = NULL) {
		if($pattern == NULL) {
			$pattern = '[[:alpha:]]+://[^<>[:space:]]+[[:alnum:]/]';
		}
		$this->_pattern = $pattern;
	}

	public function filter($value) {
		if(eregi($this->_pattern, $value, $ary)) {
			return $ary[0];
		}
		return '';
	}
}