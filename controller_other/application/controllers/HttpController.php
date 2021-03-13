<?php
require_once 'Zend/Controller/Action.php';
require_once 'Zend/Auth/Adapter/Http.php';
require_once 'Zend/Auth/Adapter/Http/Resolver/File.php';

class HttpController extends Zend_Controller_Action {
	public function indexAction() {
		$this->_helper->viewRenderer->setNoRender();
		$auth = Zend_Auth::getInstance();
		if(!$auth->hasIdentity()){
			$req = $this->getRequest();
			$res = $this->getResponse();
			$resolver = new Zend_Auth_Adapter_Http_Resolver_File(APP.'/http.txt');
			$adapter = new Zend_Auth_Adapter_Http(
				array(
					'accept_schemes' => 'basic',
					'realm' => 'MyAuth'
				)
			);
			$adapter->setBasicResolver($resolver);
			$adapter->setRequest($req);
			$adapter->setResponse($res);

			$result = $auth->authenticate($adapter);
			if (!$result->isValid()) {
				foreach ($result->getMessages() as $message) {
					$res->appendBody($message.'<br />');
				}
			} else {
				$data = $auth->getIdentity();
				$res->setBody('認証に成功しました：'.$data['username']);
			}
		} else {
				$data = $auth->getIdentity();
				print('認証済みです：'.$data['username']);
		}
	}
}