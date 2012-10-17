<?php

/**
 * BaseEvento
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $idEvento
 * @property timestamp $fechaInicio
 * @property timestamp $fechaFinal
 * @property boolean $diaCompleto
 * @property string $nombreEvento
 * @property string $descEvento
 * @property integer $proyectoFK
 * @property Proyecto $Proyecto
 * 
 * @method integer   getIdEvento()     Returns the current record's "idEvento" value
 * @method timestamp getFechaInicio()  Returns the current record's "fechaInicio" value
 * @method timestamp getFechaFinal()   Returns the current record's "fechaFinal" value
 * @method boolean   getDiaCompleto()  Returns the current record's "diaCompleto" value
 * @method string    getNombreEvento() Returns the current record's "nombreEvento" value
 * @method string    getDescEvento()   Returns the current record's "descEvento" value
 * @method integer   getProyectoFK()   Returns the current record's "proyectoFK" value
 * @method Proyecto  getProyecto()     Returns the current record's "Proyecto" value
 * @method Evento    setIdEvento()     Sets the current record's "idEvento" value
 * @method Evento    setFechaInicio()  Sets the current record's "fechaInicio" value
 * @method Evento    setFechaFinal()   Sets the current record's "fechaFinal" value
 * @method Evento    setDiaCompleto()  Sets the current record's "diaCompleto" value
 * @method Evento    setNombreEvento() Sets the current record's "nombreEvento" value
 * @method Evento    setDescEvento()   Sets the current record's "descEvento" value
 * @method Evento    setProyectoFK()   Sets the current record's "proyectoFK" value
 * @method Evento    setProyecto()     Sets the current record's "Proyecto" value
 * 
 * @package    gproject
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEvento extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('evento');
        $this->hasColumn('idEvento', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('fechaInicio', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
        $this->hasColumn('fechaFinal', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
        $this->hasColumn('diaCompleto', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => 1,
             ));
        $this->hasColumn('nombreEvento', 'string', 50, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 50,
             ));
        $this->hasColumn('descEvento', 'string', 200, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 200,
             ));
        $this->hasColumn('proyectoFK', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Proyecto', array(
             'local' => 'proyectoFK',
             'foreign' => 'idProyecto',
             'onDelete' => 'CASCADE'));

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