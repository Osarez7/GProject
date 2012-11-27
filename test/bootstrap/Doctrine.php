<?php

// test/bootstrap/Doctrine.php
include(dirname(__FILE__).'/unit.php');

$configuration = ProjectConfiguration::getApplicationConfiguration(
'frontend', 'test', true);
new sfDatabaseManager($configuration);


//$this->runTask('generate:app', 'frontend');


$this->runTask('doctrine:drop-db');
$this->runTask('doctrine:build-db');
$this->runTask('doctrine:build','--all  --env="test" --no-confirmation' ) ; 


Doctrine_Core::loadData(sfConfig::get('sf_test_dir').'/fixtures');
Doctrine_Core::loadData(sfConfig::get('sf_test_dir').'/non-fixture',true);

