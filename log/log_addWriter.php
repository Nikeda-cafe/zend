<?php
require_once 'Zend/Log.php';
require_once 'Zend/Log/Writer/Stream.php';

$stream = new Zend_Log_Writer_Stream('my.log');
$stderr = new Zend_Log_Writer_Stream('php://stderr');
$stderr->addFilter(new Zend_Log_Filter_Priority(Zend_Log::EMERG));
$o_log = new Zend_Log();
$o_log->addWriter($stream);
$o_log->addWriter($stderr);
$o_log->log('緊急', Zend_Log::EMERG);
$o_log->log('至急対応', Zend_Log::ALERT);
$o_log->log('致命的', Zend_Log::CRIT);
$o_log->log('エラー', Zend_Log::ERR);
$o_log->log('警告', Zend_Log::WARN);
$o_log->log('注意', Zend_Log::NOTICE);
$o_log->log('情報', Zend_Log::INFO);
$o_log->log('デバッグ', Zend_Log::DEBUG);
