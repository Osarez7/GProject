<?php

/**
 * Lugar filter form base class.
 *
 * @package    gproject
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseLugarFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tituloLugar' => new sfWidgetFormFilterInput(),
      'infoLugar'   => new sfWidgetFormFilterInput(),
      'mapaFK'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Mapa'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'tituloLugar' => new sfValidatorPass(array('required' => false)),
      'infoLugar'   => new sfValidatorPass(array('required' => false)),
      'mapaFK'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Mapa'), 'column' => 'idMapa')),
    ));

    $this->widgetSchema->setNameFormat('lugar_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Lugar';
  }

  public function getFields()
  {
    return array(
      'idLugar'     => 'Number',
      'tituloLugar' => 'Text',
      'infoLugar'   => 'Text',
      'mapaFK'      => 'ForeignKey',
    );
  }
}
