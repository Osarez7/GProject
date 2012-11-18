<?php

/**
 * BasePrioridad
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $idPrioridad
 * @property string $nombrePrioridad
 * @property Doctrine_Collection $Proyectos
 * @property Doctrine_Collection $Tareas
 * 
 * @method integer             getIdPrioridad()     Returns the current record's "idPrioridad" value
 * @method string              getNombrePrioridad() Returns the current record's "nombrePrioridad" value
 * @method Doctrine_Collection getProyectos()       Returns the current record's "Proyectos" collection
 * @method Doctrine_Collection getTareas()          Returns the current record's "Tareas" collection
 * @method Prioridad           setIdPrioridad()     Sets the current record's "idPrioridad" value
 * @method Prioridad           setNombrePrioridad() Sets the current record's "nombrePrioridad" value
 * @method Prioridad           setProyectos()       Sets the current record's "Proyectos" collection
 * @method Prioridad           setTareas()          Sets the current record's "Tareas" collection
 * 
 * @package    gproject
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePrioridad extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('prioridad');
        $this->hasColumn('idPrioridad', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('nombrePrioridad', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Proyecto as Proyectos', array(
             'local' => 'idPrioridad',
             'foreign' => 'prioridadFK'));

        $this->hasMany('Tarea as Tareas', array(
             'local' => 'idPrioridad',
             'foreign' => 'prioridadFK'));
    }
}