<?php

/**
 * map actions.
 *
 * @package    gproject
 * @subpackage map
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class mapActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->mapas = Doctrine_Core::getTable('Mapa')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->mapa = Doctrine_Core::getTable('Mapa')->find(array($request->getParameter('id_mapa')));
    $this->forward404Unless($this->mapa);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new MapaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new MapaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($mapa = Doctrine_Core::getTable('Mapa')->find(array($request->getParameter('id_mapa'))), sprintf('Object mapa does not exist (%s).', $request->getParameter('id_mapa')));
    $this->form = new MapaForm($mapa);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($mapa = Doctrine_Core::getTable('Mapa')->find(array($request->getParameter('id_mapa'))), sprintf('Object mapa does not exist (%s).', $request->getParameter('id_mapa')));
    $this->form = new MapaForm($mapa);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($mapa = Doctrine_Core::getTable('Mapa')->find(array($request->getParameter('id_mapa'))), sprintf('Object mapa does not exist (%s).', $request->getParameter('id_mapa')));
    $mapa->delete();

    $this->redirect('map/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $mapa = $form->save();

      $this->redirect('map/edit?id_mapa='.$mapa->getIdMapa());
    }
  }
}
