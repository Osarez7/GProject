<?php

/**
 * tarea actions.
 *
 * @package    gproject
 * @subpackage tarea
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class tareaActions extends sfActions {

    public function executeIndex(sfWebRequest $request) {
     
        $this->tareas = Doctrine_Core::getTable('Tarea')->getUsuarioTarea($this->getUser()->getAttribute('idUsuario'));
    }

    public function executeAddChild(sfWebRequest $request) {
        
        $this->form = new TareaForm();
        $this->form->setDefault('proyectoFK', $request->getParameter('idProyecto'));
        $this->form->setDefault('parent', $request->getParameter('idTarea'));

            if ($request->isXmlHttpRequest()) {
                return $this->renderPartial('tarea/form', array('form' => $this->form));
            }
            
          $this->setTemplate('new');
    }

    public function executeArbol(sfWebRequest $request) {

        $this->arbolTarea = Doctrine_Core::getTable('Tarea')->getTreeTaskAsArray($request->getParameter('idProyecto'));
    }

    public function executeGantt(sfWebRequest $request) {

      $this->proyecto = Doctrine_Core::getTable('Proyecto')
             ->find(array($request->getParameter('idProyecto')));

        $this->forward404Unless($this->proyecto);
 
        $this->arbolTarea = Doctrine_Core::getTable('Tarea')->getTreeTaskAsArray($request->getParameter('idProyecto'));
    }

    public function executeShow(sfWebRequest $request) {

        $this->tarea = Doctrine_Core::getTable('Tarea')->find(array($request->getParameter('id_tarea')));
        $this->forward404Unless($this->tarea);

        $this->avances = Doctrine_Core::getTable('Avance')->getAvancesByTarea($request->getParameter('id_tarea'));
    }

    public function executeNew(sfWebRequest $request) {
        $this->form = new TareaForm();
        $this->form->setDefault('proyectoFK', $request->getParameter('idProyecto'));
 

            if ($request->isXmlHttpRequest()) {
                return $this->renderPartial('tarea/form', array('form' => $this->form));
            }
        }

        public function executeCreate(sfWebRequest $request) {
            $this->forward404Unless($request->isMethod(sfRequest::POST));

             
             $this->logMessage('Esta intentando crear una tarea', 'notice');

            $this->form = new TareaForm();

            $tarea = $this->processForm($request, $this->form);

            if ($tarea) {
                $this->form = new TareaForm($tarea);
                $this->getUser()->setFlash('OK', 'La tarea fue creada exitosamente');
                $this->redirect('tarea/edit?id_tarea=' . $tarea->getIdTarea());
            }


            $this->setTemplate('new');
        }

        public function executeEdit(sfWebRequest $request) {
            $this->forward404Unless($tarea = Doctrine_Core::getTable('Tarea')->find(array($request->getParameter('id_tarea'))), sprintf('Object tarea does not exist (%s).', $request->getParameter('id_tarea')));
           
            $this->form = new TareaForm($tarea);


            if ($request->isXmlHttpRequest()) {

                $this->logMessage('Estas haciendo una llamada Ajax', 'notice');
                 return $this->renderPartial('tarea/form', array('form' => $this->form));
            }


            
        }

        public function executeUpdate(sfWebRequest $request) {
            $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
            $this->forward404Unless($tarea = Doctrine_Core::getTable('Tarea')->find(array($request->getParameter('id_tarea'))), sprintf('Object tarea does not exist (%s).', $request->getParameter('id_tarea')));
            $this->form = new TareaForm($tarea);

            $tarea = $this->processForm($request, $this->form);

            if ($tarea) {
                $this->getUser()->setFlash('OK', 'Actualización Correcta');
                $this->redirect('tarea/edit?id_tarea=' . $tarea->getIdTarea());
            }

            $this->setTemplate('edit');
        }

        public function executeDelete(sfWebRequest $request) {
           // $request->checkCSRFProtection();

            $this
              ->forward404Unless($tarea =
                               Doctrine_Core::getTable('Tarea')->find(array($request->getParameter('id_tarea'))), sprintf('Object tarea does not exist (%s).', $request->getParameter('id_tarea')));
            
            $this->getUser()->setFlash('OK', 'La tarea fue creada borrada');
            $tarea->getNode()->delete();

             if (!$request->isXmlHttpRequest()) {

               $this->redirect('tarea/index');
            }else{
                
                return $this->renderPartial('tarea/form', array('form' =>new TareaForm()));
            }
            
        }

        public function executeAsignarUsuario(sfWebRequest $request) {


            $this->logMessage('Tarea es ' . $request->getParameter('idTarea'), 'notice');


            $this->forward404Unless($this->tarea = Doctrine_Core::getTable('Tarea')->find(array($request->getParameter('idTarea'))), sprintf('La tarea no existe (%s).', $request->getParameter('idTarea')));

            $this->form = new LinkTareaUsuario($this->tarea);

            if ($request->isXmlHttpRequest()) {
                return $this->renderPartial('tarea/asignarUsuario', array('form' => $this->form, 'tarea' => $this->tarea));
            }
        }

        public function executeUpdateAsignar(sfWebRequest $request) {

            $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
            $this->forward404Unless($tarea = Doctrine_Core::getTable('Tarea')->find(array($request->getParameter('idTarea'))), sprintf('Object tarea does not exist (%s).', $request->getParameter('idTarea')));
            $this->form = new LinkTareaUsuario($tarea);

            $this->tarea = $this->processForm($request, $this->form);
            $this->getUser()->setFlash('OK', 'Asignación correcta');
           
            if ($request->isXmlHttpRequest()) {
                return $this->renderPartial('tarea/asignarUsuario', array('form' => $this->form, 'tarea' => $this->tarea));
            }
            
            $this->setTemplate('asignarUsuario');
        }

        protected function processForm(sfWebRequest $request, sfForm $form) {
            $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
            if ($form->isValid()) {
                $tarea = $form->save();

                return $tarea;
            }

            return false;
        }

    }
