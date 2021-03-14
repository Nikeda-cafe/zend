<?php 

require_once 'Zend/Controller/Action.php';

class Usr_IndexController extends Zend_Controller_Action
{
    public function init()
    {
        $context = $this->_helper->ContextSwitch;
        $context
        ->addActionContext('index',array('xml','json'))
        ->initContext();
        
    }
    public function indexAction()
    {
        $this->view->message = 'switchContextHelper';
        // $request = $this->getRequest();
        // $this->view->params = $request->getQuery();
        // $this->view->userParams = $request->getUserParam('key'); 
        // $this->view->module = $request->getModuleName();
        // $this->view->ctrl = $request->getControllerName();
        // $this->view->action = $request->getActionName();
    }
}