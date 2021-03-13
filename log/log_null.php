<?php
require_once 'Zend/Log.php';
require_once 'Zend/Log/Writer/Null.php';

$writer = new Zend_Log_Writer_Null();
$o_log = new Zend_Log($writer);
$o_log->log('緊急', Zend_Log::EMERG);
$o_log->log('至急対応', Zend_Log::ALERT);
