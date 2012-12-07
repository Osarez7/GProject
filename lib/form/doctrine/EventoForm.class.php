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
    
  // $this->widgetSchema['proyectoFK'] =   new sfWidgetFormInputText();
     
  $this->widgetSchema['proyectoFK'] = new sfWidgetFormInputHidden();

      $this->widgetSchema['fechaInicio'] = new sfWidgetFormDatePickerTime(array(
    'date' => array(
      'jq_picker_options' => array(
        'buttonImage' => '/images/calendar_view_month.png',
        'buttonImageOnly' => true,
        'showOn' => 'button'
      )
    ),
    'time' => array(
      'format_without_seconds' => '%hour% hora %minute% minutos' 
    )
));

                
                
          $this->widgetSchema['fechaFinal'] =   new sfWidgetFormDatePickerTime(array(
    'date' => array(
      'jq_picker_options' => array(
        'buttonImage' => '/images/calendar_view_month.png',
        'buttonImageOnly' => true,
        'showOn' => 'button'
      )
    ),
    'time' => array(
      'format_without_seconds' => '%hour% hora %minute% minutos' 
    )
));
 	

   $this->widgetSchema['descEvento'] = new sfWidgetFormTextarea();
   
   
     $this->widgetSchema->setLabels(array(
      'diaCompleto'      => 'Día Completo',
      'descEvento'           => 'Descripción',
      'fechaInicio'       => 'Fecha de Inicio',
      'fechaFinal'        => 'Fecha de Finalización',
     'nombreEvento' => 'Nombre del Evento'
    ));

   
  }
  
}
