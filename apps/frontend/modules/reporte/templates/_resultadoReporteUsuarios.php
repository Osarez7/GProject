<table class="list">
    <th>
        Nombre 
    </th>
    <th>
        Horas trabajadas
    </th>
    
    <th>
        Tareas asignadas
    </th>
    
    <th>
        Total horas tareas asignadas
    </th>
    <th>
        Tareas terminadas
    </th>
    
    <th>
       proyectos   - optional
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
