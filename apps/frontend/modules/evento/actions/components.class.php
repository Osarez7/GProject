<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of components
 *
 * @author jint
 */



class eventoComponents extends  sfComponents {
    //put your code here
    
    
    public function executeCalendarioUsuario(sfWebRequest $request) {
        
        $this->eventos = Doctrine_Core::getTable('Evento')->getEventosByUsuario($this->getUser()->getAttribute('idUsuario'));
        $this->calendario = new Calendario();
        
    }  
    
    
    public function executeCambiarMes(){
        
    }
    
    
    
    
    
    public function executeCalendarioProyecto(){
        
       $this->eventos = Doctrine_Core::getTable('Evento')->getEventosByProyecto();
    }
    
}


