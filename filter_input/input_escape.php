<?php
require_once 'Zend/Filter/Input.php';

$data = array(
	'title' => '<Zend Framework徹底入門>'
);

$filters = array(
	'*' => 'StringTrim'
);

$valids = array(
	'title' => array(
		array('StringLength', 1, 100)
	)
);

$options = array(
	Zend_Filter_Input::ESCAPE_FILTER => array('HtmlEntities', ENT_QUOTES, 'UTF-8')
);

$in = new Zend_Filter_Input($filters, $valids, $data, $options);
if($in->isValid()) {
	print_r($in->getEscaped());
}
