<?php

class frontendConfiguration extends sfApplicationConfiguration
{
   protected $backEndRouting = null;
 
  public function generateBackEndUrl($name, $parameters = array())
  {
    return '/backend_dev.php'.$this->getBackEndRouting()->generate($name, $parameters);
  }


  public function getBackEndRouting()
  {
    if (!$this->backEndRouting)
    {
      $this->backEndRouting = new sfPatternRouting(new sfEventDispatcher());
 
      $config = new sfRoutingConfigHandler();
      $routes = $config->evaluate(array(sfConfig::get('sf_apps_dir').'/backend/config/routing.yml'));
 
      $this->backEndRouting->setRoutes($routes);
    }
 
    return $this->backEndRouting;
  }

  public function configure()
  {
      sfValidatorBase::setDefaultMessage('required','Este campo es obligatorio.');
      sfValidatorBase::setDefaultMessage('invalid', 'Dato inválido.');
      sfValidatorDateTime::setDefaultMessage("bad_format", "%value% no es una fecha válida.");
      
   }
}
