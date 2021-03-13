<?php
require_once 'Zend/Filter/Input.php';

$data = array(
	'url' => 'CQW15204@nifty.com'
);

$filters = array(
	'url' => 'StringTrim'
);

$valids = array(
	'url' => 'Uri'
);

$options = array(
	Zend_Filter_Input::INPUT_NAMESPACE => 'My_Validate'
);

$in = new Zend_Filter_Input($filters, $valids, $data, $options);
if(!$in->isValid()) {
	print_r($in->getMessages());
}
