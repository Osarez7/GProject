<?php

/**
 * Tipo_usuario form base class.
 *
 * @method Tipo_usuario getObject() Returns the current form's model object
 *
 * @package    gproject
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTipo_usuarioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idTipoUsuario' => new sfWidgetFormInputHidden(),
      'tipo_nombre'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idTipoUsuario' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idTipoUsuario')), 'empty_value' => $this->getObject()->get('idTipoUsuario'), 'required' => false)),
      'tipo_nombre'   => new sfValidatorString(array('max_length' => 50)),
    ));

    $this->widgetSchema->setNameFormat('tipo_usuario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tipo_usuario';
  }

}
