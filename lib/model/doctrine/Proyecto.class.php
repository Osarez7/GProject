<?php

/**
 * Proyecto
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    gproject
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Proyecto extends BaseProyecto {

    public function __toString() {
        return $this->getNombre();
    }
    

    
    
    public function getArbolTareas(){
        
      $arbolTarea = Doctrine_Core::getTable('Tarea')
          ->getTreeTaskAsArray($this->getIdProyecto());    
        
     return $arbolTarea;
    }
    
    
    public function getMapas(){
        $mapas = Doctrine_Core::getTable('Mapa')
          ->getMapasPorProyecto($this->getIdProyecto());    
        
     return $mapas; 
    
        
    }
    
    
    public function getEventos(){
        
        $eventos = Doctrine_Core::getTable('Evento')
          -> getEventosByProyecto($this->getIdProyecto());    
        
     return $eventos; 
     
    }
    
    
    
    public function asignarUsuario($idUsuario){
        
        $proyectoUsuario = new ProyectoUsuario();
        $proyectoUsuario->setIdProyecto($this->getIdProyecto());
        $proyectoUsuario->setIdUsuario($idUsuario);
        $proyectoUsuario->save();
    }
    

}
