<?php
require_once 'Zend/Config/Ini.php';

$ini = new Zend_Config_Ini('config.ini' ,'debug');
//$ini = new Zend_Config_Ini('config.ini', array('debug', 'other'));
/*
$ini = new Zend_Config_Ini('config.ini' ,'debug',
	array('allowModifications'=>TRUE));
*/
print($ini->adapter);

/*
$ini = new Zend_Config_Ini('config.ini');
print($ini->debug->adapter);
print($ini->flag);
*/

//unset($ini->adapter);

//$ini->adapter = MySqli;

