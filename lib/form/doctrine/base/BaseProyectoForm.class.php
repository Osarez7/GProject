<?php

/**
 * Proyecto form base class.
 *
 * @method Proyecto getObject() Returns the current form's model object
 *
 * @package    gproject
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProyectoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idProyecto'          => new sfWidgetFormInputHidden(),
      'nombre'              => new sfWidgetFormInputText(),
      'fechaInicio'         => new sfWidgetFormDateTime(),
      'diasEstimados'       => new sfWidgetFormInputText(),
      'descProyecto'        => new sfWidgetFormInputText(),
      'statusFK'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Status'), 'add_empty' => false)),
      'prioridadFK'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Prioridad'), 'add_empty' => false)),
      'fecha_creacion'      => new sfWidgetFormDateTime(),
      'fecha_actualizacion' => new sfWidgetFormDateTime(),
      'usuario_list'        => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Usuario')),
    ));

    $this->setValidators(array(
      'idProyecto'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idProyecto')), 'empty_value' => $this->getObject()->get('idProyecto'), 'required' => false)),
      'nombre'              => new sfValidatorString(array('max_length' => 100)),
      'fechaInicio'         => new sfValidatorDateTime(),
      'diasEstimados'       => new sfValidatorInteger(),
      'descProyecto'        => new sfValidatorString(array('max_length' => 200)),
      'statusFK'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Status'))),
      'prioridadFK'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Prioridad'))),
      'fecha_creacion'      => new sfValidatorDateTime(),
      'fecha_actualizacion' => new sfValidatorDateTime(),
      'usuario_list'        => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Usuario', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('proyecto[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Proyecto';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['usuario_list']))
    {
      $this->setDefault('usuario_list', $this->object->Usuario->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveUsuarioList($con);

    parent::doSave($con);
  }

  public function saveUsuarioList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['usuario_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Usuario->getPrimaryKeys();
    $values = $this->getValue('usuario_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Usuario', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Usuario', array_values($link));
    }
  }

}
