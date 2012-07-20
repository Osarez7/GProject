<?php

/**
 * prioridad actions.
 *
 * @package    gproject
 * @subpackage prioridad
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class prioridadActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->prioridads = Doctrine_Core::getTable('Prioridad')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->prioridad = Doctrine_Core::getTable('Prioridad')->find(array($request->getParameter('id_prioridad')));
    $this->forward404Unless($this->prioridad);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new PrioridadForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new PrioridadForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($prioridad = Doctrine_Core::getTable('Prioridad')->find(array($request->getParameter('id_prioridad'))), sprintf('Object prioridad does not exist (%s).', $request->getParameter('id_prioridad')));
    $this->form = new PrioridadForm($prioridad);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($prioridad = Doctrine_Core::getTable('Prioridad')->find(array($request->getParameter('id_prioridad'))), sprintf('Object prioridad does not exist (%s).', $request->getParameter('id_prioridad')));
    $this->form = new PrioridadForm($prioridad);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($prioridad = Doctrine_Core::getTable('Prioridad')->find(array($request->getParameter('id_prioridad'))), sprintf('Object prioridad does not exist (%s).', $request->getParameter('id_prioridad')));
    $prioridad->delete();

    $this->redirect('prioridad/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $prioridad = $form->save();

      $this->redirect('prioridad/edit?id_prioridad='.$prioridad->getIdPrioridad());
    }
  }
}
