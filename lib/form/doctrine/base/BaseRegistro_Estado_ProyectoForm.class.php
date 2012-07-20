<?php

/**
 * Registro_Estado_Proyecto form base class.
 *
 * @method Registro_Estado_Proyecto getObject() Returns the current form's model object
 *
 * @package    gproject
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRegistro_Estado_ProyectoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idRegistroProyecto'  => new sfWidgetFormInputHidden(),
      'statusPK'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Status'), 'add_empty' => false)),
      'proyectoPK'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Proyecto'), 'add_empty' => false)),
      'fecha_cambio_estado' => new sfWidgetFormDateTime(),
      'updated_at'          => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'idRegistroProyecto'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idRegistroProyecto')), 'empty_value' => $this->getObject()->get('idRegistroProyecto'), 'required' => false)),
      'statusPK'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Status'))),
      'proyectoPK'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Proyecto'))),
      'fecha_cambio_estado' => new sfValidatorDateTime(),
      'updated_at'          => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('registro_estado_proyecto[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Registro_Estado_Proyecto';
  }

}
