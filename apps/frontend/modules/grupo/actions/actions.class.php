<?php

/**
 * grupo actions.
 *
 * @package    gproject
 * @subpackage grupo
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class grupoActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->grupos = Doctrine_Core::getTable('Grupo')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->grupo = Doctrine_Core::getTable('Grupo')->find(array($request->getParameter('id_grupo')));
    $this->forward404Unless($this->grupo);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new GrupoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new GrupoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($grupo = Doctrine_Core::getTable('Grupo')->find(array($request->getParameter('id_grupo'))), sprintf('Object grupo does not exist (%s).', $request->getParameter('id_grupo')));
    $this->form = new GrupoForm($grupo);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($grupo = Doctrine_Core::getTable('Grupo')->find(array($request->getParameter('id_grupo'))), sprintf('Object grupo does not exist (%s).', $request->getParameter('id_grupo')));
    $this->form = new GrupoForm($grupo);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($grupo = Doctrine_Core::getTable('Grupo')->find(array($request->getParameter('id_grupo'))), sprintf('Object grupo does not exist (%s).', $request->getParameter('id_grupo')));
    $grupo->delete();

    $this->redirect('grupo/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $grupo = $form->save();

      $this->redirect('grupo/edit?id_grupo='.$grupo->getIdGrupo());
    }
  }
}
