<?php

/**
 * usuario module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage usuario
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseUsuarioGeneratorConfiguration extends sfModelGeneratorConfiguration
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
    return array(  '_edit' => NULL,  '_delete' => NULL,  'inactivar' => NULL,);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' =>   array(    'label' => 'Eliminar',  ),  'inactivar' => NULL,);
  }

  public function getListParams()
  {
    return '%%=usr_nombre%% - %%email%% - %%usr_nick%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Usuarios';
  }

  public function getEditTitle()
  {
    return 'Editar Usuario';
  }

  public function getNewTitle()
  {
    return 'Nuevo Usuario';
  }

  public function getFilterDisplay()
  {
    return array(  0 => 'idUsuario',  1 => 'perfilFK',  2 => 'usr_nombre',  3 => 'usr_apellido1',  4 => 'usr_apellido2',  5 => 'email',  6 => 'usr_nick',);
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
    return array(  0 => '=usr_nombre',  1 => 'email',  2 => 'usr_nick',);
  }

  public function getFieldsDefault()
  {
    return array(
      'idUsuario' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'perfilFK' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'usr_nombre' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Nombre',),
      'usr_apellido1' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'usr_apellido2' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'fotoPerfil' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'email' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'usr_nick' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Nickname',),
      'password' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'fecha_creacion' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'fecha_actualizacion' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'tarea_list' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'proyecto_list' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'idUsuario' => array(),
      'perfilFK' => array(),
      'usr_nombre' => array(),
      'usr_apellido1' => array(),
      'usr_apellido2' => array(),
      'fotoPerfil' => array(),
      'email' => array(),
      'usr_nick' => array(),
      'password' => array(),
      'fecha_creacion' => array(),
      'fecha_actualizacion' => array(),
      'tarea_list' => array(),
      'proyecto_list' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'idUsuario' => array(),
      'perfilFK' => array(),
      'usr_nombre' => array(),
      'usr_apellido1' => array(),
      'usr_apellido2' => array(),
      'fotoPerfil' => array(),
      'email' => array(),
      'usr_nick' => array(),
      'password' => array(),
      'fecha_creacion' => array(),
      'fecha_actualizacion' => array(),
      'tarea_list' => array(),
      'proyecto_list' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'idUsuario' => array(),
      'perfilFK' => array(),
      'usr_nombre' => array(),
      'usr_apellido1' => array(),
      'usr_apellido2' => array(),
      'fotoPerfil' => array(),
      'email' => array(),
      'usr_nick' => array(),
      'password' => array(),
      'fecha_creacion' => array(),
      'fecha_actualizacion' => array(),
      'tarea_list' => array(),
      'proyecto_list' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'idUsuario' => array(),
      'perfilFK' => array(),
      'usr_nombre' => array(),
      'usr_apellido1' => array(),
      'usr_apellido2' => array(),
      'fotoPerfil' => array(),
      'email' => array(),
      'usr_nick' => array(),
      'password' => array(),
      'fecha_creacion' => array(),
      'fecha_actualizacion' => array(),
      'tarea_list' => array(),
      'proyecto_list' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'idUsuario' => array(),
      'perfilFK' => array(),
      'usr_nombre' => array(),
      'usr_apellido1' => array(),
      'usr_apellido2' => array(),
      'fotoPerfil' => array(),
      'email' => array(),
      'usr_nick' => array(),
      'password' => array(),
      'fecha_creacion' => array(),
      'fecha_actualizacion' => array(),
      'tarea_list' => array(),
      'proyecto_list' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'BackendUsuarioForm';
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
    return 'UsuarioFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 10;
  }

  public function getDefaultSort()
  {
    return array('usr_nombre', 'desc');
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
