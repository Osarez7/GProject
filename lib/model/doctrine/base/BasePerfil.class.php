<?php

/**
 * BasePerfil
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $idPerfil
 * @property string $perfilNombre
 * @property Doctrine_Collection $Usuarios
 * 
 * @method integer             getIdPerfil()     Returns the current record's "idPerfil" value
 * @method string              getPerfilNombre() Returns the current record's "perfilNombre" value
 * @method Doctrine_Collection getUsuarios()     Returns the current record's "Usuarios" collection
 * @method Perfil              setIdPerfil()     Sets the current record's "idPerfil" value
 * @method Perfil              setPerfilNombre() Sets the current record's "perfilNombre" value
 * @method Perfil              setUsuarios()     Sets the current record's "Usuarios" collection
 * 
 * @package    gproject
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePerfil extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('perfil');
        $this->hasColumn('idPerfil', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('perfilNombre', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Usuario as Usuarios', array(
             'local' => 'idPerfil',
             'foreign' => 'perfilFK'));
    }
}