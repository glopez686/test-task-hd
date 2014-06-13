<?php

/**
 * Application BootStrap
 *
 * @author          Guillermo Lopez
 * @param           void
 * @return           void
 *
 */
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap {
    
/**
     * Initialisation of Routes
     *
     * @author          Guillermo Lopez
     * @param           void
     * @return           void
     *
     */
    public function _initRoutes() {

        $router = Zend_Controller_Front::getInstance()->getRouter();
        $route = New Zend_Controller_Router_Route_Static(
                'login', array('controller' => 'Account', 'action' => 'login')
        );

        $router->addRoute('login', $route);
    }

    /**
     * Initialisation method for Global Variables
     *
     * @author          Guillermo Lopez
     * @param           void
     * @return           void
     *
     */
    protected function _initGlobalVars() {
        Zend_Controller_Action_HelperBroker::addPath(APPLICATION_PATH . '/../library/Task/Controller/Action/Helper');

        $LoginRequired = Zend_Controller_Action_HelperBroker::addHelper(
                        new Task_Controller_Action_Helper_LoginRequired());
        $initializer = Zend_Controller_Action_HelperBroker::addHelper(
                        new Task_Controller_Action_Helper_Initializer());
    }

    /**
     * Initialisation method for Sessions
     *
     * @author          Guillermo Lopez
     * @param           void
     * @return           void
     *
     */
    public function _initCoreSession() {
        $this->bootstrap('db');
        $this->bootstrap('session');
        Zend_Session::start();
    }

    /**
     * Initialisation method flash messages
     *
     * @author          Guillermo Lopez
     * @param           void
     * @return           void
     *
     */
    protected function _initMsg() {
        $msg = new Zend_Config_Ini(APPLICATION_PATH . '/configs/messages.ini');
        Zend_Registry::set('msg', $msg);
    }

}
