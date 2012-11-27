<?php

/**
 * Lugar form base class.
 *
 * @method Lugar getObject() Returns the current form's model object
 *
 * @package    gproject
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseLugarForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idLugar'     => new sfWidgetFormInputHidden(),
      'tituloLugar' => new sfWidgetFormInputText(),
      'infoLugar'   => new sfWidgetFormInputText(),
      'latitud'     => new sfWidgetFormInputText(),
      'longitud'    => new sfWidgetFormInputText(),
      'mapaFK'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Mapa'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'idLugar'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idLugar')), 'empty_value' => $this->getObject()->get('idLugar'), 'required' => false)),
      'tituloLugar' => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'infoLugar'   => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'latitud'     => new sfValidatorNumber(),
      'longitud'    => new sfValidatorNumber(),
      'mapaFK'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Mapa'))),
    ));

    $this->widgetSchema->setNameFormat('lugar[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Lugar';
  }

}
