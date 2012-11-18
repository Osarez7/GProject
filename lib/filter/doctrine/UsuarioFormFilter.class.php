<?php

/**
 * Usuario filter form.
 *
 * @package    gproject
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class UsuarioFormFilter extends BaseUsuarioFormFilter
{
  public function configure()
  {
  
    unset(
              $this['tarea_list'],$this['proyecto_list'],
              /* $this['fecha_creacion'],$this['fecha_actualizacion'],*/
               $this['password']
              
    );
     
 $this->widgetSchema['fecha_creacion'] =  new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormTextDateInputJQueryDatePicker(
              array('image'=> '/images/calendar_view_month.png',
		'include_time'=> false)), 'to_date' => new  sfWidgetFormTextDateInputJQueryDatePicker(
              array('image'=> '/images/calendar_view_month.png',
		'include_time'=> false)), 'with_empty' => false));


$this->widgetSchema['fecha_actualizacion'] =  new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormTextDateInputJQueryDatePicker(
              array('image'=> '/images/calendar_view_month.png',
		'include_time'=> false)), 'to_date' => new sfWidgetFormTextDateInputJQueryDatePicker(
              array('image'=> '/images/calendar_view_month.png',
		'include_time'=> false)), 'with_empty' => false));

  
     
     $this->widgetSchema->setLabels(array(
        'perfilFK' => 'Perfil',
        'usr_nombre' => 'Nombre',
        'usr_nombre' => 'Nombre',
        'usr_apellido1' => 'Primer Apellido',
        'usr_apellido2' => 'Segundo  Apellido',
        'email' => 'Correo el&eacute;ctronico',
        'usr_nick' => 'Nick',
    ));
 
  


   }
}
