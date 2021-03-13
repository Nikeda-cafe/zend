<?php
require_once 'Zend/Measure/Weight.php';

$weight1 = new Zend_Measure_Weight(1500, Zend_Measure_Weight::GRAM);
$weight2 = new Zend_Measure_Weight(1.5, Zend_Measure_Weight:: KILOGRAM);
$weight3 = new Zend_Measure_Weight(1.2, Zend_Measure_Weight::KILOGRAM);

print('$weight1と$weight2の比較：'.$weight1->compare($weight2).'<br />');
print('$weight1と$weight3の比較：'.$weight1->compare($weight3).'<br />');
print('$weight3と$weight2の比較：'.$weight3->compare($weight2));
