<?php

/**
 * BaseProyecto
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $nombre
 * @property integer $tiempo_estimado
 * @property timestamp $fecha_cracion
 * @property timestamp $fecha_actualizacion
 * @property float $descProyecto
 * @property integer $idStatus
 * @property integer $idPrioridad
 * @property Status $Status
 * @property Prioridad $Prioridad
 * @property Doctrine_Collection $Tareas
 * @property Doctrine_Collection $RegistroEstados
 * @property Doctrine_Collection $Eventos
 * 
 * @method string              getNombre()              Returns the current record's "nombre" value
 * @method integer             getTiempoEstimado()      Returns the current record's "tiempo_estimado" value
 * @method timestamp           getFechaCracion()        Returns the current record's "fecha_cracion" value
 * @method timestamp           getFechaActualizacion()  Returns the current record's "fecha_actualizacion" value
 * @method float               getDescProyecto()        Returns the current record's "descProyecto" value
 * @method integer             getIdStatus()            Returns the current record's "idStatus" value
 * @method integer             getIdPrioridad()         Returns the current record's "idPrioridad" value
 * @method Status              getStatus()              Returns the current record's "Status" value
 * @method Prioridad           getPrioridad()           Returns the current record's "Prioridad" value
 * @method Doctrine_Collection getTareas()              Returns the current record's "Tareas" collection
 * @method Doctrine_Collection getRegistroEstados()     Returns the current record's "RegistroEstados" collection
 * @method Doctrine_Collection getEventos()             Returns the current record's "Eventos" collection
 * @method Proyecto            setNombre()              Sets the current record's "nombre" value
 * @method Proyecto            setTiempoEstimado()      Sets the current record's "tiempo_estimado" value
 * @method Proyecto            setFechaCracion()        Sets the current record's "fecha_cracion" value
 * @method Proyecto            setFechaActualizacion()  Sets the current record's "fecha_actualizacion" value
 * @method Proyecto            setDescProyecto()        Sets the current record's "descProyecto" value
 * @method Proyecto            setIdStatus()            Sets the current record's "idStatus" value
 * @method Proyecto            setIdPrioridad()         Sets the current record's "idPrioridad" value
 * @method Proyecto            setStatus()              Sets the current record's "Status" value
 * @method Proyecto            setPrioridad()           Sets the current record's "Prioridad" value
 * @method Proyecto            setTareas()              Sets the current record's "Tareas" collection
 * @method Proyecto            setRegistroEstados()     Sets the current record's "RegistroEstados" collection
 * @method Proyecto            setEventos()             Sets the current record's "Eventos" collection
 * 
 * @package    gproject
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseProyecto extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('proyecto');
        $this->hasColumn('nombre', 'string', 50, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 50,
             ));
        $this->hasColumn('tiempo_estimado', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('fecha_cracion', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
        $this->hasColumn('fecha_actualizacion', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
        $this->hasColumn('descProyecto', 'float', null, array(
             'type' => 'float',
             'notnull' => true,
             ));
        $this->hasColumn('idStatus', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('idPrioridad', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Status', array(
             'local' => 'idStatus',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Prioridad', array(
             'local' => 'idPrioridad',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('Tarea as Tareas', array(
             'local' => 'id',
             'foreign' => 'idProyecto'));

        $this->hasMany('Registro_Estado_Proyecto as RegistroEstados', array(
             'local' => 'id',
             'foreign' => 'proyecto_idProyecto'));

        $this->hasMany('Evento as Eventos', array(
             'local' => 'id',
             'foreign' => 'proyecto_idProyecto'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}