<?php

/**
 * lugar actions.
 *
 * @package    gproject
 * @subpackage lugar
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class lugarActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->lugares = Doctrine_Core::getTable('Lugar')->getLugaresPorMapa($request->getParameter('idMapa'));
  
    $idMapa =$request->getParameter('idMapa');
    
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->lugar = Doctrine_Core::getTable('Lugar')->find(array($request->getParameter('id_lugar')));
    $this->forward404Unless($this->lugar);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new LugarForm();
    
      $custom_logger = new sfFileLogger(new sfEventDispatcher(), array('file' => sfConfig::get('sf_log_dir') .'/optional.log'));   
    $custom_logger->notice(" {controllerLugar}  longitud ". $request->getParameter('lon') );  
     
    
    $this->form->setDefaults(array(
                             'longitud' => $request->getParameter('lon'),
                             'latitud' => $request->getParameter('lat'),
                             'mapafk' => $request->getParameter('idMapa')
            
            ));
    
  if ($request->isXmlHttpRequest()) {
                return $this->renderPartial('lugar/form', array('form' => $this->form,'titulo' =>'Nuevo Lugar'));
            }
            
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new LugarForm();

    $this->processForm($request, $this->form);
    
    if ($request->isXmlHttpRequest()) {
                return $this->renderPartial('lugar/form', array('form' => $this->form , 'titulo' => 'Editar Lugar'));
            }

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    
    $custom_logger = new sfFileLogger(new sfEventDispatcher(), array('file' => sfConfig::get('sf_log_dir') .'/optional.log'));   
    $custom_logger->notice(" {controllerLugar}  id_lugar ". $request->getParameter('id_lugar') );  
      
    $this->forward404Unless($lugar = Doctrine_Core::getTable('Lugar')->find(array($request->getParameter('id_lugar'))), sprintf('El lugar no existe  (%s).', $request->getParameter('id_lugar')));
    $this->form = new LugarForm($lugar);
    
    if( $request->getParameter('lon')){
        
        $this->form->setDefaults(array(
                            'longitud' => $request->getParameter('lon'),
                            'latitud' => $request->getParameter('lat'),
         ));
      }
    
      if ($request->isXmlHttpRequest()) {
                return $this->renderPartial('lugar/form', array('form' => $this->form , 'titulo' => 'Editar Lugar'));
            }
    
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($lugar = Doctrine_Core::getTable('Lugar')->find(array($request->getParameter('id_lugar'))), sprintf('Object lugar does not exist (%s).', $request->getParameter('id_lugar')));
    $this->form = new LugarForm($lugar);

    $this->processForm($request, $this->form);
    
     if ($request->isXmlHttpRequest()) {
                return $this->renderPartial('lugar/form', array('form' => $this->form , 'titulo' => 'Editar Lugar'));
            }

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
   // $request->checkCSRFProtection();
      
    $custom_logger = new sfFileLogger(new sfEventDispatcher(), array('file' => sfConfig::get('sf_log_dir') .'/optional.log'));   
    $custom_logger->notice(" {controllerLugar}  id_lugar ". $request->getParameter('id_lugar') );  
      

    $this->forward404Unless($lugar = Doctrine_Core::getTable('Lugar')->find(array($request->getParameter('id_lugar'))), sprintf('Object lugar does not exist (%s).', $request->getParameter('id_lugar')));
    $lugar->delete();
    
    
      if ($request->isXmlHttpRequest()) {
                return $this->renderPartial('global/mensaje', array('mensaje' => 'Lugar eliminado correctamente'));
            }

    $this->redirect('lugar/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $lugar = $form->save();

      $this->redirect('lugar/edit?id_lugar='.$lugar->getid_lugar());
    }
  }
}
