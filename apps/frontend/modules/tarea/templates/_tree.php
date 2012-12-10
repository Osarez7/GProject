


     <?php if($arbolTarea['children']):?>
               
               

           <?php foreach ($arbolTarea['children'] as $node): ?>
            
             <li class="tarea-menu" id="tarea-<?php $node['idTarea'] ?>">  
            
                <?php if($node['hasChildren'] == true):?>
                <span class="folder"> <?php echo  $node['nombreTarea'] ?></span>
                 
                                    
                 <ul>
                    <?php include_partial('tarea/tree',array('arbolTarea' =>$node)); ?>  
                 </ul>

                  <?php else:?>
                     <span class="file "> <?php echo  $node['nombreTarea'] ?></span> 
                   
                 <?php endif; ?>
               
           </li>
          <?php endforeach; ?>   

  <?php endif; ?>

