<?php

/**
 * Avance filter form base class.
 *
 * @package    gproject
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAvanceFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tituloAvance'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'resumen'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'duracion'          => new sfWidgetFormFilterInput(),
      'fechaInicio'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fechaFinal'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'tareaFK'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tarea'), 'add_empty' => true)),
      'fechaCreacion'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fechaActulizacion' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'tituloAvance'      => new sfValidatorPass(array('required' => false)),
      'resumen'           => new sfValidatorPass(array('required' => false)),
      'duracion'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fechaInicio'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fechaFinal'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'tareaFK'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Tarea'), 'column' => 'idTarea')),
      'fechaCreacion'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fechaActulizacion' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('avance_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Avance';
  }

  public function getFields()
  {
    return array(
      'idAvance'          => 'Number',
      'tituloAvance'      => 'Text',
      'resumen'           => 'Text',
      'duracion'          => 'Number',
      'fechaInicio'       => 'Date',
      'fechaFinal'        => 'Date',
      'tareaFK'           => 'ForeignKey',
      'fechaCreacion'     => 'Date',
      'fechaActulizacion' => 'Date',
    );
  }
}
