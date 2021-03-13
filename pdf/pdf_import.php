<?php
require_once 'Zend/Pdf.php';

$pdf = Zend_Pdf::load('template.pdf');
$font = Zend_Pdf_Font::fontWithPath('C:/php/includes/fonts/ipag.ttf');
$pdf->pages[0]->setFont($font, 36);
$pdf->pages[0]->drawText('こんにちは、みなさん！', 100, 500, 'UTF-8');
header('Content-Type: application/pdf');
print($pdf->render());