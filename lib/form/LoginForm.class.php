<?php


class LoginForm extends BaseForm
{
public function configure()

{
    


    $this->setWidgets(array(
        'user' => new sfWidgetFormInputText(),
        'password' => new sfWidgetFormInputPassword(),
    ));


  $this->setValidators(array(
'user'
=> new sfValidatorEmail(),
'password' => new sfValidatorString(array('max_length' => 5))));

 /*   $this->setValidators(array(
        'user' => new sfValidatorEmail(array('required' => true), array('required' => 'Escribe tu usuario')),
        'password' => new sfValidatorString(array('required' => true), array('required' => 'Escribe tu password')),
    ));  */



    
    $this->widgetSchema->setLabels(array(
        'user' => 'Usuario',
        'password' => 'Contraseña',
    ));
}
}




