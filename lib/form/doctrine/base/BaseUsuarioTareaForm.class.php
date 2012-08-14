<?php

/**
 * UsuarioTarea form base class.
 *
 * @method UsuarioTarea getObject() Returns the current form's model object
 *
 * @package    gproject
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUsuarioTareaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idUsuario'           => new sfWidgetFormInputHidden(),
      'idTarea'             => new sfWidgetFormInputHidden(),
      'fecha_asignacion'    => new sfWidgetFormDateTime(),
      'fecha_actualizacion' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'idUsuario'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idUsuario')), 'empty_value' => $this->getObject()->get('idUsuario'), 'required' => false)),
      'idTarea'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idTarea')), 'empty_value' => $this->getObject()->get('idTarea'), 'required' => false)),
      'fecha_asignacion'    => new sfValidatorDateTime(),
      'fecha_actualizacion' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('usuario_tarea[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UsuarioTarea';
  }

}
