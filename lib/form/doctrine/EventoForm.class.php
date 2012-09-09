<?php

/**
 * Evento form.
 *
 * @package    gproject
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class EventoForm extends BaseEventoForm
{
  public function configure()
  {
unset(
      $this['fecha_actualizacion'], $this['fecha_creacion']
    );
    
   
     
      $this->widgetSchema['fechaInicio'] =  new sfWidgetFormTextDateInputJQueryDatePicker(
              array('image'=> '/images/toggle-expand-dark.png',
		'include_time'=> true));
		;

          $this->widgetSchema['fechaFinal'] =   new sfWidgetFormDatePickerTime();
 	

   $this->widgetSchema['descEvento'] = new sfWidgetFormTextarea();
  }
  
}
