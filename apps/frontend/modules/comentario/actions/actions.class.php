<?php

/**
 * comentario actions.
 *
 * @package    gproject
 * @subpackage comentario
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class comentarioActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->comentarios = Doctrine_Core::getTable('Comentario')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->comentario = Doctrine_Core::getTable('Comentario')->find(array($request->getParameter('id_comentario')));
    $this->forward404Unless($this->comentario);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ComentarioForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ComentarioForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($comentario = Doctrine_Core::getTable('Comentario')->find(array($request->getParameter('id_comentario'))), sprintf('Object comentario does not exist (%s).', $request->getParameter('id_comentario')));
    $this->form = new ComentarioForm($comentario);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($comentario = Doctrine_Core::getTable('Comentario')->find(array($request->getParameter('id_comentario'))), sprintf('Object comentario does not exist (%s).', $request->getParameter('id_comentario')));
    $this->form = new ComentarioForm($comentario);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($comentario = Doctrine_Core::getTable('Comentario')->find(array($request->getParameter('id_comentario'))), sprintf('Object comentario does not exist (%s).', $request->getParameter('id_comentario')));
    $comentario->delete();

    $this->redirect('comentario/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $comentario = $form->save();

      $this->redirect('comentario/edit?id_comentario='.$comentario->getIdComentario());
    }
  }
}
