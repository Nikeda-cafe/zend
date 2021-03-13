<?php
require_once 'Zend/Config/Ini.php';
require_once 'Zend/Session.php';

$ini = new Zend_Config_Ini('sess.ini', 'sess');
Zend_Session::setOptions($ini->toArray());
Zend_Session::start();
