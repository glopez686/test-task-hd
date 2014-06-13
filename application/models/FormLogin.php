<?php
/**
     * FormLogin
     *
     * @author          Guillermo Lopez
     *
     */
class Application_Model_FormLogin extends Zend_Form
{
    /**
     * Form Constructor
     *
     * @author          Guillermo Lopez
     * @param           void     
     *
     */
    public function __construct($options = null) {
        parent::__construct($options);
        //parent::__construct($options = null);
        
       $email = new Zend_Form_Element_Text('email');
        $email->setAttrib('size',35);
        $email->removeDecorator('label');
        $email->removeDecorator('htmlTag');
        $email->removeDecorator('Errors');
        $email->setRequired('true');
        $email->addValidator('EmailAddress');
        $email->addErrorMessage('Please Enter a Valid Email Address');        
        
        $pswd = new Zend_Form_Element_Password('pswd');
        $pswd->setAttrib('size', 35)->removeDecorator('label')->removeDecorator('htmlTag');
        $pswd->setRequired(true);
        $pswd->addValidator('StringLength', false, array(4,15));
        $pswd->addErrorMessage('Please choose a password between 4-15 characters');
        $pswd->removeDecorator('label');
        $pswd->removeDecorator('htmlTag');
        $pswd->removeDecorator('Errors');
        
        $submit = new Zend_Form_Element_Submit('submit');
        $submit->setLabel('Login');
        $submit->removeDecorator('DtDdWrapper');
        
        $this->setDecorators( array(
            array('ViewScript',
                array('viewScript' => '_form_login.phtml'))));
        
        $this->addElements(array($email, $pswd, $submit));
    }
}

