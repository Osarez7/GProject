<?php if ($arbolTarea['children']): ?>
    <?php foreach ($arbolTarea['children'] as $node): ?>

        <?php if ($node['hasChildren'] == true): ?>
            <tr 
                id="node-<?php echo $node['idTarea'] ?>" 
                <?php if ($parent != '0'): ?> 
                     class="child-of-node-<?php echo $parent ?>"
                <?php endif; ?>
              >


                <td> <?php echo $node['nombreTarea'] ?> </td>
                <td>
                   <?php include_partial('tarea/accionesTarea',array('node' =>$node,'proyecto'=>$proyecto)); ?>
	        </td>
              <td> 
         <?php echo format_datetime($node['fechaInicio'], 'g', 'es_CL') ?> 
 </td>
                        <td> 
         <?php echo format_datetime($node['fechaFinal'], 'g', 'es_CL') ?> 
 </td>
        
            </tr>
            <?php include_partial('tarea/tableGantt', array('arbolTarea' => $node, 'proyecto' => $proyecto, 'parent' => $node['idTarea'])); ?>  

        <?php else: ?>
          <tr  id="node-<?php echo $node['idTarea'] ?>" 
                <?php if ($parent != '0'): ?> 
                     class="child-of-node-<?php echo $parent ?>"
                <?php endif; ?>
              >
                <td><?php echo $node['nombreTarea'] ?></td>

               <td>
                   <?php include_partial('tarea/accionesTarea',array('node' =>$node,'proyecto'=>$proyecto)); ?>
	        </td>
              <td> 
         <?php echo format_datetime($node['fechaInicio'], 'g', 'es_CL') ?> 
 </td>
                        <td> 
         <?php echo format_datetime($node['fechaFinal'], 'g', 'es_CL') ?> 
 </td>
        
            </tr>
        <?php endif; ?>

    <?php endforeach; ?>   

<?php endif; ?>
