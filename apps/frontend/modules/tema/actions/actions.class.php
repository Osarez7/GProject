<?php

/**
 * tema actions.
 *
 * @package    gproject
 * @subpackage tema
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class temaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->temas = Doctrine_Core::getTable('Tema')
      ->createQuery('b')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->tema = Doctrine_Core::getTable('Tema')->find(array($request->getParameter('id_tema')));
    $this->forward404Unless($this->tema);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TemaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TemaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($tema = Doctrine_Core::getTable('Tema')->find(array($request->getParameter('id_tema'))), sprintf('Object tema does not exist (%s).', $request->getParameter('id_tema')));
    $this->form = new TemaForm($tema);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($tema = Doctrine_Core::getTable('Tema')->find(array($request->getParameter('id_tema'))), sprintf('Object tema does not exist (%s).', $request->getParameter('id_tema')));
    $this->form = new TemaForm($tema);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($tema = Doctrine_Core::getTable('Tema')->find(array($request->getParameter('id_tema'))), sprintf('Object tema does not exist (%s).', $request->getParameter('id_tema')));
    $tema->delete();

    $this->redirect('tema/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $tema = $form->save();

      $this->redirect('tema/edit?id_tema='.$tema->getIdTema());
    }
  }
}
