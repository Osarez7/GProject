<?php

/**
 * Usuario form.
 *
 * @package    gproject
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class UsuarioForm extends BaseUsuarioForm
{
  public function configure()
  {



     unset(
              $this['tarea_list'],$this['proyecto_list'],
               $this['fecha_creacion'],$this['fecha_actualizacion'],
               $this['password']
              
    );
     
     
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
