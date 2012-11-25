<?php if ($arbolTarea['children']): ?>
    <?php foreach ($arbolTarea['children'] as $node): ?>

        <?php if ($node['hasChildren'] == true): ?>
            <tr 
                id="row-<?php echo $node['idTarea'] ?>" 
                <?php if ($parent != '0'): ?> 
                     class="child-of-row-<?php echo $parent ?>"
                <?php endif; ?>
              >
                <td> <?php echo $node['nombreTarea'] ?> </td>
                
            </tr>
            <?php include_partial('tarea/tableGanttDays', array('arbolTarea' => $node, 'proyecto' => $proyecto, 'parent' => $node['idTarea'])); ?>  

        <?php else: ?>
          <tr  id="row-<?php echo $node['idTarea'] ?>" 
                <?php if ($parent != '0'): ?> 
                     class="child-of-row-<?php echo $parent ?>"
                <?php endif; ?>
              >
             <td><?php echo $node['nombreTarea'] ?></td>

              
        
            </tr>
        <?php endif; ?>

    <?php endforeach; ?>   

<?php endif; ?>
