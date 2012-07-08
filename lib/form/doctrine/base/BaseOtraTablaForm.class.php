<?php

/**
 * OtraTabla form base class.
 *
 * @method OtraTabla getObject() Returns the current form's model object
 *
 * @package    gproject
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseOtraTablaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idOtra'     => new sfWidgetFormInputHidden(),
      'nombreOtra' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idOtra'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idOtra')), 'empty_value' => $this->getObject()->get('idOtra'), 'required' => false)),
      'nombreOtra' => new sfValidatorString(array('max_length' => 20)),
    ));

    $this->widgetSchema->setNameFormat('otra_tabla[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'OtraTabla';
  }

}
