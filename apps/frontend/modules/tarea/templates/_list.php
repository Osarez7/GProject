


<h1>Arb&oacute;l de Tareas (Nested)</h1>

<?php if($arbolTarea):?>
<table>
    <tr>
        <th>Titulo</th>
        <th>Añadir</th>
    </tr>
    <?php foreach ($arbolTarea as $node): ?>
<tr>
<td> <?php  echo str_repeat('&nbsp;&nbsp;', $node['level']) . $node['nombreTarea'] ." ".$node['idTarea']. "\n"; ?> </td>

<td>
    
    <td><?php echo link_to('Añadir Tarea', 'tarea/add_child',array("idTarea"=>$node['idTarea'],

'class' => 'button icon add'
)) 
        ?>
        

        <?php echo link_to('Borrar Tarea', 'tarea/add_child',array("idTarea"=>$node['idTarea'],

'class' => 'button danger icon trash'
)) 
        ?>
        

 <?php echo link_to('Asignar', 'tarea/asignarUsuario?idTarea='.$node['idTarea'],array(

'class' => 'button  icon add'
)) 
        ?>
  


    </td>



 
 
</tr>
<?php endforeach; ?>
</table>

<?php endif;?>


  <a href="<?php echo url_for('tarea/new') ?>">New</a>
