<?php

/**
 * Relacion_Tarea form base class.
 *
 * @method Relacion_Tarea getObject() Returns the current form's model object
 *
 * @package    gproject
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRelacion_TareaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idRelacionTarea'      => new sfWidgetFormInputHidden(),
      'fecha_relacion'       => new sfWidgetFormDateTime(),
      'tareaOrigen_idTarea'  => new sfWidgetFormInputText(),
      'tareaDestino_idTarea' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tarea'), 'add_empty' => false)),
      'relacion_idRelacion'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Relacion'), 'add_empty' => false)),
      'created_at'           => new sfWidgetFormDateTime(),
      'updated_at'           => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'idRelacionTarea'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idRelacionTarea')), 'empty_value' => $this->getObject()->get('idRelacionTarea'), 'required' => false)),
      'fecha_relacion'       => new sfValidatorDateTime(),
      'tareaOrigen_idTarea'  => new sfValidatorInteger(),
      'tareaDestino_idTarea' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Tarea'))),
      'relacion_idRelacion'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Relacion'))),
      'created_at'           => new sfValidatorDateTime(),
      'updated_at'           => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('relacion_tarea[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Relacion_Tarea';
  }

}
