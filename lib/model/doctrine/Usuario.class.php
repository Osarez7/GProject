<?php

/**
 * Usuario
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    gproject
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Usuario extends BaseUsuario {

    public function __toString() {


        return $this->getUsrNick();
    }

    
    public function inactivar(){
        
        //TODO
    }
    
    public function getNombreCompleto() {

        return $this->getUsrNombre() . " " . $this->getUsrApellido1() . " " . $this->getUsrApellido2();
    }

    public function save(Doctrine_Connection $conn = null) {
        
            $pwd = $this->getPassword() ;
            $this->getPassword(crypt($pwd));
            
        return parent::save($conn);
    }

}
