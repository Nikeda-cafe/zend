<?php
require_once 'Zend/Translate.php';

$trans = new Zend_Translate(Zend_Translate::AN_TMX, './lang_tmx/data.tmx');
$trans->setLocale('auto');

print($trans->_('morning').'<br />');
print($trans->_('afternoon').'<br />');
print($trans->_('night').'<br />');
printf($trans->_('now'), date('H:i:s'));
