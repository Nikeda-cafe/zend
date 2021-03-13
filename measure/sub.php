<?php
require_once 'Zend/Measure/Weight.php';

$weight1 = new Zend_Measure_Weight(50, Zend_Measure_Weight::KILOGRAM);
$weight2 = new Zend_Measure_Weight(10, Zend_Measure_Weight::POND);

$weight1->sub($weight2);
print('結果：'.$weight1->toString(1));
