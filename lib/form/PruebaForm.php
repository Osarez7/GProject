<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PruebaForm
 *
 * @author jint
 */
class PruebaForm extends BaseForm {

    //put your code here

    public function configure() {



        $this->setWidgets(array(
            'prueba' => new sfWidgetFormInputText()));
       
        $this->setWidgets(array(
            'autocompletar' => new sfWidgetFormChoiceAutocomplete(array(
                'choices'=>array('uno','dos','tres','cuatro'),
                'source'=>array('one','two','three','four')
                
            ))));
                
               



        $this->widgetSchema->setLabels(array(
           
            'prueba' => 'Prueba',
            'autocompletar'=> 'Autocompletar'
        ));
       
          $this->embedForm('logo',new LoginForm());

    }

}

?>
