


<h1>Proyectos</h1>
<table class="listado">

<thead>
<tr>
  <th class="celda-inicial">Nombre</th>
  <th>Estado</th>
  <th>Prioridad</th>
  <th class="celda-final">Acciones</th>
</tr>
</thead>


<tbody>     
<?php foreach ($proyectos as $i => $proyecto): ?>
 
<tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
        <td class="primera-celda">
             <?php echo $proyecto->getNombre() ?>
          </td>

           <td>
           
                <span class="<?php echo $proyecto->getStatus() ?>"> 
                     <?php echo $proyecto->getStatus() ?></br>     
               </span> 
           </td>  
 
              <td>
            <span class="<?php echo $proyecto->getPrioridad() ?>"> 
                <?php echo $proyecto->getPrioridad() ?>
            </span>
            </td>  

           
            <td>

                  <?php  echo link_to(' ', 'proyecto/show?id_proyecto=' . $proyecto->getIdProyecto(), array(
                        'class' => ' custom-button icon ver '
                        ,'title' => 'Ver detalles'
                    ));
?>

   <?php  echo link_to(' ', 'proyecto/edit?id_proyecto=' . $proyecto->getIdProyecto(), array(
                        'class' => ' custom-button icon editar dialogLink '
                        ,'title' => 'Editar'
                    ));

?>
 

</tr>
     
<?php endforeach; ?>
</tbody>
</table>
<a href="<?php echo url_for('proyecto/new') ?>" class="dialogLink button  icon add">Nuevo Proyecto</a>

