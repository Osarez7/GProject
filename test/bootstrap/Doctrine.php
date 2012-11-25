<?php

// test/bootstrap/Doctrine.php
include(dirname(__FILE__).'/unit.php');

$configuration = ProjectConfiguration::getApplicationConfiguration(
'frontend', 'test', true);
new sfDatabaseManager($configuration);



symfony doctrine:drop-db


$this->runTask('generate:app', 'frontend');
Doctrine_Core::loadData(sfConfig::get('sf_test_dir').'/fixtures');
Doctrine_Core::loadData(sfConfig::get('sf_test_dir').'/non-fixture',true);

