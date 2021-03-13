<?php
require_once 'Zend/Mail.php';
require_once 'Zend/Mail/Transport/Smtp.php';

function c($str) { return mb_convert_encoding($str, 'ISO-2022-JP', 'UTF-8'); }

$smtp = new Zend_Mail_Transport_Smtp('smtp.xxxxx.ne.jp');
/*
$smtp = new Zend_Mail_Transport_Smtp('smtp.xxxxx.ne.jp',
  array(
    'auth'     => 'login',
    'username' => 'myusr',
    'password' => '12345'
  )
);
*/
Zend_Mail::setDefaultTransport($smtp);
$mail = new Zend_Mail('ISO-2022-JP');
$mail->addTo('CQW15204@nifty.com', c('山田祥寛'));
$mail->addBcc('toku@wings.msn.to', c('トクジロウ'));
$mail->setFrom('CQW15204@nifty.ne.jp', c('WINGSプロジェクト'));
$mail->setSubject(c('テストメール'));
$mail->setBodyText(c('こんにちは、Zend_Mailです。'));
$mail->send();

print('メール送信が完了しました。');