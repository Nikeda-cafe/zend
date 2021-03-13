<?php
require_once 'Zend/Filter/Input.php';

$data = array(
	'start_date' => '2008-12-4',
	'end_date' => '2008-6-25'
);

$filters = array(
	'*' => 'StringTrim'
);

$valids = array(
	's_d_date' => array(
		'Compare',
		Zend_Filter_Input::FIELDS => array('start_date', 'end_date')
	)
);

$options = array(
	Zend_Filter_Input::INPUT_NAMESPACE => 'My_Validate'
);

$in = new Zend_Filter_Input($filters, $valids, $data, $options);
if($in->isValid()) {
print('検証に成功しました。');
	print_r($in->getEscaped());
} else {
	print_r($in->getMessages());
}
