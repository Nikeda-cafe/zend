<?php
require_once 'Zend/Filter/Input.php';
require_once 'Zend/Filter/StringToUpper.php';

$data = array(
	'isbn' => '978-4-7980-2004-4a',
	'title' => '<Zend Framework> Master book',
	'price' => '5000',
	'published' => '2008-09-18'
);

$filters = array(
	'*' => 'StringTrim',
	'isbn'=> 'StringToUpper'
	//'isbn'=> new Zend_Filter_StringToUpper()
);

$valids = array(
	'isbn' => array(
		array('Regex', '/^[0-9]{3}-[0-9]{1}-[0-9]{4,5}-[0-9]{3,4}-[0-9A-Z]{1}$/i')
	),
	'title' => array(
		array('StringLength', 1, 100)
	),
	'price' => array(
		'Int',
		array('Between', 0, 10000)
	),
);

$in = new Zend_Filter_Input($filters, $valids, $data);
if($in->isValid()) {
	print('入力値はすべて問題ありません。');
} else {
	print('エスケープ済の値：<br />');
	print_r($in->getEscaped());
	print('<br />エスケープ前の値：<br />');
	print_r($in->getUnescaped());
	print('<br />未知のフィールド：<br />');
	print_r($in->getUnknown());
	print('<br />無効／存在しないフィールド：<br />');
	print_r($in->getMessages());
	print('<br />エラー情報：<br />');
	print_r($in->getErrors());
}
