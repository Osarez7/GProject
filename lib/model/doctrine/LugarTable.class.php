<?php

/**
 * LugarTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class LugarTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object LugarTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Lugar');
    }
    
    
    public function getLugaresPorMapa($idMapa){
        
      $lugares = $this->createQuery('l')
       ->where('l.mapafk = ?', $idMapa)       
      ->execute();  
        
      return  $lugares ;
    }
    
      
}