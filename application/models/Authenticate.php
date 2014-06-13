<?php
/**
 * Authenticate Model
 * 
 * Does all the Authentication and Session work.
 *
 *
 * @author        Guillermo Lopez
 * @package       Auth Module
 *
 */
class Application_Model_Authenticate {
    /**
     * Initialisation method
     *
     * @author          Guillermo Lopez
     * @param           void
     * @return           void
     *
     */
    public function init($email, $password) {
        $auth = Zend_Auth::getInstance();

        $db = Zend_Db_Table::getDefaultAdapter();
        $authAdapter = new Zend_Auth_Adapter_DbTable($db);
        $authAdapter->setTableName('accounts')
                ->setIdentityColumn('email')
                ->setCredentialColumn('password');

        $authAdapter->setIdentity($email);        
        //Bcrypt should really be used to encrypt the passwords
        //instead of md5
        $authAdapter->setCredential(md5($password));
        
        // Perform the authentication query, saving the result
        $result = $auth->authenticate($authAdapter);

        if ($result->isValid()) {
            $data = $authAdapter->getResultRowObject(null, 'password');
            $accounts = new Application_Model_DbTable_Accounts();
            $auth->getStorage()->write($data);
            

            $authNamespace = new Zend_Session_Namespace('Zend_Auth');
            $authNamespace->user = $email;
            return true;
        } else {
            return false;
        }
    }

}

?>