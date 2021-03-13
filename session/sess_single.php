<?php
require_once 'Zend/Session/Namespace.php';

$sess1 = new Zend_Session_Namespace('MyNs1', TRUE);
$sess2 = new Zend_Session_Namespace('MyNs1');
