<?php

class Application_Form_UserLogin extends Zend_Form
{

    public function init()
    {
        $formLoginUserName = new Zend_Form_Element_Text('user_username');
        $formLoginUserName->setLabel('User Name');

        $formLoginUserPass = new Zend_Form_Element_Text('user_userpass');
        $formLoginUserPass->setLabel('User Name');

        $formLoginSubmit = new Zend_Form_Element_Submit('submit');
        $formLoginSubmit->setLabel('Login');

        $this->addElements([$formLoginUserName,$formLoginUserPass,$formLoginSubmit]);
    }


}

