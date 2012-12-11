<?php


class proyectoActions extends sfActions {

    public function executeIndex(sfWebRequest $request) {
      
        $this->proyectos = Doctrine_Core::getTable('Proyecto')->getProyectoByUsuario($this->getUser()->getAttribute('idUsuario'));
    }

    public function executeShow(sfWebRequest $request) {
       
       $this->proyecto = Doctrine_Core::getTable('Proyecto')
             ->find(array($request->getParameter('id_proyecto')));
        $this->forward404Unless($this->proyecto);
    }

    public function executeNew(sfWebRequest $request) {
        $this->form = new ProyectoForm();
        
    }

    public function executeCreate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));

        $this->form = new ProyectoForm();
        $proyecto = $this->processForm($request, $this->form);
        
        if ($proyecto) {
                $proyecto->asignarUsuario($this->getUser()->getAttribute('idUsuario')); 
                $this->form = new ProyectoForm($proyecto);
                $this->getUser()->setFlash('OK', 'El proyecto ha sido creado exitosamente',false);
                $this->redirect('proyecto/edit?id_proyecto=' . $proyecto->getIdProyecto());
            }
        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request) {
        $this->forward404Unless($proyecto = Doctrine_Core::getTable('Proyecto')
              ->find(array($request->getParameter('id_proyecto'))), sprintf('Object proyecto does not exist (%s).', $request->getParameter('id_proyecto')));
        $this->form = new ProyectoForm($proyecto);
    }

    public function executeUpdate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $this->forward404Unless($proyecto = Doctrine_Core::getTable('Proyecto')->find(array($request->getParameter('id_proyecto'))), sprintf('Object proyecto does not exist (%s).', $request->getParameter('id_proyecto')));
        $this->form = new ProyectoForm($proyecto);

        $this->processForm($request, $this->form);
        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request) {
        $request->checkCSRFProtection();

        $this->forward404Unless($proyecto = Doctrine_Core::getTable('Proyecto')->find(array($request->getParameter('id_proyecto'))), sprintf('Object proyecto does not exist (%s).', $request->getParameter('id_proyecto')));
        $proyecto->delete();
        $this->redirect('proyecto/index');
    }

    
    public function executeAsociarUsuarios(sfWebRequest $request) {

            $this->forward404Unless($this->proyecto= Doctrine_Core::getTable('Proyecto')->find(array($request->getParameter('idProyecto'))), sprintf('El proyecto  no existe (%s).', $request->getParameter('idProyecto')));
            $this->form = new LinkProyectoUsuarioForm($this->proyecto);
            
            if ($request->isXmlHttpRequest()) {
                return $this->renderPartial('proyecto/asociarUsuario', array('form' => $this->form, 'proyecto' => $this->proyecto));
            }
    }

    
     public function executeUpdateAsociar(sfWebRequest $request) {

            $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
            $this->forward404Unless($this->proyecto = Doctrine_Core::getTable('Proyecto')->find(array($request->getParameter('idProyecto'))), sprintf('El proyecto  no existe (%s).', $request->getParameter('idProyecto')));
           
            $this->form = new LinkProyectoUsuarioForm($this->proyecto);
            $this->proyecto = $this->processForm($request, $this->form);
           
            if ($this->proyecto ) {
                 $this->getUser()->setFlash('OK', 'Asociación correcta',false);
            }
            
            if ($request->isXmlHttpRequest()) {
                return $this->renderPartial('proyecto/asociarUsuario', array('form' => $this->form, 'proyecto' => $this->proyecto));
            }
            
            $this->setTemplate('asociarUsuario');
        }
    
    
    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $proyecto = $form->save();
            return $proyecto;
        }else{
            
            return false;
            
        }
    }

}
