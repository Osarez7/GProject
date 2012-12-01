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
  
    
    
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->lugar = Doctrine_Core::getTable('Lugar')->find(array($request->getParameter('id_lugar')));
    $this->forward404Unless($this->lugar);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new LugarForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new LugarForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($lugar = Doctrine_Core::getTable('Lugar')->find(array($request->getParameter('id_lugar'))), sprintf('Object lugar does not exist (%s).', $request->getParameter('id_lugar')));
    $this->form = new LugarForm($lugar);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($lugar = Doctrine_Core::getTable('Lugar')->find(array($request->getParameter('id_lugar'))), sprintf('Object lugar does not exist (%s).', $request->getParameter('id_lugar')));
    $this->form = new LugarForm($lugar);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($lugar = Doctrine_Core::getTable('Lugar')->find(array($request->getParameter('id_lugar'))), sprintf('Object lugar does not exist (%s).', $request->getParameter('id_lugar')));
    $lugar->delete();

    $this->redirect('lugar/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $lugar = $form->save();

      $this->redirect('lugar/edit?id_lugar='.$lugar->getIdLugar());
    }
  }
}
