<?php
require_once 'Zend/Filter/Input.php';

$data = array(
	'price' => 'xyz'
);

$filters = array(
	'*' => 'StringTrim'
);

$valids = array(
	'price' => array(
		'Digits',
		array('Between', 100, 10000),
		//Zend_Filter_Input::BREAK_CHAIN => TRUE
	)
);

$in = new Zend_Filter_Input($filters, $valids, $data);
if(!$in->isValid()) {
	print_r($in->getMessages());
}
