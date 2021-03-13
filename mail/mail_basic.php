<?php
require_once 'Zend/Mail.php';

function c($str) { return mb_convert_encoding($str, 'ISO-2022-JP', 'UTF-8'); }

$mail = new Zend_Mail('ISO-2022-JP');
$mail->addTo('CQW15204@nifty.com', c('山田祥寛'));
$mail->addCc('namidon@mbh.nifty.com', c('掛谷奈美'));
$mail->setFrom('CQW15204@nifty.ne.jp', c('WINGSプロジェクト'));
$mail->setSubject(c('テストメール'));
$mail->setBodyText(c('こんにちは、Zend_Mailです。'));
$mail->send();

print('メール送信が完了しました。');