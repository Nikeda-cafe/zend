<?php
require_once 'Zend/Mail.php';

function c($str) { return mb_convert_encoding($str, 'ISO-2022-JP', 'UTF-8'); }

$mail = new Zend_Mail('ISO-2022-JP');
$mail->addTo('CQW15204@nifty.com', c('山田祥寛'));
$mail->addCc('namidon@mbh.nifty.com', c('掛谷奈美'));
$mail->addHeader('X-Mailer', 'Zend_Mail');
$mail->setFrom('CQW15204@nifty.ne.jp', c('WINGSプロジェクト'));
$mail->setSubject(c('テストメール'));
$mail->setBodyHtml(c('<h1>こんにちは、Zend_Mailです。</h1>'));
$attach = $mail->createAttachment(file_get_contents('./toku.jpg'));
$attach->filename = c('トクジロウ.jpg');
$attach->type = 'image/jpeg';
$mail->send();

print('メール送信が完了しました。');