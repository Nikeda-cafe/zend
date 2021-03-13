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
		Zend_Filter_Input::PRESENCE => Zend_Filter_Input::PRESENCE_REQUIRED
	)
);

$options = array(
	Zend_Filter_Input::MISSING_MESSAGE => '%field%は必須です。'
);

$in = new Zend_Filter_Input($filters, $valids, $data, $options);
if(!$in->isValid()) {
	print_r($in->getMissing());
}
