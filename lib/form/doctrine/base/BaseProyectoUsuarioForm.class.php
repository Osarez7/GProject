<?php

/**
 * ProyectoUsuario form base class.
 *
 * @method ProyectoUsuario getObject() Returns the current form's model object
 *
 * @package    gproject
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProyectoUsuarioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idUsuario'  => new sfWidgetFormInputHidden(),
      'idProyecto' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'idUsuario'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idUsuario')), 'empty_value' => $this->getObject()->get('idUsuario'), 'required' => false)),
      'idProyecto' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idProyecto')), 'empty_value' => $this->getObject()->get('idProyecto'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('proyecto_usuario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProyectoUsuario';
  }

}
