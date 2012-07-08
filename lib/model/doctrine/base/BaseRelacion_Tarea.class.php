<?php

/**
 * BaseRelacion_Tarea
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $idRelacionTarea
 * @property timestamp $fecha_relacion
 * @property integer $tareaOrigen_idTarea
 * @property integer $tareaDestino_idTarea
 * @property integer $relacion_idRelacion
 * @property Tarea $Tarea
 * @property Relacion $Relacion
 * 
 * @method integer        getIdRelacionTarea()      Returns the current record's "idRelacionTarea" value
 * @method timestamp      getFechaRelacion()        Returns the current record's "fecha_relacion" value
 * @method integer        getTareaOrigenIdTarea()   Returns the current record's "tareaOrigen_idTarea" value
 * @method integer        getTareaDestinoIdTarea()  Returns the current record's "tareaDestino_idTarea" value
 * @method integer        getRelacionIdRelacion()   Returns the current record's "relacion_idRelacion" value
 * @method Tarea          getTarea()                Returns the current record's "Tarea" value
 * @method Relacion       getRelacion()             Returns the current record's "Relacion" value
 * @method Relacion_Tarea setIdRelacionTarea()      Sets the current record's "idRelacionTarea" value
 * @method Relacion_Tarea setFechaRelacion()        Sets the current record's "fecha_relacion" value
 * @method Relacion_Tarea setTareaOrigenIdTarea()   Sets the current record's "tareaOrigen_idTarea" value
 * @method Relacion_Tarea setTareaDestinoIdTarea()  Sets the current record's "tareaDestino_idTarea" value
 * @method Relacion_Tarea setRelacionIdRelacion()   Sets the current record's "relacion_idRelacion" value
 * @method Relacion_Tarea setTarea()                Sets the current record's "Tarea" value
 * @method Relacion_Tarea setRelacion()             Sets the current record's "Relacion" value
 * 
 * @package    gproject
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRelacion_Tarea extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('relacion__tarea');
        $this->hasColumn('idRelacionTarea', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('fecha_relacion', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
        $this->hasColumn('tareaOrigen_idTarea', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('tareaDestino_idTarea', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('relacion_idRelacion', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Tarea', array(
             'local' => 'tareaDestino_idTarea',
             'foreign' => 'idTarea',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Relacion', array(
             'local' => 'relacion_idRelacion',
             'foreign' => 'idRelacion',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}