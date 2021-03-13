<?php
require_once 'Zend/Translate.php';

$trans = new Zend_Translate(Zend_Translate::AN_GETTEXT,
	'./lang_gettext/data_en.mo', 'en');
$trans->addTranslation('./lang_gettext/data_de.mo', 'de');
$trans->addTranslation('./lang_gettext/data_ja.mo', 'ja');
$trans->setLocale('auto');

print($trans->_('morning').'<br />');
print($trans->_('afternoon').'<br />');
print($trans->_('night').'<br />');
printf($trans->_('now'), date('H:i:s'));
