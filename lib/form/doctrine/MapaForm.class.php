<?php

/**
 * Mapa form.
 *
 * @package    gproject
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class MapaForm extends BaseMapaForm
{
  public function configure()
  {
  

   $this->widgetSchema['descMapa'] = new sfWidgetFormTextarea();
   $this->widgetSchema->setLabel('descMapa','Descripcion');

   $this->setWidget('proyectoFK',new  sfWidgetFormInputHidden());
   //    $this->setWidget('proyectoFK',  new sfWidgetFormInputText());


 $this->widgetSchema->setLabels(array(
        'tituloLugar' => 'Título',
      'infoLugar' => 'Descripción'          
    ));
  }
}
