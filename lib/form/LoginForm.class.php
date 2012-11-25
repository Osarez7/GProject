<?php


class LoginForm extends BaseForm
{
public function configure(){
    
    $this->setWidgets(array(
        'user' => new sfWidgetFormInputText(),
        'password' => new sfWidgetFormInputPassword(),
    ));


  $this->setValidators(array(
'user'
=> new sfValidatorEmail(),
'password' => new sfValidatorString(array('max_length' => 5))));


    
    $this->widgetSchema->setLabels(array(
        'user' => 'Usuario',
        'password' => 'Contraseña',
    ));
}
}




