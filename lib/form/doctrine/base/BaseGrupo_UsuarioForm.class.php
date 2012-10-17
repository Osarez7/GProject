<?php

/**
 * Grupo_Usuario form base class.
 *
 * @method Grupo_Usuario getObject() Returns the current form's model object
 *
 * @package    gproject
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseGrupo_UsuarioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'usuario' => new sfWidgetFormInputHidden(),
      'grupo'   => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'usuario' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('usuario')), 'empty_value' => $this->getObject()->get('usuario'), 'required' => false)),
      'grupo'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('grupo')), 'empty_value' => $this->getObject()->get('grupo'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('grupo_usuario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Grupo_Usuario';
  }

}
