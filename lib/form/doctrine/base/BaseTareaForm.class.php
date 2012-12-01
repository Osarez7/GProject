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
      'fechaInicio'            => new sfWidgetFormDateTime(),
      'fechaFinal'             => new sfWidgetFormDateTime(),
      'horasEstimadas'         => new sfWidgetFormInputText(),
      'statusFK'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Status'), 'add_empty' => false)),
      'prioridadFK'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Prioridad'), 'add_empty' => false)),
      'proyectoFK'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Proyecto'), 'add_empty' => false)),
      'tar_fecha_creacion'     => new sfWidgetFormDateTime(),
      'tar_fecha_actulizacion' => new sfWidgetFormDateTime(),
      'root_id'                => new sfWidgetFormInputText(),
      'lft'                    => new sfWidgetFormInputText(),
      'rgt'                    => new sfWidgetFormInputText(),
      'level'                  => new sfWidgetFormInputText(),
      'usuario_list'           => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Usuario')),
    ));

    $this->setValidators(array(
      'idTarea'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idTarea')), 'empty_value' => $this->getObject()->get('idTarea'), 'required' => false)),
      'nombreTarea'            => new sfValidatorString(array('max_length' => 100)),
      'fechaInicio'            => new sfValidatorDateTime(),
      'fechaFinal'             => new sfValidatorDateTime(),
      'horasEstimadas'         => new sfValidatorNumber(),
      'statusFK'               => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Status'))),
      'prioridadFK'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Prioridad'))),
      'proyectoFK'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Proyecto'))),
      'tar_fecha_creacion'     => new sfValidatorDateTime(),
      'tar_fecha_actulizacion' => new sfValidatorDateTime(),
      'root_id'                => new sfValidatorInteger(array('required' => false)),
      'lft'                    => new sfValidatorInteger(array('required' => false)),
      'rgt'                    => new sfValidatorInteger(array('required' => false)),
      'level'                  => new sfValidatorInteger(array('required' => false)),
      'usuario_list'           => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Usuario', 'required' => false)),
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
