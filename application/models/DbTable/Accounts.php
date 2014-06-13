<?php
/**
     * Initialisation method
     *
     * @author          Guillermo Lopez
     * @param           void
     * @return           void
     *
     */
class Application_Model_DbTable_Accounts extends Zend_Db_Table_Abstract
{
    /**
     * Table Name
     *
     */
    protected $_name = 'accounts';
    
    /**
     *primary id
     * 
     */
    protected $_primary = 'id';
    
    
}

