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
      'usuario_id' => new sfWidgetFormInputHidden(),
      'tarea_id'   => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'usuario_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('usuario_id')), 'empty_value' => $this->getObject()->get('usuario_id'), 'required' => false)),
      'tarea_id'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('tarea_id')), 'empty_value' => $this->getObject()->get('tarea_id'), 'required' => false)),
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
