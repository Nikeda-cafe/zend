<?php
require_once 'Zend/Measure/Length.php';

$len = new Zend_Measure_Length(50, Zend_Measure_Length::METER);
print_r($len->getConversionList());
