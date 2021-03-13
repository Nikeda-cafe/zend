<?php
require_once 'Zend/Log.php';
require_once 'Zend/Log/Writer/Stream.php';

class ErrorController extends Zend_Controller_Action {
	public function errorAction() {
		$res = $this->getResponse();
		$writer = new Zend_Log_Writer_Stream(APP.'/log/log.dat');
		$o_log = new Zend_Log($writer);
		$o_log->addFilter(Zend_Log::ERR);
		foreach($res->getException() as $ex) {
			$o_log->log($ex->getMessage()."\t".$ex->getFile(), Zend_Log::ERR);
		}
	}

	public function dummyAction() {
		throw new Exception('アプリケーションで予期せぬ例外が発生しました。');
	}
}
