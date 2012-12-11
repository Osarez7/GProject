<?php

/**
 * reporte actions.
 *
 * @package    gproject
 * @subpackage reporte
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class reporteActions extends sfActions {

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request) {
        $this->filter = new ProyectoFormFilter();
    }

    public function executeReporteProyectos() {
        $this->formFilter = new ProyectoFormFilter();
        // $this->formFilter->embedForm('usuarios', new UsuarioFormFilter);





        return $this->renderPartial('reporte/filtroReporteProyectos', array('filter' => $this->formFilter));
    }

    
    
    public function executeFiltrarReporteProyectos(sfWebRequest $request) {
        //display the results with the Symfony pager object.
        $this->formFilter = new ProyectoFormFilter();
        $this->formFilter->bind($request->getParameter(
                        $this->formFilter->getName()));
        $this->pager = new sfDoctrinePager(
                        'Proyecto', 20);
        //'Usuario',sfConfig::get('app_max_usuarios'));
        $this->pager->setQuery($this->formFilter->getQuery());
        $this->pager->setPage(
                $request->getParameter('page', 1));
        $this->pager->init();
        return $this->renderPartial('reporte/resultadoReporteProyectos', array('lstResultados' => $this->pager->getResults()));
    }

    
    
 

    public function executeReporteTareas(sfWebRequest $request) {
         $this->formFilter = new TareaFormFilter();
        // $this->formFilter->embedForm('usuarios', new UsuarioFormFilter);





        return $this->renderPartial('reporte/filtroReporteTareas', array('filter' => $this->formFilter));
    }
    
    
    
     public function executeFiltrarReporteTareas(sfWebRequest $request) {
        $this->formFilter = new TareaFormFilter();
        $this->formFilter->bind($request->getParameter(
                        $this->formFilter->getName()));
        $this->pager = new sfDoctrinePager(
                        'Tarea', 20);
        //'Usuario',sfConfig::get('app_max_usuarios'));
        $this->pager->setQuery($this->formFilter->getQuery());
        $this->pager->setPage(
                $request->getParameter('page', 1));
        $this->pager->init();
        return $this->renderPartial('reporte/resultadoReporteTareas', array('lstResultados' => $this->pager->getResults()));
    }
    
       public function executeFiltrarReporteUsuarios(sfWebRequest $request) {
        $this->formFilter = new ProyectoFormFilter();
        $this->formFilter->bind($request->getParameter(
                        $this->formFilter->getName()));
        $this->pager = new sfDoctrinePager(
                        'Tarea', 20);
        //'Usuario',sfConfig::get('app_max_usuarios'));
        $this->pager->setQuery($this->formFilter->getQuery());
        $this->pager->setPage(
                $request->getParameter('page', 1));
        $this->pager->init();
        return $this->renderPartial('reporte/resultadoReporteProyectos', array('lstResultados' => $this->pager->getResults()));
    }

}
