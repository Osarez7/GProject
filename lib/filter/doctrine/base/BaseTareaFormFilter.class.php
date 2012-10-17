<?php

/**
 * Tarea filter form base class.
 *
 * @package    gproject
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTareaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombreTarea'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fechaInicio'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fechaFinal'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'statusFK'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Status'), 'add_empty' => true)),
      'prioridadFK'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Prioridad'), 'add_empty' => true)),
      'proyectoFK'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Proyecto'), 'add_empty' => true)),
      'tar_fecha_creacion'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'tar_fecha_actulizacion' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'root_id'                => new sfWidgetFormFilterInput(),
      'lft'                    => new sfWidgetFormFilterInput(),
      'rgt'                    => new sfWidgetFormFilterInput(),
      'level'                  => new sfWidgetFormFilterInput(),
      'usuario_list'           => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Usuario')),
    ));

    $this->setValidators(array(
      'nombreTarea'            => new sfValidatorPass(array('required' => false)),
      'fechaInicio'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fechaFinal'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'statusFK'               => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Status'), 'column' => 'idStatus')),
      'prioridadFK'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Prioridad'), 'column' => 'idPrioridad')),
      'proyectoFK'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Proyecto'), 'column' => 'idProyecto')),
      'tar_fecha_creacion'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'tar_fecha_actulizacion' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'root_id'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'lft'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'rgt'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'level'                  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'usuario_list'           => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Usuario', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tarea_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addUsuarioListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.UsuarioTarea UsuarioTarea')
      ->andWhereIn('UsuarioTarea.idUsuario', $values)
    ;
  }

  public function getModelName()
  {
    return 'Tarea';
  }

  public function getFields()
  {
    return array(
      'idTarea'                => 'Number',
      'nombreTarea'            => 'Text',
      'fechaInicio'            => 'Date',
      'fechaFinal'             => 'Date',
      'statusFK'               => 'ForeignKey',
      'prioridadFK'            => 'ForeignKey',
      'proyectoFK'             => 'ForeignKey',
      'tar_fecha_creacion'     => 'Date',
      'tar_fecha_actulizacion' => 'Date',
      'root_id'                => 'Number',
      'lft'                    => 'Number',
      'rgt'                    => 'Number',
      'level'                  => 'Number',
      'usuario_list'           => 'ManyKey',
    );
  }
}
