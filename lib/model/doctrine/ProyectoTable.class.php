<?php

/**
 * ProyectoTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ProyectoTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object ProyectoTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Proyecto');
    }
    
    public function getProyectos(){
        
       return   Doctrine_Query::create()
           ->select('p.*, s.nombreStatus, p.nombrePrioridad' )
           ->from('Proyecto p, p.statusFK s, p.prioridadFK p')
           ->setHydrationMode(Doctrine_Core::HYDRATE_ARRAY)->execute();         
                
    }
    
    public function getProyectoByUsuario($idUsuario){
        
        $query =  $this->getQueryProyectoByUsuario($idUsuario);
        return  $query->execute();     
               
        
    }
    
    private function getQueryProyectoByUsuario($idUsuario){
        
          $query = Doctrine_Query::create()
                ->from('Proyecto p')
                ->leftJoin('ProyectoUsuario u')
                ->where('u.idUsuario=?',$idUsuario)
                ->andWhere('p.idProyecto =  u.idProyecto');
          
          return $query;
    }
    
}