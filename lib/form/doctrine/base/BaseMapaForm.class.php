<?php

/**
 * Mapa form base class.
 *
 * @method Mapa getObject() Returns the current form's model object
 *
 * @package    gproject
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMapaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idMapa'     => new sfWidgetFormInputHidden(),
      'nombreMapa' => new sfWidgetFormInputText(),
      'descMapa'   => new sfWidgetFormTextarea(),
      'proyectoFK' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Proyecto'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'idMapa'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idMapa')), 'empty_value' => $this->getObject()->get('idMapa'), 'required' => false)),
      'nombreMapa' => new sfValidatorString(array('max_length' => 255)),
      'descMapa'   => new sfValidatorString(array('max_length' => 4000, 'required' => false)),
      'proyectoFK' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Proyecto'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('mapa[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Mapa';
  }

}
