<?php

/**
 * BaseProyecto
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $idProyecto
 * @property string $nombre
 * @property integer $tiempo_estimado
 * @property string $descProyecto
 * @property integer $statusPK
 * @property integer $prioridadPK
 * @property Status $Status
 * @property Prioridad $Prioridad
 * @property Doctrine_Collection $Tareas
 * @property Doctrine_Collection $RegistroEstados
 * @property Doctrine_Collection $Eventos
 * 
 * @method integer             getIdProyecto()      Returns the current record's "idProyecto" value
 * @method string              getNombre()          Returns the current record's "nombre" value
 * @method integer             getTiempoEstimado()  Returns the current record's "tiempo_estimado" value
 * @method string              getDescProyecto()    Returns the current record's "descProyecto" value
 * @method integer             getStatusPK()        Returns the current record's "statusPK" value
 * @method integer             getPrioridadPK()     Returns the current record's "prioridadPK" value
 * @method Status              getStatus()          Returns the current record's "Status" value
 * @method Prioridad           getPrioridad()       Returns the current record's "Prioridad" value
 * @method Doctrine_Collection getTareas()          Returns the current record's "Tareas" collection
 * @method Doctrine_Collection getRegistroEstados() Returns the current record's "RegistroEstados" collection
 * @method Doctrine_Collection getEventos()         Returns the current record's "Eventos" collection
 * @method Proyecto            setIdProyecto()      Sets the current record's "idProyecto" value
 * @method Proyecto            setNombre()          Sets the current record's "nombre" value
 * @method Proyecto            setTiempoEstimado()  Sets the current record's "tiempo_estimado" value
 * @method Proyecto            setDescProyecto()    Sets the current record's "descProyecto" value
 * @method Proyecto            setStatusPK()        Sets the current record's "statusPK" value
 * @method Proyecto            setPrioridadPK()     Sets the current record's "prioridadPK" value
 * @method Proyecto            setStatus()          Sets the current record's "Status" value
 * @method Proyecto            setPrioridad()       Sets the current record's "Prioridad" value
 * @method Proyecto            setTareas()          Sets the current record's "Tareas" collection
 * @method Proyecto            setRegistroEstados() Sets the current record's "RegistroEstados" collection
 * @method Proyecto            setEventos()         Sets the current record's "Eventos" collection
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
        $this->hasColumn('idProyecto', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('nombre', 'string', 50, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 50,
             ));
        $this->hasColumn('tiempo_estimado', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('descProyecto', 'string', 200, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 200,
             ));
        $this->hasColumn('statusPK', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('prioridadPK', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Status', array(
             'local' => 'statusPK',
             'foreign' => 'idStatus',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Prioridad', array(
             'local' => 'prioridadPK',
             'foreign' => 'idPrioridad',
             'onDelete' => 'CASCADE'));

        $this->hasMany('Tarea as Tareas', array(
             'local' => 'idProyecto',
             'foreign' => 'proyectoPK'));

        $this->hasMany('Registro_Estado_Proyecto as RegistroEstados', array(
             'local' => 'idProyecto',
             'foreign' => 'proyectoPK'));

        $this->hasMany('Evento as Eventos', array(
             'local' => 'idProyecto',
             'foreign' => 'proyectoPK'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             'created' => 
             array(
              'name' => 'fecha_creacion',
              'type' => 'timestamp',
             ),
             'updated' => 
             array(
              'name' => 'fecha_actualizacion',
              'type' => 'timestamp',
             ),
             ));
        $this->actAs($timestampable0);
    }
}