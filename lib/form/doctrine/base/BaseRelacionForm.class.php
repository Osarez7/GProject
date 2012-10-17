<?php

/**
 * Relacion form base class.
 *
 * @method Relacion getObject() Returns the current form's model object
 *
 * @package    gproject
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRelacionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idRelacion'    => new sfWidgetFormInputHidden(),
      'nombreRelaion' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idRelacion'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idRelacion')), 'empty_value' => $this->getObject()->get('idRelacion'), 'required' => false)),
      'nombreRelaion' => new sfValidatorString(array('max_length' => 50)),
    ));

    $this->widgetSchema->setNameFormat('relacion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Relacion';
  }

}
