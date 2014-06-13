<?php

/**
 * Basic Account Controller.
 *
 *
 * @category   Zend
 */

/**
 * Account Controller
 * 
 * Does all the Authentication and Session work.
 *
 *
 * @author        Guillermo Lopez
 *
 */
class AccountController extends Zend_Controller_Action {

    /**
     * Initialisation method
     *
     * @author          Guillermo Lopez
     * @param           void
     * @return           void
     *
     */
    public function init() {
        /* Initialize action controller here */
        if ($this->_helper->FlashMessenger->hasMessages()) {
            $this->view->messages = $this->_helper->FlashMessenger->getMessages();
        }
    }

    /**
     * Index Action
     *
     * @author          Guillermo Lopez
     * @param           void
     * @return           void
     *
     */
    public function indexAction() {
        $this->_helper->LoginRequired();
        $auth = Zend_Auth::getInstance()->getIdentity();

        $authNamespace = new Zend_Session_Namespace('Zend_Auth');
        if (isset($authNamespace->numberOfPageRequests)) {
            // this will increment for each page load.
            $authNamespace->numberOfPageRequests++;
        } else {
            $authNamespace->numberOfPageRequests = 1; // first time
        }
        $this->view->msg = "Page requests this session: " . $authNamespace->numberOfPageRequests;
    }

    /**
     * Login Action
     *
     * @author          Guillermo Lopez
     * @param           void
     * @return           void
     *
     */
    public function loginAction() {
        $form = new Application_Model_FormLogin();
        if ($this->getRequest()->isPost()) {
            if ($form->isValid($this->_request->getPost())) {
                $email = $this->getRequest()->getPost('email');
                $pswd = $this->getRequest()->getPost('pswd');
                $auth = new Application_Model_Authenticate();
                if ($auth->init($email, $pswd)) {
                    $this->view->account = $email;
                    $this->_helper->flashMessenger->addMessage( 
                            Zend_Registry::get('msg')->messages->login->successful);                    
                    return $this->_helper->redirector('index');
                } else {
                    $this->_helper->flashMessenger->addMessage(
                            Zend_Registry::get('msg')->messages->login->failed);
                }
            } else {
                $this->view->errors = $form->getErrors();
            }
        }
        $this->view->form = $form;
    }

    /**
     * Logout Action
     *
     * @author          Guillermo Lopez
     * @param           void
     * @return           void
     *
     */
    public function logoutAction() {
        Zend_Auth::getInstance()->clearIdentity();
        $this->_helper->flashMessenger->addMessage(
                Zend_Registry::get('msg')->messages->logout);
        $this->_helper->redirector('login', 'Account');
    }

}
