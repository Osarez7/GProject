<?php

/**
 * Usuario_Tarea form base class.
 *
 * @method Usuario_Tarea getObject() Returns the current form's model object
 *
 * @package    gproject
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUsuario_TareaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'usuario'             => new sfWidgetFormInputHidden(),
      'tarea'               => new sfWidgetFormInputHidden(),
      'fecha_asignacion'    => new sfWidgetFormDateTime(),
      'fecha_actualizacion' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'usuario'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('usuario')), 'empty_value' => $this->getObject()->get('usuario'), 'required' => false)),
      'tarea'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('tarea')), 'empty_value' => $this->getObject()->get('tarea'), 'required' => false)),
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
    return 'Usuario_Tarea';
  }

}
