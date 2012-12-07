<?php

/**
 * Tarea form.
 *
 * @package    gproject
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class TareaForm extends BaseTareaForm {

    public function configure() {

        
        
           
$custom_logger = new sfFileLogger(new sfEventDispatcher(), array('file' => sfConfig::get('sf_log_dir') .'/optional.log'));






 
       $this->setWidget('parent', new sfWidgetFormInputHidden());
       
        $this->setWidget('fechaInicio', new sfWidgetFormTextDateInputJQueryDatePicker(
        array('image' => '/images/calendar_view_month.png',
        'include_time' => false))
        );


        $this->setWidget('fechaFinal', new sfWidgetFormTextDateInputJQueryDatePicker(
                        array('image' => '/images/calendar_view_month.png',
                            'include_time' => false))
        );

         $this->setWidget('proyectoFK',new  sfWidgetFormInputHidden());
        
                  
            
        if ($this->getObject()->getNode()->hasParent()) {
            $this->setDefault('parent', $this->getObject()->getNode()->getParent()->get('idTarea'));
       
            $custom_logger->notice("(".$this .")Ya tiene un padre y es ". $this->getObject()->getNode()->getParent()->get('idTarea') );
            
            }


        // set a validator for parent which prevents a category being moved to one of its own descendants
         $this->setValidator('parent', new sfValidatorDoctrineChoiceNestedSet(array(
         'required' => false,
         'model'    => 'Tarea',
         'node'     => $this->getObject(),
      )));

        $this->getValidator('parent')->setMessage('node', 'Una tarea no puede ser subtarea de si misma');



        unset(
                $this['root_id'], $this['level'], $this['rgt'], $this['lft'], $this['tar_fecha_creacion'], $this['usuario_list'], $this['tar_fecha_actulizacion']
        );








  $this->widgetSchema->setLabels(array(
     'statusFK'      => 'Estado',
      'fechaInicio'       => 'Fecha de Inicio',
      'fechaFinal'        => 'Fecha de Finalización',
        'horasEstimadas'   => 'Horas Estimadas',
         'prioridadFK'  =>  'Prioridad'
      ));
    }

    
    
    
    
    public function doSave($con = null) {
        // save the record itself
        parent::doSave($con);
        // if a parent has been specified, add/move this node to be the child of that node
   
$custom_logger = new sfFileLogger(new sfEventDispatcher(), array('file' => sfConfig::get('sf_log_dir') .'/optional.log'));
       
          $custom_logger->notice("---- El padre sera " . $this->getValue('parent') );

        
        if ($this->getValue('parent')) {
            
            
            $custom_logger->notice("prueba primer if parent" . $this->getValue('parent'));
            //  $parent = Doctrine_Core::getTable('Tarea')->find(array($this->getValue('parent')));
            $parent = Doctrine::getTable('Tarea')->findOneById($this->getValue('parent'));
            if ($this->isNew()) {
               
                  $custom_logger->notice("/+ Despues de busqueda padre es".  $parent->getIdTarea()) ;
        
                $this->getObject()->getNode()->insertAsLastChildOf($parent);
                $custom_logger->notice(
                        "ahora el padre es" . $this->getObject()->getNode()->getParent()->getIdTarea());
            } else {
                $this->getObject()->getNode()->moveAsLastChildOf($parent);
            }
        }
        // if no parent was selected, add/move this node to be a new root in the tree
        else {
            $custom_logger->notice("prueba primer else parent");
            
            $tareaTree = Doctrine::getTable('Tarea')->getTree();
            if ($this->isNew()) {
                $tareaTree->createRoot($this->getObject());
            } else {
                $this->getObject()->getNode()->makeRoot($this->getObject()->getIdTarea());
            }
        }
    }

    /*
      public function configure()
      {


      $this->setWidget('parent', new sfWidgetFormDoctrineChoiceNestedSet(array(
      'model'     => 'Tarea',
      'add_empty' => 'No es sub-tarea',
      'label' => 'Padre',
      'query' => Doctrine_Core::getTable('Tarea')->getQueryArbolTarea($this->getObject()->getProyectoFK())
      )));


      $this->setWidget('fechaInicio',  new sfWidgetFormTextDateInputJQueryDatePicker(
      array('image'=> '/images/calendar_view_month.png',
      'include_time'=> false))
      );


      $this->setWidget('fechaFinal',  new sfWidgetFormTextDateInputJQueryDatePicker(
      array('image'=> '/images/calendar_view_month.png',
      'include_time'=> false))
      );

      if ($this->getObject()->getNode()->hasParent())
      {
      $this->setDefault('parent', $this->getObject()->getNode()->getParent()->getId());
      }


      // set a validator for parent which prevents a category being moved to one of its own descendants
      $this->setValidator('parent', new sfValidatorDoctrineChoiceNestedSet(array(
      'required' => false,
      'model'    => 'Tarea',
      'node'     => $this->getObject(),
      )));


      $this->getValidator('parent')->setMessage('node', 'A category cannot be made a descendent of itself.');



      unset(
      $this['root_id'],$this['level'],
      $this['rgt'],$this['lft'],$this['tar_fecha_creacion'],
      $this['usuario_list'],$this['tar_fecha_actulizacion']

      );


      }

      public function doSave($con = null)
      {
      // save the record itself
      parent::doSave($con);
      // if a parent has been specified, add/move this node to be the child of that node

      sfContext::getInstance()->getLogger()->info("Id del padre es " + $this->getValue('parent'));


      if ($this->getValue('parent'))

      {
      $parent = Doctrine_Core::getTable('Tarea')->find(array($this->getValue('parent')));
      // $parent = Doctrine::getTable('Tarea')->findOneById($this->getValue('parent'));
      if ($this->isNew())
      {
      $this->getObject()->getNode()->insertAsLastChildOf($parent);
      }
      else
      {
      $this->getObject()->getNode()->moveAsLastChildOf($parent);
      }
      }
      // if no parent was selected, add/move this node to be a new root in the tree
      else
      {
      $categoryTree = Doctrine::getTable('Tarea')->getTree();
      if ($this->isNew())
      {
      $categoryTree->createRoot($this->getObject());
      }
      else
      {
      $this->getObject()->getNode()->makeRoot($this->getObject()->getIdTarea());
      }
      }
      }
     */
}

