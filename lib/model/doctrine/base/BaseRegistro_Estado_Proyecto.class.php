<?php

/**
 * BaseRegistro_Estado_Proyecto
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $idRegistroProyecto
 * @property integer $statusFK
 * @property integer $proyectoFK
 * @property Status $Status
 * @property Proyecto $Proyecto
 * 
 * @method integer                  getIdRegistroProyecto() Returns the current record's "idRegistroProyecto" value
 * @method integer                  getStatusFK()           Returns the current record's "statusFK" value
 * @method integer                  getProyectoFK()         Returns the current record's "proyectoFK" value
 * @method Status                   getStatus()             Returns the current record's "Status" value
 * @method Proyecto                 getProyecto()           Returns the current record's "Proyecto" value
 * @method Registro_Estado_Proyecto setIdRegistroProyecto() Sets the current record's "idRegistroProyecto" value
 * @method Registro_Estado_Proyecto setStatusFK()           Sets the current record's "statusFK" value
 * @method Registro_Estado_Proyecto setProyectoFK()         Sets the current record's "proyectoFK" value
 * @method Registro_Estado_Proyecto setStatus()             Sets the current record's "Status" value
 * @method Registro_Estado_Proyecto setProyecto()           Sets the current record's "Proyecto" value
 * 
 * @package    gproject
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRegistro_Estado_Proyecto extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('registro__estado__proyecto');
        $this->hasColumn('idRegistroProyecto', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('statusFK', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('proyectoFK', 'integer', null, array(
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

        $this->hasOne('Proyecto', array(
             'local' => 'proyectoFK',
             'foreign' => 'idProyecto',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             'created' => 
             array(
              'name' => 'fecha_cambio_estado',
              'type' => 'timestamp',
             ),
             ));
        $this->actAs($timestampable0);
    }
}