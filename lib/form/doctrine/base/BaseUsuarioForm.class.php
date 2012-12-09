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
      'fotoPerfil'          => new sfWidgetFormInputText(),
      'email'               => new sfWidgetFormInputText(),
      'usr_nick'            => new sfWidgetFormInputText(),
      'password'            => new sfWidgetFormInputText(),
      'fecha_creacion'      => new sfWidgetFormDateTime(),
      'fecha_actualizacion' => new sfWidgetFormDateTime(),
      'tarea_list'          => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Tarea')),
      'proyecto_list'       => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Proyecto')),
    ));

    $this->setValidators(array(
      'idUsuario'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idUsuario')), 'empty_value' => $this->getObject()->get('idUsuario'), 'required' => false)),
      'perfilFK'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Perfil'))),
      'usr_nombre'          => new sfValidatorString(array('max_length' => 255)),
      'usr_apellido1'       => new sfValidatorString(array('max_length' => 255)),
      'usr_apellido2'       => new sfValidatorString(array('max_length' => 255)),
      'fotoPerfil'          => new sfValidatorString(array('max_length' => 255)),
      'email'               => new sfValidatorString(array('max_length' => 200)),
      'usr_nick'            => new sfValidatorString(array('max_length' => 200)),
      'password'            => new sfValidatorString(array('max_length' => 200)),
      'fecha_creacion'      => new sfValidatorDateTime(),
      'fecha_actualizacion' => new sfValidatorDateTime(),
      'tarea_list'          => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Tarea', 'required' => false)),
      'proyecto_list'       => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Proyecto', 'required' => false)),
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

    if (isset($this->widgetSchema['proyecto_list']))
    {
      $this->setDefault('proyecto_list', $this->object->Proyecto->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveTareaList($con);
    $this->saveProyectoList($con);

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

  public function saveProyectoList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['proyecto_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Proyecto->getPrimaryKeys();
    $values = $this->getValue('proyecto_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Proyecto', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Proyecto', array_values($link));
    }
  }

}
