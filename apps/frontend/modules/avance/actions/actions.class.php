<?php

/**
 * avance actions.
 *
 * @package    gproject
 * @subpackage avance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class avanceActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->avances = Doctrine_Core::getTable('Avance')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new AvanceForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new AvanceForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($avance = Doctrine_Core::getTable('Avance')->find(array($request->getParameter('id_avance'))), sprintf('Object avance does not exist (%s).', $request->getParameter('id_avance')));
    $this->form = new AvanceForm($avance);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($avance = Doctrine_Core::getTable('Avance')->find(array($request->getParameter('id_avance'))), sprintf('Object avance does not exist (%s).', $request->getParameter('id_avance')));
    $this->form = new AvanceForm($avance);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($avance = Doctrine_Core::getTable('Avance')->find(array($request->getParameter('id_avance'))), sprintf('Object avance does not exist (%s).', $request->getParameter('id_avance')));
    $avance->delete();

    $this->redirect('avance/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $avance = $form->save();

      $this->redirect('avance/edit?id_avance='.$avance->getIdAvance());
    }
  }
}
