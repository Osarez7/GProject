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
      'fechaInicio'         => new sfWidgetFormDateTime(),
      'fechaFinal'          => new sfWidgetFormDateTime(),
      'diaCompleto'         => new sfWidgetFormInputCheckbox(),
      'nombreEvento'        => new sfWidgetFormInputText(),
      'descEvento'          => new sfWidgetFormInputText(),
      'proyectoFK'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Proyecto'), 'add_empty' => false)),
      'fecha_creacion'      => new sfWidgetFormDateTime(),
      'fecha_actualizacion' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'idEvento'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idEvento')), 'empty_value' => $this->getObject()->get('idEvento'), 'required' => false)),
      'fechaInicio'         => new sfValidatorDateTime(),
      'fechaFinal'          => new sfValidatorDateTime(),
      'diaCompleto'         => new sfValidatorBoolean(array('required' => false)),
      'nombreEvento'        => new sfValidatorString(array('max_length' => 50)),
      'descEvento'          => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'proyectoFK'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Proyecto'))),
      'fecha_creacion'      => new sfValidatorDateTime(),
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
