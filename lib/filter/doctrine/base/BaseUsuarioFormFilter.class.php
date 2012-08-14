<?php

/**
 * Usuario filter form base class.
 *
 * @package    gproject
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUsuarioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'perfilFK'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Perfil'), 'add_empty' => true)),
      'usr_nombre'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'usr_apellido1'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'usr_apellido2'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'email'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'usr_nick'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'password'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_creacion'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fecha_actualizacion' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'tarea_list'          => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Tarea')),
    ));

    $this->setValidators(array(
      'perfilFK'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Perfil'), 'column' => 'idPerfil')),
      'usr_nombre'          => new sfValidatorPass(array('required' => false)),
      'usr_apellido1'       => new sfValidatorPass(array('required' => false)),
      'usr_apellido2'       => new sfValidatorPass(array('required' => false)),
      'email'               => new sfValidatorPass(array('required' => false)),
      'usr_nick'            => new sfValidatorPass(array('required' => false)),
      'password'            => new sfValidatorPass(array('required' => false)),
      'fecha_creacion'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fecha_actualizacion' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'tarea_list'          => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Tarea', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('usuario_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addTareaListColumnQuery(Doctrine_Query $query, $field, $values)
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
      ->andWhereIn('UsuarioTarea.idTarea', $values)
    ;
  }

  public function getModelName()
  {
    return 'Usuario';
  }

  public function getFields()
  {
    return array(
      'idUsuario'           => 'Number',
      'perfilFK'            => 'ForeignKey',
      'usr_nombre'          => 'Text',
      'usr_apellido1'       => 'Text',
      'usr_apellido2'       => 'Text',
      'email'               => 'Text',
      'usr_nick'            => 'Text',
      'password'            => 'Text',
      'fecha_creacion'      => 'Date',
      'fecha_actualizacion' => 'Date',
      'tarea_list'          => 'ManyKey',
    );
  }
}
