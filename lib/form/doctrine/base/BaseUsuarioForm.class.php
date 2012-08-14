<?php

/**
 * Usuario form base class.
 *
 * @method Usuario getObject() Returns the current form's model object
 *
 * @package    gproject
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUsuarioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idUsuario'           => new sfWidgetFormInputHidden(),
      'perfilFK'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Perfil'), 'add_empty' => false)),
      'usr_nombre'          => new sfWidgetFormInputText(),
      'usr_apellido1'       => new sfWidgetFormInputText(),
      'usr_apellido2'       => new sfWidgetFormInputText(),
      'email'               => new sfWidgetFormInputText(),
      'usr_nick'            => new sfWidgetFormInputText(),
      'password'            => new sfWidgetFormInputText(),
      'fecha_creacion'      => new sfWidgetFormDateTime(),
      'fecha_actualizacion' => new sfWidgetFormDateTime(),
      'tarea_list'          => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Tarea')),
    ));

    $this->setValidators(array(
      'idUsuario'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idUsuario')), 'empty_value' => $this->getObject()->get('idUsuario'), 'required' => false)),
      'perfilFK'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Perfil'))),
      'usr_nombre'          => new sfValidatorString(array('max_length' => 50)),
      'usr_apellido1'       => new sfValidatorString(array('max_length' => 20)),
      'usr_apellido2'       => new sfValidatorString(array('max_length' => 20)),
      'email'               => new sfValidatorString(array('max_length' => 100)),
      'usr_nick'            => new sfValidatorString(array('max_length' => 20)),
      'password'            => new sfValidatorString(array('max_length' => 32)),
      'fecha_creacion'      => new sfValidatorDateTime(),
      'fecha_actualizacion' => new sfValidatorDateTime(),
      'tarea_list'          => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Tarea', 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Usuario', 'column' => array('usr_nick')))
    );

    $this->widgetSchema->setNameFormat('usuario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuario';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['tarea_list']))
    {
      $this->setDefault('tarea_list', $this->object->Tarea->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveTareaList($con);

    parent::doSave($con);
  }

  public function saveTareaList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['tarea_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Tarea->getPrimaryKeys();
    $values = $this->getValue('tarea_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Tarea', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Tarea', array_values($link));
    }
  }

}
