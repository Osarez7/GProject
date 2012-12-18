<?php

/**
 * Lugar form.
 *
 * @package    gproject
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class LugarForm extends BaseLugarForm
{
  public function configure()
  {
  
 $this->setWidget('mapaFK',new  sfWidgetFormInputHidden());
 $this->setWidget('latitud',new  sfWidgetFormInputHidden());
 $this->setWidget('longitud',new  sfWidgetFormInputHidden());



     $this->widgetSchema->setLabels(array(
      'diaCompleto'      => 'Día Completo',
      'descEvento'           => 'Descripción',
      'fechaInicio'       => 'Fecha de Inicio',
      'fechaFinal'        => 'Fecha de Finalización',
     'nombreEvento' => 'Nombre del Evento'
    ));

}

}
