


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

                   <?php
                    echo link_to(' ', 'proyecto/show?id_proyecto=' . $proyecto->getIdProyecto(), array(
                        'class' => 'custom-button icon ver',
                    ))
                    ?>


                            <a  href="<?php echo url_for('proyecto/show?id_proyecto=' . $proyecto->getIdProyecto()) ?>" class="button ver  icon custom-button">Ver Detalles</a>
                <a  href="<?php echo url_for('proyecto/edit?id_proyecto=' . $proyecto->getIdProyecto()) ?>" class="button editar icon custom-button">Editar</a>
            </td>

</tr>
     
<?php endforeach; ?>
</tbody>
</table>
<a href="<?php echo url_for('proyecto/new') ?>" class="button  icon add">Nuevo Proyecto</a>

