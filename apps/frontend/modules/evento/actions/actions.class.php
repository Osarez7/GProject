<?php

/**
 * evento actions.
 *
 * @package    gproject
 * @subpackage evento
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class eventoActions extends sfActions
{

   
  public function executeIndex(sfWebRequest $request)
  {
    
    $custom_logger = new sfFileLogger(new sfEventDispatcher(), array('file' => sfConfig::get('sf_log_dir') . '/optional.log'));

        $custom_logger->notice("inicio es  " . $request->getParameter('start')."  ". $request->getParameter('start'));

      
  $this->proyecto = Doctrine_Core::getTable('Proyecto')
             ->find(array($request->getParameter('idProyecto')));
  $this->forward404Unless($this->proyecto);
 
  
  $this->eventos = Doctrine_Core::getTable('Evento')->getEventosByProyectoAndRango($request->getParameter('idProyecto'),$this->milisecondsToDate($request->getParameter('start')),$this->milisecondsToDate($request->getParameter('end')));
  $this->tareas = Doctrine_Core::getTable('Tarea')->getArbolTareas($request->getParameter('idProyecto')); 
       
    
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->evento = Doctrine_Core::getTable('Evento')->find(array($request->getParameter('id_evento')));
    $this->forward404Unless($this->evento);
  }

  public function executeNew(sfWebRequest $request)
  {
  

 $this->form = new EventoForm();
 
 
 $custom_logger = new sfFileLogger(new sfEventDispatcher(), array('file' => sfConfig::get('sf_log_dir') .'/optional.log'));

 $custom_logger->notice("default date es ". $request->getParameter('defaultDate') . " ,". $this->milisecondsToDate($request->getParameter('defaultDate')). " " . $request->getParameter('allDay'));



    $this->form->setDefaults(array(
          "proyectoFK" => $request->getParameter('idProyecto'),
          "fechaInicio" => $this->milisecondsToDate($request->getParameter('defaultDate')),
          "fechaFinal" => $this->milisecondsToDate($request->getParameter('defaultDate')),
          "diaCompleto" => 0
        ));
 
            if ($request->isXmlHttpRequest()) {
                return $this->renderPartial('evento/form', array('form' => $this->form));
            }
       

  }

  public function executeCreate(sfWebRequest $request)
  {
     
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new EventoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($evento = Doctrine_Core::getTable('Evento')->find(array($request->getParameter('id_evento'))), sprintf('Object evento does not exist (%s).', $request->getParameter('id_evento')));
    $this->form = new EventoForm($evento);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($evento = Doctrine_Core::getTable('Evento')->find(array($request->getParameter('id_evento'))), sprintf('Object evento does not exist (%s).', $request->getParameter('id_evento')));
    $this->form = new EventoForm($evento);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
   //  $request->checkCSRFProtection();

    $this->forward404Unless($evento = Doctrine_Core::getTable('Evento')->find(array($request->getParameter('id_evento'))), sprintf('Object evento does not exist (%s).', $request->getParameter('id_evento')));
    $evento->delete();

       if ($request->isXmlHttpRequest()) {
                return $this->renderPartial('global/mensaje', array('mensaje' => 'Evento borrado correctamente'));
            }
    
    $this->redirect('evento/index');
  }

  
  
  public function executeShowCalendario(sfWebRequest $request){
      
     $this->calendario = new Calendario();
      
     
  }
  
  
  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $evento = $form->save();

      $this->redirect('evento/edit?id_evento='.$evento->getIdEvento());
    }
  }
  
  
    private function  milisecondsToDate($timeMiliseconds){
        $custom_logger = new sfFileLogger(new sfEventDispatcher(), array('file' => sfConfig::get('sf_log_dir') . '/optional.log'));
        $custom_logger->notice("convierte " . $timeMiliseconds);

        return  date('Y-m-d H:i:s',$timeMiliseconds);
    }
}
