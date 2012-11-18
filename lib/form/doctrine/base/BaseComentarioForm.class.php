<?php

/**
 * Comentario form base class.
 *
 * @method Comentario getObject() Returns the current form's model object
 *
 * @package    gproject
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseComentarioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idComentario'        => new sfWidgetFormInputHidden(),
      'contenidoComentario' => new sfWidgetFormInputText(),
      'usuarioFK'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usuario'), 'add_empty' => false)),
      'temaFK'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tema'), 'add_empty' => false)),
      'fecha_creacion'      => new sfWidgetFormDateTime(),
      'fecha_actualizacion' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'idComentario'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idComentario')), 'empty_value' => $this->getObject()->get('idComentario'), 'required' => false)),
      'contenidoComentario' => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'usuarioFK'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Usuario'))),
      'temaFK'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Tema'))),
      'fecha_creacion'      => new sfValidatorDateTime(),
      'fecha_actualizacion' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('comentario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Comentario';
  }

}
