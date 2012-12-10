<table class="list">
    <th>
        Nombre Proyecto
    </th>
    <th>
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
