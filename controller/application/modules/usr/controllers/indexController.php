<?php 

class Usr_IndexController extends Zend_Controller_Action
{
    public function indexAction()
    {
        $request = $this->getRequest();

        $this->view->module = $request->getModuleName();
        $this->view->ctrl = $request->getControllerName();
        $this->view->action = $request->getActionName();
    }
}