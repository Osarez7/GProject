<?php

/**
 * Proyecto form.
 *
 * @package    gproject
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProyectoForm extends BaseProyectoForm
{
  public function configure()
  {
  unset(
      $this['fecha_actualizacion'], $this['fecha_creacion']
    );
    
   
 

 $this->widgetSchema['fechaInicio'] =  new sfWidgetFormTextDateInputJQueryDatePicker(
              array('image'=> '/images/calendar_view_month.png',
		'include_time'=> false));
		;

  
   $this->widgetSchema['descProyecto'] = new sfWidgetFormTextarea();
  }
}
