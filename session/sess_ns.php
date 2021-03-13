<?php
require_once 'Zend/Session.php';

$sess1 = new Zend_Session_Namespace('MyNs1');
$sess1->name = 'トクジロウ';
$sess1->sex = 'オス';

$sess2 = new Zend_Session_Namespace('MyNs2');
$sess2->name = 'サチ';
$sess2->sex = 'メス';

print('MyNs1名前空間：'.$sess1->name.'<br />');
print('MyNs2名前空間：'.$sess2->name.'<br />');

//print_r($_SESSION);