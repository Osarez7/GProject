<?php

/**
 * Grupo_Usuario filter form base class.
 *
 * @package    gproject
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseGrupo_UsuarioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'usuario_idUsuario' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usuario'), 'add_empty' => true)),
      'grupo_idGrupo'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tarea'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'usuario_idUsuario' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Usuario'), 'column' => 'id')),
      'grupo_idGrupo'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Tarea'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('grupo_usuario_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Grupo_Usuario';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'usuario_idUsuario' => 'ForeignKey',
      'grupo_idGrupo'     => 'ForeignKey',
    );
  }
}
