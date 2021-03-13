<?php
require_once 'Zend/Filter/Input.php';
require_once 'Zend/Validate.php';
require_once 'Zend/Validate/NotEmpty.php';
require_once 'Zend/Validate/StringLength.php';
require_once 'Zend/Validate/EmailAddress.php';

$data = array(
	'email' => ''
);

$filters = array(
	'*' => 'StringTrim'
);

$valids = array(
	'email' => array(
		'NotEmpty',
		array('StringLength', 5, 100),
		'EmailAddress',
		Zend_Filter_Input::BREAK_CHAIN => FALSE
	)
);

/*
$chain = new Zend_Validate();
$chain->addValidator(new Zend_Validate_NotEmpty(), TRUE)
	->addValidator(new Zend_Validate_StringLength(5, 100), FALSE)
	->addValidator(new Zend_Validate_EmailAddress(), FALSE);
$valids = array(
	'email' => $chain
);
*/

$in = new Zend_Filter_Input($filters, $valids, $data);
if(!$in->isValid()) {
	print_r($in->getMessages());
}
