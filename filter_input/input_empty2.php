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
		Zend_Filter_Input::ALLOW_EMPTY => FALSE
		//Zend_Filter_Input::ALLOW_EMPTY => TRUE,
		//Zend_Filter_Input::PRESENCE => Zend_Filter_Input::PRESENCE_REQUIRED
	)
);

$options = array(
	Zend_Filter_Input::NOT_EMPTY_MESSAGE => '%field%は空文字列を許可しません。'
);

$in = new Zend_Filter_Input($filters, $valids, $data, $options);
if($in->isValid()) {
	print('検証に成功しました。<br />');
} else {
	print_r($in->getInvalid());
}
