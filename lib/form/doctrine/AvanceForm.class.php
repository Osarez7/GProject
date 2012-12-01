<?php

/**
 * Avance form.
 *
 * @package    gproject
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AvanceForm extends BaseAvanceForm
{
  public function configure()
  {
         
    
       $this->setWidget('tareaFK', new sfWidgetFormInputHidden());
       $this->widgetSchema['resumen'] = new sfWidgetFormTextarea();
     
     unset($this['fechaCreacion'], $this['fechaActulizacion']);
      
     $this->widgetSchema['fechaInicio'] =  new sfWidgetFormTextDateInputJQueryDatePicker(
              array('image'=> '/images/calendar_view_month.png',
		'include_time'=> true));
		;

  $this->widgetSchema['fechaFinal'] =  new sfWidgetFormTextDateInputJQueryDatePicker(
              array('image'=> '/images/calendar_view_month.png',
		'include_time'=> true));
		; 
        
                
                
        $this->widgetSchema->setLabels(array(
        'fechaInicio' => 'Fecha de Inicio',
        'fechaFinal' => 'Fecha Final',
        'diaCompleto' => 'Día Completo',
        'descEvento' => 'Descripción',
        'nombreEvento' => 'Nombre'      
    ));         
  }
}
