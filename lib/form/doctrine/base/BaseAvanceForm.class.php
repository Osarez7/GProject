<?php

/**
 * Avance form base class.
 *
 * @method Avance getObject() Returns the current form's model object
 *
 * @package    gproject
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAvanceForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idAvance'          => new sfWidgetFormInputHidden(),
      'tituloAvance'      => new sfWidgetFormInputText(),
      'resumen'           => new sfWidgetFormInputText(),
      'fechaInicio'       => new sfWidgetFormDateTime(),
      'fechaFinal'        => new sfWidgetFormDateTime(),
      'tareaFK'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tarea'), 'add_empty' => false)),
      'fechaCreacion'     => new sfWidgetFormDateTime(),
      'fechaActulizacion' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'idAvance'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idAvance')), 'empty_value' => $this->getObject()->get('idAvance'), 'required' => false)),
      'tituloAvance'      => new sfValidatorString(array('max_length' => 150)),
      'resumen'           => new sfValidatorString(array('max_length' => 200)),
      'fechaInicio'       => new sfValidatorDateTime(),
      'fechaFinal'        => new sfValidatorDateTime(array('required' => false)),
      'tareaFK'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Tarea'))),
      'fechaCreacion'     => new sfValidatorDateTime(),
      'fechaActulizacion' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('avance[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Avance';
  }

}
