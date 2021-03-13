<?php
require_once 'Zend/Log.php';
require_once 'Zend/Log/Writer/Db.php';
require_once '../db/DbManager.class.php';

$db = DbManager::getConnection();
$writer = new Zend_Log_Writer_Db($db, 'log_table',
	array(
		'logtime' => 'timestamp',
		'level' => 'priority',
		'level_str' => 'priorityName',
		'msg' => 'message',
		//'useragent' => 'agent'
	)
);
$o_log = new Zend_Log($writer);
//$o_log->setEventItem('agent', $_SERVER['HTTP_USER_AGENT']);
$o_log->addFilter(new Zend_Log_Filter_Priority(Zend_Log::WARN));
$o_log->log('緊急', Zend_Log::EMERG);
$o_log->log('至急対応', Zend_Log::ALERT);
