<?php

/**
 * tema module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage tema
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTemaGeneratorConfiguration extends sfModelGeneratorConfiguration
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
    return '%%idTema%% - %%tituloTema%% - %%proyectoFK%% - %%usuarioFK%% - %%fecha_creacion%% - %%fecha_actualizacion%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Tema List';
  }

  public function getEditTitle()
  {
    return 'Edit Tema';
  }

  public function getNewTitle()
  {
    return 'New Tema';
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
    return array(  0 => 'idTema',  1 => 'tituloTema',  2 => 'proyectoFK',  3 => 'usuarioFK',  4 => 'fecha_creacion',  5 => 'fecha_actualizacion',);
  }

  public function getFieldsDefault()
  {
    return array(
      'idTema' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'tituloTema' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'proyectoFK' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'usuarioFK' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'fecha_creacion' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'fecha_actualizacion' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'idTema' => array(),
      'tituloTema' => array(),
      'proyectoFK' => array(),
      'usuarioFK' => array(),
      'fecha_creacion' => array(),
      'fecha_actualizacion' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'idTema' => array(),
      'tituloTema' => array(),
      'proyectoFK' => array(),
      'usuarioFK' => array(),
      'fecha_creacion' => array(),
      'fecha_actualizacion' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'idTema' => array(),
      'tituloTema' => array(),
      'proyectoFK' => array(),
      'usuarioFK' => array(),
      'fecha_creacion' => array(),
      'fecha_actualizacion' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'idTema' => array(),
      'tituloTema' => array(),
      'proyectoFK' => array(),
      'usuarioFK' => array(),
      'fecha_creacion' => array(),
      'fecha_actualizacion' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'idTema' => array(),
      'tituloTema' => array(),
      'proyectoFK' => array(),
      'usuarioFK' => array(),
      'fecha_creacion' => array(),
      'fecha_actualizacion' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'TemaForm';
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
    return 'TemaFormFilter';
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
