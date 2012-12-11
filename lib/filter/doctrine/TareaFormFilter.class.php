<?php

/**
 * Tarea filter form.
 *
 * @package    gproject
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class TareaFormFilter extends BaseTareaFormFilter
{
  public function configure() {
        $this->useFields(array(
           
            'fechaInicio',
            'fechaFinal',
            'statusFK',
            'prioridadFK',
             'proyectoFK',
            'usuario_list'
        ));



        $this->widgetSchema['fechaInicio'] = new sfWidgetFormFilterDate(array(
                    'from_date' => new sfWidgetFormTextDateInputJQueryDatePicker(
                            array('image' => '/images/calendar_view_month.png',
                                'include_time' => false)),
                    'to_date' => new sfWidgetFormTextDateInputJQueryDatePicker(
                            array('image' => '/images/calendar_view_month.png',
                                'include_time' => false)), 'with_empty' => false,
                    'template' => 'desde %from_date% hasta %to_date%'
                        )
        );


        $this->widgetSchema['fechaFinal'] = new sfWidgetFormFilterDate(array(
                    'from_date' => new sfWidgetFormTextDateInputJQueryDatePicker(
                            array('image' => '/images/calendar_view_month.png',
                                'include_time' => false)),
                    'to_date' => new sfWidgetFormTextDateInputJQueryDatePicker(
                            array('image' => '/images/calendar_view_month.png',
                                'include_time' => false)), 'with_empty' => false,
                    'template' => 'desde %from_date% hasta %to_date%'
                        )
        );



        $this->widgetSchema->setLabels(array(
            //   'nombre' => 'Nombre Proyecto',
            'fechaInicio' => 'Fecha inicial',
            'fechaFinal' => 'Fecha final',
            'statusFK' => 'Estado',
            'prioridadFK' => 'Prioridad',
             'proyectoFK' => 'Proyecto',
            'usuario_list' => 'Usuarios',
        ));
        //    $this->configureNeighborhoods();
    }

    public  function buildQuery(array $values) {
        $query = parent::buildQuery($values);

        //Personalización de la Query
         

        return $query;
    }
}
