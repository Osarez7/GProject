<?php

/**
 * tarea actions.
 *
 * @package    gproject
 * @subpackage tarea
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class tareaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
      /*
$this->arbolTarea = Doctrine_Core::getTable('UsuarioTarea')->getArbolTareasByUsuario($this->getUser()->getAttribute('idUsuario'));
$this->logMessage('El id Usuario es'. $this->getUser()->getAttribute('idUsuario'). '
    y la respuesta es '. $this->arbolTarea, 'notice');*/
    
  $this->tareas =  Doctrine_Core::getTable('Tarea')->getUsuarioTarea($this->getUser()->getAttribute('idUsuario'));
    
  }
  
  public function addChild(sfWebRequest $request){
    Doctrine_Core:: getTable('Tarea')->addChild($request->getParameter('idTarea'));   
  }
  
  
  public function executeArbol(sfWebRequest $request){
      
     $this->arbolTarea = Doctrine_Core::getTable('Tarea')->getArbolTareas();
      
  }
  

  public function executeShow(sfWebRequest $request){
 
    $this->tarea = Doctrine_Core::getTable('Tarea')->find(array($request->getParameter('id_tarea')));
    $this->forward404Unless($this->tarea);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TareaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TareaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($tarea = Doctrine_Core::getTable('Tarea')->find(array($request->getParameter('id_tarea'))), sprintf('Object tarea does not exist (%s).', $request->getParameter('id_tarea')));
    $this->form = new TareaForm($tarea);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($tarea = Doctrine_Core::getTable('Tarea')->find(array($request->getParameter('id_tarea'))), sprintf('Object tarea does not exist (%s).', $request->getParameter('id_tarea')));
    $this->form = new TareaForm($tarea);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->
          forward404Unless($tarea = 
              Doctrine_Core::getTable('Tarea')->find(array($request->getParameter('id_tarea'))),    sprintf('Object tarea does not exist (%s).', $request->getParameter('id_tarea')));
    $tarea->getNode()->delete();

    $this->redirect('tarea/index');
  }

  
  public function executeAsignarUsuario(sfWebRequest $request){
      

  $this->logMessage('Tarea es  '. $request->getParameter('idTarea') 
        , 'notice');
  
  
        $this->forward404Unless($this->tarea = Doctrine_Core::getTable('Tarea')->find(array($request->getParameter('idTarea'))), sprintf('Object tarea does not exist (%s).', $request->getParameter('idTarea')));
  
    $this->form = new LinkTareaUsuario($this->tarea);
       }
       
       
    public function executeUpdateAsignar(sfWebRequest $request){
      
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($tarea = Doctrine_Core::getTable('Tarea')->find(array($request->getParameter('idTarea'))), sprintf('Object tarea does not exist (%s).', $request->getParameter('idTarea')));
    $this->form = new LinkTareaUsuario($tarea);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit'); 
        
    }   


  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $tarea = $form->save();

      $this->redirect('tarea/edit?id_tarea='.$tarea->getIdTarea());
    }
  }




}
