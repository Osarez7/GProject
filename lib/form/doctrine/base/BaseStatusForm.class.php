<?php

/**
 * Status form base class.
 *
 * @method Status getObject() Returns the current form's model object
 *
 * @package    gproject
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseStatusForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idStatus'     => new sfWidgetFormInputHidden(),
      'nombreStatus' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idStatus'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idStatus')), 'empty_value' => $this->getObject()->get('idStatus'), 'required' => false)),
      'nombreStatus' => new sfValidatorString(array('max_length' => 50)),
    ));

    $this->widgetSchema->setNameFormat('status[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Status';
  }

}
