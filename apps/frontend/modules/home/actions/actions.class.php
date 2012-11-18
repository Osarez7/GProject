<?php

/**
 * home actions.
 *
 * @package    gproject
 * @subpackage home
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homeActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
       
      if( $this->getUser()->hasCredential("admin")){
          
          $this->tareas = true;
          
          
      }else if ( $this->getUser()->hasCredential("ejecutor")){
          
          $this->tareas =  $this->tareas = Doctrine_Core::getTable('Tarea')->getTareasPendientesPorUsuario($this->getUser()->getAttribute('idUsuario'));
      }
       
      else if ( $this->getUser()->hasCredential("gerente")){
          
          $this->proyectos = $this->proyectos = Doctrine_Core::getTable('Proyecto')->getProyectoByUsuario($this->getUser()->getAttribute('idUsuario'));
      }
       
    
  }
}
