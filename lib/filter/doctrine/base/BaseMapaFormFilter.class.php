<?php

/**
 * Mapa filter form base class.
 *
 * @package    gproject
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMapaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombreMapa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descMapa'   => new sfWidgetFormFilterInput(),
      'proyectoFK' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Proyecto'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'nombreMapa' => new sfValidatorPass(array('required' => false)),
      'descMapa'   => new sfValidatorPass(array('required' => false)),
      'proyectoFK' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Proyecto'), 'column' => 'idProyecto')),
    ));

    $this->widgetSchema->setNameFormat('mapa_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Mapa';
  }

  public function getFields()
  {
    return array(
      'idMapa'     => 'Number',
      'nombreMapa' => 'Text',
      'descMapa'   => 'Text',
      'proyectoFK' => 'ForeignKey',
    );
  }
}
