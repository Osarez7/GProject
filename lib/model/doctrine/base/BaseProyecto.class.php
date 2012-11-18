<?php

/**
 * BaseProyecto
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $idProyecto
 * @property string $nombre
 * @property timestamp $fechaInicio
 * @property integer $diasEstimados
 * @property string $descProyecto
 * @property integer $statusFK
 * @property integer $prioridadFK
 * @property Status $Status
 * @property Prioridad $Prioridad
 * @property Doctrine_Collection $Usuario
 * @property Doctrine_Collection $Tareas
 * @property Doctrine_Collection $RegistroEstados
 * @property Doctrine_Collection $Eventos
 * @property Doctrine_Collection $Mapas
 * @property Doctrine_Collection $Temas
 * 
 * @method integer             getIdProyecto()      Returns the current record's "idProyecto" value
 * @method string              getNombre()          Returns the current record's "nombre" value
 * @method timestamp           getFechaInicio()     Returns the current record's "fechaInicio" value
 * @method integer             getDiasEstimados()   Returns the current record's "diasEstimados" value
 * @method string              getDescProyecto()    Returns the current record's "descProyecto" value
 * @method integer             getStatusFK()        Returns the current record's "statusFK" value
 * @method integer             getPrioridadFK()     Returns the current record's "prioridadFK" value
 * @method Status              getStatus()          Returns the current record's "Status" value
 * @method Prioridad           getPrioridad()       Returns the current record's "Prioridad" value
 * @method Doctrine_Collection getUsuario()         Returns the current record's "Usuario" collection
 * @method Doctrine_Collection getTareas()          Returns the current record's "Tareas" collection
 * @method Doctrine_Collection getRegistroEstados() Returns the current record's "RegistroEstados" collection
 * @method Doctrine_Collection getEventos()         Returns the current record's "Eventos" collection
 * @method Doctrine_Collection getMapas()           Returns the current record's "Mapas" collection
 * @method Doctrine_Collection getTemas()           Returns the current record's "Temas" collection
 * @method Proyecto            setIdProyecto()      Sets the current record's "idProyecto" value
 * @method Proyecto            setNombre()          Sets the current record's "nombre" value
 * @method Proyecto            setFechaInicio()     Sets the current record's "fechaInicio" value
 * @method Proyecto            setDiasEstimados()   Sets the current record's "diasEstimados" value
 * @method Proyecto            setDescProyecto()    Sets the current record's "descProyecto" value
 * @method Proyecto            setStatusFK()        Sets the current record's "statusFK" value
 * @method Proyecto            setPrioridadFK()     Sets the current record's "prioridadFK" value
 * @method Proyecto            setStatus()          Sets the current record's "Status" value
 * @method Proyecto            setPrioridad()       Sets the current record's "Prioridad" value
 * @method Proyecto            setUsuario()         Sets the current record's "Usuario" collection
 * @method Proyecto            setTareas()          Sets the current record's "Tareas" collection
 * @method Proyecto            setRegistroEstados() Sets the current record's "RegistroEstados" collection
 * @method Proyecto            setEventos()         Sets the current record's "Eventos" collection
 * @method Proyecto            setMapas()           Sets the current record's "Mapas" collection
 * @method Proyecto            setTemas()           Sets the current record's "Temas" collection
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
        $this->hasColumn('nombre', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('fechaInicio', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
        $this->hasColumn('diasEstimados', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('descProyecto', 'string', 200, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 200,
             ));
        $this->hasColumn('statusFK', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('prioridadFK', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Status', array(
             'local' => 'statusFK',
             'foreign' => 'idStatus',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Prioridad', array(
             'local' => 'prioridadFK',
             'foreign' => 'idPrioridad',
             'onDelete' => 'CASCADE'));

        $this->hasMany('Usuario', array(
             'refClass' => 'ProyectoUsuario',
             'local' => 'idProyecto',
             'foreign' => 'idUsuario'));

        $this->hasMany('Tarea as Tareas', array(
             'local' => 'idProyecto',
             'foreign' => 'proyectoFK'));

        $this->hasMany('Registro_Estado_Proyecto as RegistroEstados', array(
             'local' => 'idProyecto',
             'foreign' => 'proyectoFK'));

        $this->hasMany('Evento as Eventos', array(
             'local' => 'idProyecto',
             'foreign' => 'proyectoFK'));

        $this->hasMany('Mapa as Mapas', array(
             'local' => 'idProyecto',
             'foreign' => 'proyectoFK'));

        $this->hasMany('Tema as Temas', array(
             'local' => 'idProyecto',
             'foreign' => 'proyectoFK'));

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