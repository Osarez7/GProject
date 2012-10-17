<?php

/**
 * prioridad module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage prioridad
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasePrioridadGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array(  '_edit' => NULL,  '_delete' => NULL,);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%idPrioridad%% - %%nombrePrioridad%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Prioridad List';
  }

  public function getEditTitle()
  {
    return 'Edit Prioridad';
  }

  public function getNewTitle()
  {
    return 'New Prioridad';
  }

  public function getFilterDisplay()
  {
    return array();
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'idPrioridad',  1 => 'nombrePrioridad',);
  }

  public function getFieldsDefault()
  {
    return array(
      'idPrioridad' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'nombrePrioridad' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'idPrioridad' => array(),
      'nombrePrioridad' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'idPrioridad' => array(),
      'nombrePrioridad' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'idPrioridad' => array(),
      'nombrePrioridad' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'idPrioridad' => array(),
      'nombrePrioridad' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'idPrioridad' => array(),
      'nombrePrioridad' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'PrioridadForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'PrioridadFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 20;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getTableMethod()
  {
    return '';
  }

  public function getTableCountMethod()
  {
    return '';
  }
}
