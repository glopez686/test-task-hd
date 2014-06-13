<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Errors
 *
 * @author guillermo
 */
class Zend_View_Helper_Errors extends Zend_View_Helper_Abstract {
    /**
     * Outputs errors using a uniform format
     * 
     * @param Array $errors
     * @return null
     */
    public function Errors($errors){
        if(count($errors) > 0){
            echo "<div id='errors'>";
            foreach($errors as $error){
                if(isset($error[0])){
                    printf("<li>%s</li>", $error[0]);
                }
            }
            echo '</ul>';
            echo '</div>';
        }
    }
}
