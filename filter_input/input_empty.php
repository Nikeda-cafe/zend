<?php
require_once 'Zend/Filter/Input.php';

$data = array(
	'price' => ''
);

$filters = array(
	'*' => 'StringTrim'
);

$valids = array(
	'price' => array(
		'Int',
		array('Between', 0, 10000),
		//Zend_Filter_Input::ALLOW_EMPTY => TRUE
	)
);

$in = new Zend_Filter_Input($filters, $valids, $data);
if($in->isValid()) {
	print('検証に成功しました。<br />');
} else {
	print_r($in->getMessages());
}
