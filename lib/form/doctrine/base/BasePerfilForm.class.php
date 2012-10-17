<?php

/**
 * Perfil form base class.
 *
 * @method Perfil getObject() Returns the current form's model object
 *
 * @package    gproject
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePerfilForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idPerfil'     => new sfWidgetFormInputHidden(),
      'perfilNombre' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idPerfil'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idPerfil')), 'empty_value' => $this->getObject()->get('idPerfil'), 'required' => false)),
      'perfilNombre' => new sfValidatorString(array('max_length' => 50)),
    ));

    $this->widgetSchema->setNameFormat('perfil[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Perfil';
  }

}
