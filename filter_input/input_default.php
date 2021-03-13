<?php
require_once 'Zend/Filter/Input.php';

$data = array();

$filters = array(
	'*' => 'StringTrim'
);

$valids = array(
	'price' => array(
		'Int',
		array('Between', 0, 10000),
		Zend_Filter_Input::DEFAULT_VALUE => 0,
		Zend_Filter_Input::PRESENCE => Zend_Filter_Input::PRESENCE_REQUIRED
	)
);

$in = new Zend_Filter_Input($filters, $valids, $data);
if($in->isValid()) {
	print_r($in->getEscaped());
}
