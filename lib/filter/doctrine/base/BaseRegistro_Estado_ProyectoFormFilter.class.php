<?php

/**
 * Registro_Estado_Proyecto filter form base class.
 *
 * @package    gproject
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRegistro_Estado_ProyectoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'statusFK'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Status'), 'add_empty' => true)),
      'proyectoFK'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Proyecto'), 'add_empty' => true)),
      'fecha_cambio_estado' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'statusFK'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Status'), 'column' => 'idStatus')),
      'proyectoFK'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Proyecto'), 'column' => 'idProyecto')),
      'fecha_cambio_estado' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('registro_estado_proyecto_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Registro_Estado_Proyecto';
  }

  public function getFields()
  {
    return array(
      'idRegistroProyecto'  => 'Number',
      'statusFK'            => 'ForeignKey',
      'proyectoFK'          => 'ForeignKey',
      'fecha_cambio_estado' => 'Date',
      'updated_at'          => 'Date',
    );
  }
}
