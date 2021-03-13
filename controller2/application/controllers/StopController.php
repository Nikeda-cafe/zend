<?php
require_once 'Zend/Controller/Action.php';

class StopController extends Zend_Controller_Action {
	public function stopAction() {
		$this->_helper->viewRenderer->setNoRender();
		$this->getResponse()
			->setBody('現在、このサイトは休止中です。');
	}
}
