<?php

/**
 * Proyecto form base class.
 *
 * @method Proyecto getObject() Returns the current form's model object
 *
 * @package    gproject
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProyectoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idProyecto'          => new sfWidgetFormInputHidden(),
      'nombre'              => new sfWidgetFormInputText(),
      'fechaInicio'         => new sfWidgetFormDateTime(),
      'descProyecto'        => new sfWidgetFormInputText(),
      'statusFK'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Status'), 'add_empty' => false)),
      'prioridadFK'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Prioridad'), 'add_empty' => false)),
      'fecha_creacion'      => new sfWidgetFormDateTime(),
      'fecha_actualizacion' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'idProyecto'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idProyecto')), 'empty_value' => $this->getObject()->get('idProyecto'), 'required' => false)),
      'nombre'              => new sfValidatorString(array('max_length' => 50)),
      'fechaInicio'         => new sfValidatorDateTime(array('required' => false)),
      'descProyecto'        => new sfValidatorString(array('max_length' => 200)),
      'statusFK'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Status'))),
      'prioridadFK'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Prioridad'))),
      'fecha_creacion'      => new sfValidatorDateTime(),
      'fecha_actualizacion' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('proyecto[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Proyecto';
  }

}
