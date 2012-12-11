<?php use_helper('Date') ?>

<table class="list">
    <th>
       Tarea
    </th>
    
    <th>
      Fecha inicial
    </th>
    
    <th>
      Fecha Final
    </th>
    
    <th>
      horas estimadas
    </th>
    <th>
      estado
    </th>
    
    <th>
      prioridad
    </th>
   
   
<!--    <th>
        Total horas
    </th>
    
    <th>
       Usuarios asignados
    </th>
    
    <th>
        Horas estimadas
    </th>
    
    <th>
        Horas trabajadas
    </th>
    
    
    <th>
        Horas trabajadas
    </th>
    -->
        
 
    
    <?php foreach($lstResultados as $itemResultado): ?>
    <tr>
        <td>
            <?php echo $itemResultado->getNombreTarea() ?>
        </td>
       
        
        
        
        
         <td>
            <?php echo format_datetime($itemResultado['fechaInicio'] , 'I') ?> 
        </td>
        
        
         <td>
            <?php echo  format_datetime($itemResultado['fechaFinal'] , 'I') ?> 
        </td>
        
        <td>
            <?php echo $itemResultado['horasEstimadas'] ?>
        </td>
        
        <td>
            <?php echo $itemResultado->getStatus()  ?>
        </td>
         <td>
            <?php echo $itemResultado->getPrioridad() ?>
        </td>
        
        
        
        
    </tr>
    
    <?php endforeach;?>
</table>
