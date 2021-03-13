<?php
require_once 'Zend/Pdf.php';

$pdf = new Zend_Pdf();
$pdf->properties['Title'] = 'Zend_Pdf Samples';
$pdf->properties['Author'] = 'YAMADA, Yoshihiro';
$pdf->pages[] = new Zend_Pdf_Page(Zend_Pdf_Page::SIZE_A4);
//$pdf->pages[] = new Zend_Pdf_Page(595, 842);
$font = Zend_Pdf_Font::fontWithPath('C:/php/includes/fonts/ipag.ttf');
//$font = Zend_Pdf_Font::fontWithPath('C:/php/includes/fonts/ipag.ttf',Zend_Pdf_Font::EMBED_DONT_EMBED);
$pdf->pages[0]->setFont($font, 36);
$pdf->pages[0]->drawText('こんにちは、みなさん！', 100, 550, 'UTF-8');
header('Content-Type: application/pdf');
print($pdf->render());
//$pdf->save('basic.pdf');