<?php

/**
 * usuario actions.
 *
 * @package    gproject
 * @subpackage usuario
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class usuarioActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->usuarios = Doctrine_Core::getTable('Usuario')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->usuario = Doctrine_Core::getTable('Usuario')->find(array($request->getParameter('idUsuario')));
    $this->forward404Unless($this->usuario);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new UsuarioForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new UsuarioForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($usuario = Doctrine_Core::getTable('Usuario')->find(array($request->getParameter('id_usuario'))), sprintf('Object usuario does not exist (%s).', $request->getParameter('id_usuario')));
    $this->form = new UsuarioForm($usuario);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($usuario = Doctrine_Core::getTable('Usuario')->find(array($request->getParameter('id_usuario'))), sprintf('Object usuario does not exist (%s).', $request->getParameter('id_usuario')));
    $this->form = new UsuarioForm($usuario);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($usuario = Doctrine_Core::getTable('Usuario')->find(array($request->getParameter('id_usuario'))), sprintf('Object usuario does not exist (%s).', $request->getParameter('id_usuario')));
    $usuario->delete();

    $this->redirect('usuario/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $usuario = $form->save();

      $this->redirect('usuario/edit?id_usuario='.$usuario->getIdUsuario());
    }
  }
}
