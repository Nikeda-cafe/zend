<?php
require_once 'Zend/Log.php';
require_once 'Zend/Log/Writer/Stream.php';
require_once 'Zend/Log/Formatter/Simple.php';

$writer = new Zend_Log_Writer_Stream('my.log');
$format = new Zend_Log_Formatter_Simple('%timestamp%［%priorityName%］%message% *** %agent%'.PHP_EOL);
$writer->setFormatter($format);
$o_log = new Zend_Log($writer);
$o_log->setEventItem('agent', $_SERVER['HTTP_USER_AGENT']);
$o_log->log('緊急', Zend_Log::EMERG);
$o_log->log('至急対応', Zend_Log::ALERT);
