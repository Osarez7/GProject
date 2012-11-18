<?php

/**
 * Prioridad form base class.
 *
 * @method Prioridad getObject() Returns the current form's model object
 *
 * @package    gproject
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePrioridadForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idPrioridad'     => new sfWidgetFormInputHidden(),
      'nombrePrioridad' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idPrioridad'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idPrioridad')), 'empty_value' => $this->getObject()->get('idPrioridad'), 'required' => false)),
      'nombrePrioridad' => new sfValidatorString(array('max_length' => 100)),
    ));

    $this->widgetSchema->setNameFormat('prioridad[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Prioridad';
  }

}
