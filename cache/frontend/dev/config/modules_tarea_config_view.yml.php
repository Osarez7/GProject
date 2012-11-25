<?php
// auto-generated by sfViewConfigHandler
// date: 2012/11/25 14:58:32
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);

  $response->addStylesheet('main.css', '', array ());
  $response->addStylesheet('menu_style.css', '', array ());
  $response->addStylesheet('redmond/jquery-ui-1.8.23.custom.css', '', array ());
  $response->addStylesheet('gh-buttons.css', '', array ());
  $response->addStylesheet('double_list_widget_style.css', '', array ());
  $response->addStylesheet('customJqueryUI.css', '', array ());
  $response->addJavascript('jquery-1.7.2.js', '', array ());
  $response->addJavascript('jquery-ui-1.8.21.min.js', '', array ());
  $response->addJavascript('double_list.js', '', array ());
  $response->addJavascript('inicializacionGeneral.js', '', array ());
  $response->addJavascript('customStyleSelect.js', '', array ());
  $response->addJavascript('jquery.form.js', '', array ());
  $response->addJavascript('OpenLayers.js', '', array ());

