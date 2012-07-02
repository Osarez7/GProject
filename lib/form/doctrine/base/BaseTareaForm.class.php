<?php

/**
 * Tarea form base class.
 *
 * @method Tarea getObject() Returns the current form's model object
 *
 * @package    gproject
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTareaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'tar_nombre'             => new sfWidgetFormInputText(),
      'tar_estado'             => new sfWidgetFormInputText(),
      'tar_fecha_creacion'     => new sfWidgetFormDateTime(),
      'tar_fecha_actulizacion' => new sfWidgetFormDateTime(),
      'idStatus'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Status'), 'add_empty' => false)),
      'idPrioridad'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Prioridad'), 'add_empty' => false)),
      'idGrupo'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Grupo'), 'add_empty' => false)),
      'idProyecto'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Proyecto'), 'add_empty' => false)),
      'created_at'             => new sfWidgetFormDateTime(),
      'updated_at'             => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'tar_nombre'             => new sfValidatorString(array('max_length' => 50)),
      'tar_estado'             => new sfValidatorString(array('max_length' => 50)),
      'tar_fecha_creacion'     => new sfValidatorDateTime(),
      'tar_fecha_actulizacion' => new sfValidatorDateTime(),
      'idStatus'               => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Status'))),
      'idPrioridad'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Prioridad'))),
      'idGrupo'                => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Grupo'))),
      'idProyecto'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Proyecto'))),
      'created_at'             => new sfValidatorDateTime(),
      'updated_at'             => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('tarea[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tarea';
  }

}
