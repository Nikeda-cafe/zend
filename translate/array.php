<?php
require_once 'Zend/Translate.php';

$en = array(
  'morning' => 'Good Morning',
  'afternoon' => 'Hello',
  'night' => 'Good Night',
  'now' => 'It is %1$s now'
);
$de = array(
  'morning' => 'Guten Morgen',
  'afternoon' => 'Guten Tag',
  'night' => 'Gute Nacht',
  'now' => 'Es ist jetzt %1$s'
);
$ja = array(
  'morning' => 'おはようございます',
  'afternoon' => 'こんにちは',
  'night' => 'おやすみなさい',
  'now' => '現在時刻は %1$s です'
);

$trans = new Zend_Translate(Zend_Translate::AN_ARRAY, $en, 'en');
$trans->addTranslation($de, 'de');
$trans->addTranslation($ja, 'ja');

/*$trans = new Zend_Translate(Zend_Translate::AN_ARRAY,
	'./lang_array/data_en.php', 'en');
$trans->addTranslation('./lang_array/data_de.php', 'de');
$trans->addTranslation('./lang_array/data_ja.php', 'ja');
*/

$trans->setLocale('auto');

print($trans->_('morning').'<br />');
print($trans->_('afternoon').'<br />');
print($trans->_('night').'<br />');
printf($trans->_('now'), date('H:i:s'));


