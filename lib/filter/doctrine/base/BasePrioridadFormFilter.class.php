<?php

/**
 * Prioridad filter form base class.
 *
 * @package    gproject
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePrioridadFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombrePrioridad' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'nombrePrioridad' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('prioridad_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Prioridad';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'nombrePrioridad' => 'Text',
    );
  }
}
