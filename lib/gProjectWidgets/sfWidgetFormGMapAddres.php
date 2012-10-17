<?php

class sfWidgetFormGMapAddres extends sfWidgetForm{

public function  configure($options = array(), $attributes = array()){
    
    $this->addOption('address.options', array('style' => 'width:400px'));
    
    $this->setOption('default', array(
        'address' => '',
        'longitude' => '2.294359',
        'latitude' => '48.858205'
    ));
    
    $this->addOption('div.class','sf-gmap-widget');
    $this->addOption('map.height', '300px');
    $this->addOption('map.style',"");
    $this->addOption('lookup.name',"Lookup");
    
    
    $this->addOption('template.html','
        <div id="{div.id}" class="{div.class}">
        {input.search} <input type="submit" value="{input.lookup.name}"
        id="{input.lookup.id}" / > <br/>
        {input.longitude}
        {input.latitude}
        <div id="{map.id}"
        sytle="width:{map.width}; height:{map.height};{map.sytle}"></div>
        </div>
       ');
    
    $this->addOption('template.javascript','
      <script type="text/javascript">
      jQuery(window).bind("load",function(){
        new sfGmpWidgetWidget(
            longitude: "{input.longitud.id}",
            latitude: "{input.latitude.id}",
            address: "{input.address.id}",
            lookup: "{input.lookup.id}",
            map: "{map.id}"
          );
         }); 
       

     ');
}


public function getJavascripts(){
    
    return  array('/sfFormExtraPlugin/js/sf_widget_gmap_addres.js');
}

public function render($name, $value = null, $attributes = array(), $errors = array()) {
   
    $template_vars = array(
        '{div.id}'              =>   $this->getOption('div.class'),
        '{map.id}'              =>   $this->generateId($name.'[map]'),
        '{map.style}'           =>   $this->getOption('map.sytle'),
        '{map.height}'          =>   $this->getOption('map.height'),
        '{map.width}'           =>   $this->getOption('map.width'),
        '{input.lookup.id}'     =>   $this->generateId($name . '[lookup]'),
        '{input.lookup.name}'   =>   $this->getOption('lookup.name'),
        '{input.address.id}'    =>   $this->generateId($name . '[address]'),
        '{input.latitude.id}'   =>   $this->generateId($name . '[latitude]'),
        '{input.longitude.id}'  =>   $this->generateId($name . '[longitude]'),
        );
    
    $value = !is_array($value) ? array() : $value;
    $value['address'] = isset($value['address']) ? $value['address'] : '';
    $value['longitude'] = isset($value['longitude']) ? $value['longitude'] : '';
    
    
    $address = new sfWidgetFormInputText(array(), $this->getOption('addres.options'));
    $template_vars['{input.search}'] = $address->render($name.'[address]',$value['address']);
    
    $hidden = new sfWidgetFormInputHidden();
    $template_vars['{input.longitude}'] = $hidden->render($name.'[longitude]', $value['longitude']);
    $template_vars['{input.latitude}'] = $hidden->render($name.'[latitude]', $value['latitude']);
   
    return strtr(
            $this->getOption('template.html').$this->getOption('tempalte.javascript'),
              $template_vars
            );
    
    
    
    
    
}



}