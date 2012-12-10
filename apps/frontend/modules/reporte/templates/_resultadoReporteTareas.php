<table class="list">
    <th>
       Tarea
    </th>
    <th>
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
    
    
    <th>
      estado
    </th>
    
    <th>
      prioridad
    </th>
   
    <th>
        Tareas En Proceso
    </th>
    
    <th>
        Tareas Pendientes
    </th>
    
    <?php foreach($lstResultados as $itemResultado): ?>
    <tr>
        <td>
            <?php echo $itemResultado['nombreProyecto'] ?>
        </td>
        <td>
            <?php echo $itemResultado['participantes'] ?>
        </td>
        <td>
            <?php echo $itemResultado['horasEstimadas'] ?>
        </td>
        <td>
            <?php echo $itemResultado[horasRealizadas] ?>
        </td>
        <td>
            <?php echo $itemResultado[diasRestantes] ?>
        </td>
    </tr>
    
    <?php endforeach;?>
</table>
