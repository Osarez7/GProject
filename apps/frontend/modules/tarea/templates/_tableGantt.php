<?php if($arbolTarea['children']):?>
   <?php foreach ($arbolTarea['children'] as $node): ?>
            
            <?php if($node['hasChildren'] == true):?>
                <tr>
                    <td> <?php echo  $node['nombreTarea'] ?> </td>
	            <td> <?php include_partial('tarea/accionesTarea',array('node' =>$node)); ?></td>
                </tr>
               <?php include_partial('tarea/tableGantt',array('arbolTarea' =>$node)); ?>  
                 
                  <?php else:?>
                   <tr>
                       <td><?php echo  $node['nombreTarea'] ?></td>
                     <td>
                    <?php include_partial('tarea/accionesTarea',array('node' =>$node)); ?>   
                     </td>
                  </tr>
              <?php endif; ?>
               
          <?php endforeach; ?>   

  <?php endif; ?>
