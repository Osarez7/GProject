


<h1>Proyectos</h1>
<table>

<tr>
  <th>Nombre</th>
  <th>Estado</th>
  <th>Prioridad</th>
  <th>Acciones</th>
</tr>
<?php foreach ($proyectos as $proyecto): ?>
<tr>
        <td>
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
                            <a  href="<?php echo url_for('proyecto/show?id_proyecto=' . $proyecto->getIdProyecto()) ?>" class="button ver  icon custom-button">Ver Detalles</a>
                <a  href="<?php echo url_for('proyecto/edit?id_proyecto=' . $proyecto->getIdProyecto()) ?>" class="button editar icon custom-button">Editar</a>
            </td>

</tr>
     
<?php endforeach; ?>

</table>
<a href="<?php echo url_for('proyecto/new') ?>" class="button  icon add">Nuevo Proyecto</a>

