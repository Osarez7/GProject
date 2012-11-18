<?php

/**
 * BaseUsuario
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $idUsuario
 * @property integer $perfilFK
 * @property string $usr_nombre
 * @property string $usr_apellido1
 * @property string $usr_apellido2
 * @property string $email
 * @property string $usr_nick
 * @property string $password
 * @property Perfil $Perfil
 * @property Doctrine_Collection $Tarea
 * @property Doctrine_Collection $Proyecto
 * @property Doctrine_Collection $Grupo_Usuario
 * @property Doctrine_Collection $Temas
 * 
 * @method integer             getIdUsuario()     Returns the current record's "idUsuario" value
 * @method integer             getPerfilFK()      Returns the current record's "perfilFK" value
 * @method string              getUsrNombre()     Returns the current record's "usr_nombre" value
 * @method string              getUsrApellido1()  Returns the current record's "usr_apellido1" value
 * @method string              getUsrApellido2()  Returns the current record's "usr_apellido2" value
 * @method string              getEmail()         Returns the current record's "email" value
 * @method string              getUsrNick()       Returns the current record's "usr_nick" value
 * @method string              getPassword()      Returns the current record's "password" value
 * @method Perfil              getPerfil()        Returns the current record's "Perfil" value
 * @method Doctrine_Collection getTarea()         Returns the current record's "Tarea" collection
 * @method Doctrine_Collection getProyecto()      Returns the current record's "Proyecto" collection
 * @method Doctrine_Collection getGrupoUsuario()  Returns the current record's "Grupo_Usuario" collection
 * @method Doctrine_Collection getTemas()         Returns the current record's "Temas" collection
 * @method Usuario             setIdUsuario()     Sets the current record's "idUsuario" value
 * @method Usuario             setPerfilFK()      Sets the current record's "perfilFK" value
 * @method Usuario             setUsrNombre()     Sets the current record's "usr_nombre" value
 * @method Usuario             setUsrApellido1()  Sets the current record's "usr_apellido1" value
 * @method Usuario             setUsrApellido2()  Sets the current record's "usr_apellido2" value
 * @method Usuario             setEmail()         Sets the current record's "email" value
 * @method Usuario             setUsrNick()       Sets the current record's "usr_nick" value
 * @method Usuario             setPassword()      Sets the current record's "password" value
 * @method Usuario             setPerfil()        Sets the current record's "Perfil" value
 * @method Usuario             setTarea()         Sets the current record's "Tarea" collection
 * @method Usuario             setProyecto()      Sets the current record's "Proyecto" collection
 * @method Usuario             setGrupoUsuario()  Sets the current record's "Grupo_Usuario" collection
 * @method Usuario             setTemas()         Sets the current record's "Temas" collection
 * 
 * @package    gproject
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUsuario extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('usuario');
        $this->hasColumn('idUsuario', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('perfilFK', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('usr_nombre', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('usr_apellido1', 'string', 20, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 20,
             ));
        $this->hasColumn('usr_apellido2', 'string', 20, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 20,
             ));
        $this->hasColumn('email', 'string', 150, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 150,
             ));
        $this->hasColumn('usr_nick', 'string', 20, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 20,
             ));
        $this->hasColumn('password', 'string', 32, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 32,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Perfil', array(
             'local' => 'perfilFK',
             'foreign' => 'idPerfil',
             'onDelete' => 'CASCADE'));

        $this->hasMany('Tarea', array(
             'refClass' => 'UsuarioTarea',
             'local' => 'idUsuario',
             'foreign' => 'idTarea'));

        $this->hasMany('Proyecto', array(
             'refClass' => 'ProyectoUsuario',
             'local' => 'idUsuario',
             'foreign' => 'idProyecto'));

        $this->hasMany('Grupo_Usuario', array(
             'local' => 'idUsuario',
             'foreign' => 'usuario'));

        $this->hasMany('Tema as Temas', array(
             'local' => 'idUsuario',
             'foreign' => 'usuarioFK'));

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