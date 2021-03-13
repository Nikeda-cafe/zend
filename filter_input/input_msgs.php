<?php
require_once 'Zend/Filter/Input.php';
require_once 'Zend/Validate/Between.php';
require_once 'MyMsg.class.php';

$data = array(
	'price' => '115000.1111'
);

$filters = array(
	'*' => 'StringTrim'
);

$valids = array(
	'price' => array(
		'Int',
		array('Between', 0, 10000),
		Zend_Filter_Input::MESSAGES => array(
			//'"%value%"は整数値ではありません。',
			MyMsg::INT,
			//'"%value%"は%min%～%max%の範囲である必要があります。'
			array(
				Zend_Validate_Between::NOT_BETWEEN => '"%value%"は%min%～%max%の範囲である必要があります。',
				Zend_Validate_Between::NOT_BETWEEN_STRICT => '"%value%"は%min%～%max%の範囲である必要があります（境界値は含まない）。'
			)
		)
	)
);

$in = new Zend_Filter_Input($filters, $valids, $data);
if(!$in->isValid()) {
	print_r($in->getInvalid());
}
