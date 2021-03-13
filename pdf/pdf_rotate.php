<?php
require_once 'Zend/Pdf.php';

$pdf = new Zend_Pdf();
$pdf->pages[] = new Zend_Pdf_Page(Zend_Pdf_Page::SIZE_A4);
$p1 = $pdf->pages[0];

$p1->rotate(400, 500, M_PI / 8);
$img = Zend_Pdf_Image::imageWithPath('book.png');
$p1->drawImage($img, 100, 600, 250, 800);

header('Content-Type: application/pdf');
print($pdf->render());