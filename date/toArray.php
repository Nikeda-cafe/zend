<?php
require_once 'Zend/Date.php';

$dat = new Zend_Date('2008/08/05 10:25:31');
print_r($dat->toArray());
