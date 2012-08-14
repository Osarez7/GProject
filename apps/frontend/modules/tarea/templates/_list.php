


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
<td><input value="addTarea" type="button"document.location.href="<?php echo url_for('add_child',array("idTarea"=>$node['idTarea'])) ?>" ><?php echo button_to('Añandir','/tarea/hija?idTarea='.$node['idTarea']);  ?> </td>

 
</tr>
<?php endforeach; ?>
</table>

<?php endif;?>


  <a href="<?php echo url_for('tarea/new') ?>">New</a>
