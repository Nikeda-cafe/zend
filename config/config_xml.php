<?php
require_once 'Zend/Config/Xml.php';

$xml = new Zend_Config_Xml('config.xml' ,'debug', FALSE);
print($xml->adapter);
