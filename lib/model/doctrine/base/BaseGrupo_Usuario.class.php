<?php

/**
 * BaseGrupo_Usuario
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $usuario
 * @property integer $grupo
 * @property Usuario $Usuario
 * @property Grupo $Grupo
 * 
 * @method integer       getUsuario() Returns the current record's "usuario" value
 * @method integer       getGrupo()   Returns the current record's "grupo" value
 * @method Usuario       getUsuario() Returns the current record's "Usuario" value
 * @method Grupo         getGrupo()   Returns the current record's "Grupo" value
 * @method Grupo_Usuario setUsuario() Sets the current record's "usuario" value
 * @method Grupo_Usuario setGrupo()   Sets the current record's "grupo" value
 * @method Grupo_Usuario setUsuario() Sets the current record's "Usuario" value
 * @method Grupo_Usuario setGrupo()   Sets the current record's "Grupo" value
 * 
 * @package    gproject
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseGrupo_Usuario extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('grupo__usuario');
        $this->hasColumn('usuario', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('grupo', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Usuario', array(
             'local' => 'usuario',
             'foreign' => 'idUsuario',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Grupo', array(
             'local' => 'grupo',
             'foreign' => 'idGrupo',
             'onDelete' => 'CASCADE'));
    }
}