<?php use_helper('Date') ?>

<table class="list">
    <th>
        Nombre Proyecto
    </th>
    
    <th>
       Fecha Inicio
    </th>
    
    <th>
        Fecha Final
    </th>
    
     <th>
        Estado
    </th>
    
     <th>
        Prioridad
    </th>
    
     <th>
        Horas Estimadas
    </th>
<!--    <th>
        Participantes
    </th>

    <th>
        Horas Estimadas
    </th>

    <th>
        Horas Realizadas
    </th>
    <th>
        Tareas Finalizadas
    </th>
    <th>
        Tareas En Proceso
    </th>
    <th>
        Tareas Pendientes
    </th>
    <th>
        Días Restantes
    </th>-->
    <?php foreach($lstResultados as $itemResultado): ?>
    <tr>
        <td>
            <?php echo $itemResultado['nombre'] ?>
        </td>
        
        
         <td>
            <?php echo format_datetime($itemResultado['fechaInicio'] , 'I') ?> 
        </td>
        
        
         <td>
            <?php echo  format_datetime($itemResultado['fechaFinal'] , 'I') ?> 
        </td>
        
        
         <td>
            <?php echo $itemResultado->getPrioridad() ?>
        </td>
        
        <td>
            <?php echo $itemResultado->getStatus()  ?>
        </td>
         <td>
       
            <?php echo $itemResultado['horasEstimadas'] ?>
        </td>
        
<!--         <td>
        <?php //echo $itemResultado['participantes'] ?>
        </td>
        <td>
        <td>
            <?php// echo $itemResultado[horasRealizadas] ?>
        </td>
        <td>
            <?php //echo $itemResultado[diasRestantes] ?>
        </td>-->
    </tr>
    
    <?php endforeach;?>
</table>
