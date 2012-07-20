<?php

/**
 * BaseRegistro_Estado_Proyecto
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $idRegistroProyecto
 * @property integer $statusPK
 * @property integer $proyectoPK
 * @property Status $Status
 * @property Proyecto $Proyecto
 * 
 * @method integer                  getIdRegistroProyecto() Returns the current record's "idRegistroProyecto" value
 * @method integer                  getStatusPK()           Returns the current record's "statusPK" value
 * @method integer                  getProyectoPK()         Returns the current record's "proyectoPK" value
 * @method Status                   getStatus()             Returns the current record's "Status" value
 * @method Proyecto                 getProyecto()           Returns the current record's "Proyecto" value
 * @method Registro_Estado_Proyecto setIdRegistroProyecto() Sets the current record's "idRegistroProyecto" value
 * @method Registro_Estado_Proyecto setStatusPK()           Sets the current record's "statusPK" value
 * @method Registro_Estado_Proyecto setProyectoPK()         Sets the current record's "proyectoPK" value
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
        $this->hasColumn('statusPK', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('proyectoPK', 'integer', null, array(
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

        $this->hasOne('Proyecto', array(
             'local' => 'proyectoPK',
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