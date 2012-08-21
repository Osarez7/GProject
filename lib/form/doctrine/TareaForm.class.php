<?php

/**
 * Tarea form.
 *
 * @package    gproject
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class TareaForm extends BaseTareaForm
{
  public function configure()
  {
        
      
      
   $this->setWidget('parent', new sfWidgetFormDoctrineChoiceNestedSet(array(
	      'model'     => 'Tarea',
	      'add_empty' => 'No es sub-tarea'
	    )));  
   
   
   
   if ($this->getObject()->getNode()->hasParent())
	    {
	      $this->setDefault('parent', $this->getObject()->getNode()->getParent()->getId());
	    }
            
            
            // set a validator for parent which prevents a category being moved to one of its own descendants
	    $this->setValidator('parent', new sfValidatorDoctrineChoiceNestedSet(array(
	      'required' => false,
	      'model'    => 'Tarea',
	      'node'     => $this->getObject(),
	    )));
            
            
	    $this->getValidator('parent')->setMessage('node', 'A category cannot be made a descendent of itself.');
	 
            
      
      unset(
              $this['root_id'],$this['level'],
              $this['rgt'],$this['lft'],$this['tar_fecha_creacion'],
              $this['usuario_list'],$this['tar_fecha_actulizacion']
              
    );

      
  }
  
  public function doSave($con = null)
  {
    // save the record itself
    parent::doSave($con);
    // if a parent has been specified, add/move this node to be the child of that node
    if ($this->getValue('parent'))
    {
      $parent = Doctrine::getTable('Tarea')->findOneById($this->getValue('parent'));
      if ($this->isNew())
      {
        $this->getObject()->getNode()->insertAsLastChildOf($parent);
      }
      else
      {
        $this->getObject()->getNode()->moveAsLastChildOf($parent);
      }
    }
    // if no parent was selected, add/move this node to be a new root in the tree
    else
    {
      $categoryTree = Doctrine::getTable('Tarea')->getTree();
      if ($this->isNew())
      {
        $categoryTree->createRoot($this->getObject());
      }
      else
      {
        $this->getObject()->getNode()->makeRoot($this->getObject()->getId());
      }
    }
  }
  
}
