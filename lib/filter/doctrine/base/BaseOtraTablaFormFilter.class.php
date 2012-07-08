<?php

/**
 * OtraTabla filter form base class.
 *
 * @package    gproject
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseOtraTablaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombreOtra' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'nombreOtra' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('otra_tabla_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'OtraTabla';
  }

  public function getFields()
  {
    return array(
      'idOtra'     => 'Number',
      'nombreOtra' => 'Text',
    );
  }
}
