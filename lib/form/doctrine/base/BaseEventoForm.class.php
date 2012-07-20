<?php

/**
 * Evento form base class.
 *
 * @method Evento getObject() Returns the current form's model object
 *
 * @package    gproject
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEventoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idEvento'            => new sfWidgetFormInputHidden(),
      'fechaEvento'         => new sfWidgetFormDateTime(),
      'nombreEvento'        => new sfWidgetFormInputText(),
      'descEvento'          => new sfWidgetFormInputText(),
      'proyectoPK'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Proyecto'), 'add_empty' => false)),
      'fecha_cambio_estado' => new sfWidgetFormDateTime(),
      'fecha_actualizacion' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'idEvento'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idEvento')), 'empty_value' => $this->getObject()->get('idEvento'), 'required' => false)),
      'fechaEvento'         => new sfValidatorDateTime(),
      'nombreEvento'        => new sfValidatorString(array('max_length' => 50)),
      'descEvento'          => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'proyectoPK'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Proyecto'))),
      'fecha_cambio_estado' => new sfValidatorDateTime(),
      'fecha_actualizacion' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('evento[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Evento';
  }

}
