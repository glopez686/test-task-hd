<?php

class Task_Controller_Action_Helper_Initializer extends Zend_Controller_Action_Helper_Abstract {

    public function init() {

        // Initialize the errors array
        Zend_Layout::getMvcInstance()->getView()->errors = array();

        // Is the user logged in?
        $auth = Zend_Auth::getInstance();
        if ($auth->hasIdentity()) {
            $identity = $auth->getIdentity();
            if (isset($identity)) {
                Zend_Layout::getMvcInstance()->getView()->account = $identity->email;
            }
        }
    }

}
