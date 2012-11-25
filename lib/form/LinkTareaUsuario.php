<?php

/**
 * Tipo_usuario form.
 *
 * @package    gproject
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class  LinkTareaUsuario extends BaseTareaForm
{
  public function configure()
  {
    $this->useFields(array
        ('usuario_list'));
    
    
    $this->widgetSchema->setLabels(array(
        'usuario_list' => '',
       
    ));


    $queryUsuario = Doctrine_Core::getTable('Usuario')->getQueryUsuarioByProyecto( $this->getObject()->getProyectoFK());
    
    $this->widgetSchema['usuario_list'] = new sfWidgetFormDoctrineChoice(array(
      'model'           => 'Usuario',
      'add_empty'       =>  false,
       'query'          => $queryUsuario,
      'renderer_class'  => 'sfWidgetFormSelectDoubleList',  
    ));

  }
}
