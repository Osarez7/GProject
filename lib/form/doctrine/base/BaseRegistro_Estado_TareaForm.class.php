<?php

/**
 * Registro_Estado_Tarea form base class.
 *
 * @method Registro_Estado_Tarea getObject() Returns the current form's model object
 *
 * @package    gproject
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRegistro_Estado_TareaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idRegistroTarea'     => new sfWidgetFormInputHidden(),
      'statusFK'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Status'), 'add_empty' => false)),
      'tareaFK'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tarea'), 'add_empty' => false)),
      'fecha_cambio_estado' => new sfWidgetFormDateTime(),
      'updated_at'          => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'idRegistroTarea'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idRegistroTarea')), 'empty_value' => $this->getObject()->get('idRegistroTarea'), 'required' => false)),
      'statusFK'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Status'))),
      'tareaFK'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Tarea'))),
      'fecha_cambio_estado' => new sfValidatorDateTime(),
      'updated_at'          => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('registro_estado_tarea[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Registro_Estado_Tarea';
  }

}
