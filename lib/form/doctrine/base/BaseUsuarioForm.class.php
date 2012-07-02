<?php

/**
 * Usuario form base class.
 *
 * @method Usuario getObject() Returns the current form's model object
 *
 * @package    gproject
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUsuarioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'tipo_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tipo_usuario'), 'add_empty' => false)),
      'usr_nombre'    => new sfWidgetFormInputText(),
      'usr_apellido1' => new sfWidgetFormInputText(),
      'usr_apellido2' => new sfWidgetFormInputText(),
      'email'         => new sfWidgetFormInputText(),
      'usr_nick'      => new sfWidgetFormInputText(),
      'password'      => new sfWidgetFormInputText(),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'tipo_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Tipo_usuario'))),
      'usr_nombre'    => new sfValidatorString(array('max_length' => 50)),
      'usr_apellido1' => new sfValidatorString(array('max_length' => 20)),
      'usr_apellido2' => new sfValidatorString(array('max_length' => 20)),
      'email'         => new sfValidatorString(array('max_length' => 100)),
      'usr_nick'      => new sfValidatorString(array('max_length' => 20)),
      'password'      => new sfValidatorString(array('max_length' => 32)),
      'created_at'    => new sfValidatorDateTime(),
      'updated_at'    => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Usuario', 'column' => array('usr_nick')))
    );

    $this->widgetSchema->setNameFormat('usuario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuario';
  }

}
