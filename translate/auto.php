<?php
require_once 'Zend/Translate.php';

$trans = new Zend_Translate('array', './lang_array', NULL,
	array(
		'scan' => Zend_Translate::LOCALE_FILENAME
	)
);
$trans->setLocale('auto');

print($trans->_('morning').'<br />');
print($trans->_('afternoon').'<br />');
print($trans->_('night').'<br />');
printf($trans->_('now'), date('H:i:s'));
