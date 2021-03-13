<?php
require_once 'Zend/Session.php';

$sess = new Zend_Session_Namespace('MyNs1');
$sess->name = 'トクジロウ';
$sess->lock();

if(!$sess->isLocked()) { $sess->name = 'ニンザブロウ'; }
//$sess->name = 'ニンザブロウ';

print('nameキー：'.$sess->name);