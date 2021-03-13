<?php
require_once 'Zend/Controller/Action.php';
require_once 'Zend/Controller/Action/HelperBroker.php';
require_once 'Zend/Controller/Front.php';
require_once 'Zend/View/Interface.php';

class TextController extends Zend_Controller_Action {

	public function init() {
		$context = $this->_helper->ContextSwitch;
		$context->addContext('text',
								array(
									'suffix' => 'txt',
									'headers' => array(
										'Context-type' => 'text/plain; charset=UTF-8'),
									'callbacks' => array(
										'init' => 'initTextContext',
										'post' => 'postTextContext'
									)
								)
							)
						->addActionContext('index', array('json', 'text'))
						->initContext();
	}

	public function indexAction() {
		$this->view->message = 'こんにちは、SwitchContextヘルパー！';
	}
}

function initTextContext() {
	$renderer = Zend_Controller_Action_HelperBroker::getStaticHelper('viewRenderer');
	$view = $renderer->view;
	if ($view instanceof Zend_View_Interface) {
		$renderer->setNoRender(TRUE);
	}
}

function postTextContext() {
	$renderer = Zend_Controller_Action_HelperBroker::getStaticHelper('viewRenderer');
	$view = $renderer->view;
	if ($view instanceof Zend_View_Interface) {
		$vars = $view->getVars();
		$front = Zend_Controller_Front::getInstance();
		$front->getResponse()->setBody(var_export($vars, TRUE));
	}
}