<?php

/**
 * NivelPermiso form base class.
 *
 * @method NivelPermiso getObject() Returns the current form's model object
 *
 * @package    gproject
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseNivelPermisoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idNivelPermiso' => new sfWidgetFormInputHidden(),
      'codPersimo'     => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'idNivelPermiso' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idNivelPermiso')), 'empty_value' => $this->getObject()->get('idNivelPermiso'), 'required' => false)),
      'codPersimo'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('codPersimo')), 'empty_value' => $this->getObject()->get('codPersimo'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('nivel_permiso[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'NivelPermiso';
  }

}
