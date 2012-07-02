<?php

/**
 * BaseTarea
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $tar_nombre
 * @property string $tar_estado
 * @property timestamp $tar_fecha_creacion
 * @property timestamp $tar_fecha_actulizacion
 * @property integer $idStatus
 * @property integer $idPrioridad
 * @property integer $idGrupo
 * @property integer $idProyecto
 * @property Status $Status
 * @property Prioridad $Prioridad
 * @property Proyecto $Proyecto
 * @property Grupo $Grupo
 * @property Doctrine_Collection $Relacion_Tarea
 * @property Doctrine_Collection $RegistroEstados
 * @property Doctrine_Collection $Usuario_Tarea
 * @property Doctrine_Collection $Grupo_Usuario
 * 
 * @method string              getTarNombre()              Returns the current record's "tar_nombre" value
 * @method string              getTarEstado()              Returns the current record's "tar_estado" value
 * @method timestamp           getTarFechaCreacion()       Returns the current record's "tar_fecha_creacion" value
 * @method timestamp           getTarFechaActulizacion()   Returns the current record's "tar_fecha_actulizacion" value
 * @method integer             getIdStatus()               Returns the current record's "idStatus" value
 * @method integer             getIdPrioridad()            Returns the current record's "idPrioridad" value
 * @method integer             getIdGrupo()                Returns the current record's "idGrupo" value
 * @method integer             getIdProyecto()             Returns the current record's "idProyecto" value
 * @method Status              getStatus()                 Returns the current record's "Status" value
 * @method Prioridad           getPrioridad()              Returns the current record's "Prioridad" value
 * @method Proyecto            getProyecto()               Returns the current record's "Proyecto" value
 * @method Grupo               getGrupo()                  Returns the current record's "Grupo" value
 * @method Doctrine_Collection getRelacionTarea()          Returns the current record's "Relacion_Tarea" collection
 * @method Doctrine_Collection getRegistroEstados()        Returns the current record's "RegistroEstados" collection
 * @method Doctrine_Collection getUsuarioTarea()           Returns the current record's "Usuario_Tarea" collection
 * @method Doctrine_Collection getGrupoUsuario()           Returns the current record's "Grupo_Usuario" collection
 * @method Tarea               setTarNombre()              Sets the current record's "tar_nombre" value
 * @method Tarea               setTarEstado()              Sets the current record's "tar_estado" value
 * @method Tarea               setTarFechaCreacion()       Sets the current record's "tar_fecha_creacion" value
 * @method Tarea               setTarFechaActulizacion()   Sets the current record's "tar_fecha_actulizacion" value
 * @method Tarea               setIdStatus()               Sets the current record's "idStatus" value
 * @method Tarea               setIdPrioridad()            Sets the current record's "idPrioridad" value
 * @method Tarea               setIdGrupo()                Sets the current record's "idGrupo" value
 * @method Tarea               setIdProyecto()             Sets the current record's "idProyecto" value
 * @method Tarea               setStatus()                 Sets the current record's "Status" value
 * @method Tarea               setPrioridad()              Sets the current record's "Prioridad" value
 * @method Tarea               setProyecto()               Sets the current record's "Proyecto" value
 * @method Tarea               setGrupo()                  Sets the current record's "Grupo" value
 * @method Tarea               setRelacionTarea()          Sets the current record's "Relacion_Tarea" collection
 * @method Tarea               setRegistroEstados()        Sets the current record's "RegistroEstados" collection
 * @method Tarea               setUsuarioTarea()           Sets the current record's "Usuario_Tarea" collection
 * @method Tarea               setGrupoUsuario()           Sets the current record's "Grupo_Usuario" collection
 * 
 * @package    gproject
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTarea extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tarea');
        $this->hasColumn('tar_nombre', 'string', 50, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 50,
             ));
        $this->hasColumn('tar_estado', 'string', 50, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 50,
             ));
        $this->hasColumn('tar_fecha_creacion', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
        $this->hasColumn('tar_fecha_actulizacion', 'timestamp', null, array(
             'type' => 'timestamp',
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
        $this->hasColumn('idGrupo', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('idProyecto', 'integer', null, array(
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

        $this->hasOne('Proyecto', array(
             'local' => 'idProyecto',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Grupo', array(
             'local' => 'idGrupo',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('Relacion_Tarea', array(
             'local' => 'id',
             'foreign' => 'tareaDestino_idTarea'));

        $this->hasMany('Registro_Estado_Tarea as RegistroEstados', array(
             'local' => 'id',
             'foreign' => 'tarea_idTarea'));

        $this->hasMany('Usuario_Tarea', array(
             'local' => 'id',
             'foreign' => 'tarea_id'));

        $this->hasMany('Grupo_Usuario', array(
             'local' => 'id',
             'foreign' => 'grupo_idGrupo'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}