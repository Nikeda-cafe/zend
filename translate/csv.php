<?php
require_once 'Zend/Translate.php';

$trans = new Zend_Translate(Zend_Translate::AN_CSV,
	'./lang_csv/data_en.csv', 'en');
$trans->addTranslation('./lang_csv/data_de.csv', 'de');
$trans->addTranslation('./lang_csv/data_ja.csv', 'ja');
$trans->setLocale('auto');

print($trans->_('morning').'<br />');
print($trans->_('afternoon').'<br />');
print($trans->_('night').'<br />');
printf($trans->_('now'), date('H:i:s'));
