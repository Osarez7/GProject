<?php

class backendConfiguration extends sfApplicationConfiguration
{
 

   protected $frontendRouting = null;
 

 public function configure()
  {
      sfValidatorBase::setDefaultMessage('required','Este campo es obligatorio.');
      sfValidatorBase::setDefaultMessage('invalid', 'Dato inválido.');
      sfValidatorDateTime::setDefaultMessage("bad_format", "%value% no es una fecha válida.");
      
   }



 
  public function generateFrontendUrl($name, $parameters = array())
  {
    return '/frontend_dev.php'.$this->getFrontendRouting()->generate($name, $parameters);
  }
 
  public function getFrontendRouting()
  {
    if (!$this->frontendRouting)
    {
      $this->frontendRouting = new sfPatternRouting(new sfEventDispatcher());
 
      $config = new sfRoutingConfigHandler();
      $routes = $config->evaluate(array(sfConfig::get('sf_apps_dir').'/frontend/config/routing.yml'));
 
      $this->frontendRouting->setRoutes($routes);
    }
 
    return $this->frontendRouting;
  }
 


}
