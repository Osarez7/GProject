<?php

/**
 * Grupo form base class.
 *
 * @method Grupo getObject() Returns the current form's model object
 *
 * @package    gproject
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseGrupoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idGrupo'     => new sfWidgetFormInputHidden(),
      'nombreGrupo' => new sfWidgetFormInputText(),
      'descGrupo'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idGrupo'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idGrupo')), 'empty_value' => $this->getObject()->get('idGrupo'), 'required' => false)),
      'nombreGrupo' => new sfValidatorString(array('max_length' => 100)),
      'descGrupo'   => new sfValidatorString(array('max_length' => 200)),
    ));

    $this->widgetSchema->setNameFormat('grupo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Grupo';
  }

}
