<?php

/**
 * tema module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage tema
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTemaGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'tema' : 'tema_'.$action;
  }
}
