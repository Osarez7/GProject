<?php

/**
 * Proyecto filter form.
 *
 * @package    gproject
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProyectoFormFilter extends BaseProyectoFormFilter {


    public function configure() {
        $this->useFields(array(  
            'fechaInicio',
            'fechaFinal',
            'statusFK',
            'prioridadFK'
            //'usuario_list'
        ));



        $this->widgetSchema['fechaInicio'] = new sfWidgetFormFilterDate(array(
                    'from_date' => new sfWidgetFormTextDateInputJQueryDatePicker(
                            array('image' => '/images/calendar_view_month.png',
                                'include_time' => false)),
                    'to_date' => new sfWidgetFormTextDateInputJQueryDatePicker(
                            array('image' => '/images/calendar_view_month.png',
                                'include_time' => false)), 'with_empty' => false,
                    'template' => 'Desde %from_date% Hasta %to_date%'
                        )
        );


        $this->widgetSchema['fechaFinal'] = new sfWidgetFormFilterDate(array(
                    'from_date' => new sfWidgetFormTextDateInputJQueryDatePicker(
                            array('image' => '/images/calendar_view_month.png',
                                'include_time' => false)),
                    'to_date' => new sfWidgetFormTextDateInputJQueryDatePicker(
                            array('image' => '/images/calendar_view_month.png',
                                'include_time' => false)), 'with_empty' => false,
                    'template' => 'Desde %from_date% Hasta %to_date%'
                        )
        );



        $this->widgetSchema->setLabels(array(
            //   'nombre' => 'Nombre Proyecto',
            'fechaInicio' => 'Fecha inicial',
            'fechaFinal' => 'Fecha final',
            'statusFK' => 'Estado',
            'prioridadFK' => 'Prioridad', 
           // 'usuario_list' => 'Usuarios',
        ));
        //    $this->configureNeighborhoods();
    }

    public  function buildQuery(array $values) {
        $query = parent::buildQuery($values);

        //Personalización de la Query
         

        return $query;
    }

    /*
      public function configureProyectoField()
      {
      $this->widgetSchema['proyectoList'] =
      new sfWidgetFormChoice(array(
      'expanded' => true,
      'multiple' => false,
      'label' => 'Proyecto',
      'choices' => $choices));

      $this->validatorSchema['editor_rating'] =
      new sfValidatorChoice(array(
      'choices' => array('0','1','2','3','4'),
      'required' => false,
      'multiple' => true)
      );


      public function addEditorRatingColumnQuery($query, $field, $value)
      {
      Doctrine::getTable('Review')->
      applyEditorRatingFilter($query, $value);
      } */
}
