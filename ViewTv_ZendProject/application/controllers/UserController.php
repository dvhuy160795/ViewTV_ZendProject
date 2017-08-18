<?php

class UserController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $formLogin = new Application_Form_UserLogin();
        $this->view->form = $formLogin;
    }


}

