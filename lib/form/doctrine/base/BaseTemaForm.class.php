<?php

/**
 * Tema form base class.
 *
 * @method Tema getObject() Returns the current form's model object
 *
 * @package    gproject
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTemaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idTema'              => new sfWidgetFormInputHidden(),
      'tituloTema'          => new sfWidgetFormInputText(),
      'proyectoFK'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Proyecto'), 'add_empty' => false)),
      'usuarioFK'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usuario'), 'add_empty' => false)),
      'fecha_creacion'      => new sfWidgetFormDateTime(),
      'fecha_actualizacion' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'idTema'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idTema')), 'empty_value' => $this->getObject()->get('idTema'), 'required' => false)),
      'tituloTema'          => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'proyectoFK'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Proyecto'))),
      'usuarioFK'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Usuario'))),
      'fecha_creacion'      => new sfValidatorDateTime(),
      'fecha_actualizacion' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('tema[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tema';
  }

}
