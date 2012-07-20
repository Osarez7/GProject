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
      'idTarea'                => new sfWidgetFormInputHidden(),
      'nombreTarea'            => new sfWidgetFormInputText(),
      'duracion'               => new sfWidgetFormInputText(),
      'statusPK'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Status'), 'add_empty' => false)),
      'prioridadPK'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Prioridad'), 'add_empty' => false)),
      'grupoPK'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Grupo'), 'add_empty' => true)),
      'proyectoPK'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Proyecto'), 'add_empty' => false)),
      'tar_fecha_creacion'     => new sfWidgetFormDateTime(),
      'tar_fecha_actulizacion' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'idTarea'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idTarea')), 'empty_value' => $this->getObject()->get('idTarea'), 'required' => false)),
      'nombreTarea'            => new sfValidatorString(array('max_length' => 50)),
      'duracion'               => new sfValidatorInteger(),
      'statusPK'               => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Status'))),
      'prioridadPK'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Prioridad'))),
      'grupoPK'                => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Grupo'), 'required' => false)),
      'proyectoPK'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Proyecto'))),
      'tar_fecha_creacion'     => new sfValidatorDateTime(),
      'tar_fecha_actulizacion' => new sfValidatorDateTime(),
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
