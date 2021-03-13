<?php
require_once 'Zend/Pdf.php';

$pdf = new Zend_Pdf();
$pdf->pages[] = new Zend_Pdf_Page(Zend_Pdf_Page::SIZE_A4);
$font = Zend_Pdf_Font::fontWithPath('C:/php/includes/fonts/ipag.ttf');

$blue = new Zend_Pdf_Color_Html('Blue');
$green = new Zend_Pdf_Color_Html('#008000');
$yellow = new Zend_Pdf_Color_Rgb(1, 1, 0);
$purple = new Zend_Pdf_Color_Cmyk(0.8, 0.8, 0.1, 0);
$gray = new Zend_Pdf_Color_GrayScale(0.8);

$p1 = $pdf->pages[0];

$p1->setFont($font, 18);
$p1->setFillColor($green);
$p1->drawText('こんにちは、みなさん！', 100, 550, 'UTF-8');

$p1->setLineColor($green);
$p1->setLineWidth(1);
//$p1->setLineDashingPattern(array(1, 1));
$p1->setLineDashingPattern(array(5, 5, 2, 2));
//$p1->setLineDashingPattern(Zend_Pdf_Page::LINE_DASHING_SOLID);
$p1->drawLine(300, 700, 500, 750);

$p1->setFillColor($blue);
$p1->drawCircle(400, 425, 50, Zend_Pdf_Page::SHAPE_DRAW_STROKE);
$p1->drawCircle(400, 300, 50, 0, M_PI / 2, Zend_Pdf_Page::SHAPE_DRAW_FILL);

$p1->setFillColor($yellow);
$p1->drawRectangle(300, 500, 450, 650);

$p1->setFillColor($gray);
$p1->drawEllipse(100, 525, 300, 375, M_PI / 2, 7 * M_PI / 4);

$p1->setFillColor($purple);
$p1->drawPolygon(
	array(100, 300, 150, 200, 250), 
	array(300, 300, 150, 350, 150),
	Zend_Pdf_Page::SHAPE_DRAW_FILL, Zend_Pdf_Page:: FILL_METHOD_EVEN_ODD
	//Zend_Pdf_Page::SHAPE_DRAW_FILL, Zend_Pdf_Page:: FILL_METHOD_NON_ZERO_WINDING
);

$img = Zend_Pdf_Image::imageWithPath('book.png');
$p1->drawImage($img, 100, 600, 250, 800);

header('Content-Type: application/pdf');
print($pdf->render());