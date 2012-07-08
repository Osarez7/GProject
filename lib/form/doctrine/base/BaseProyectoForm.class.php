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
      'idProyecto'            => new sfWidgetFormInputHidden(),
      'nombre'                => new sfWidgetFormInputText(),
      'tiempo_estimado'       => new sfWidgetFormInputText(),
      'fecha_cracion'         => new sfWidgetFormDateTime(),
      'fecha_actualizacion'   => new sfWidgetFormDateTime(),
      'descProyecto'          => new sfWidgetFormInputText(),
      'status_idStatus'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Status'), 'add_empty' => false)),
      'prioridad_idPrioridad' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Prioridad'), 'add_empty' => false)),
      'created_at'            => new sfWidgetFormDateTime(),
      'updated_at'            => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'idProyecto'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idProyecto')), 'empty_value' => $this->getObject()->get('idProyecto'), 'required' => false)),
      'nombre'                => new sfValidatorString(array('max_length' => 50)),
      'tiempo_estimado'       => new sfValidatorInteger(),
      'fecha_cracion'         => new sfValidatorDateTime(),
      'fecha_actualizacion'   => new sfValidatorDateTime(),
      'descProyecto'          => new sfValidatorNumber(),
      'status_idStatus'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Status'))),
      'prioridad_idPrioridad' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Prioridad'))),
      'created_at'            => new sfValidatorDateTime(),
      'updated_at'            => new sfValidatorDateTime(),
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
