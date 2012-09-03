<h1>Proyectos</h1>



<?php foreach ($proyectos as $proyecto): ?>
    
    <div class="info-proyecto">
        <div class="titulo-proyecto"> <?php echo $proyecto->getNombre() ?></div>
        
        <div class="txt-descripcion">
            <?php echo $proyecto->getDescProyecto() ?>
        </div>
        
        
        <div class="into_estado_proyecto">
         <span> Estado:  </span> <?php echo $proyecto->getStatus() ?></br>
         <span> Prioridad:  </span><?php echo $proyecto->getPrioridad() ?>
        </div>
        <div class="controles-proyecto">
        <a  href="<?php echo url_for('proyecto/show?id_proyecto=' . $proyecto->getIdProyecto()) ?>" class="button ver  icon custom-button">Ver Detalles</a>
        <a  href="<?php echo url_for('proyecto/edit?id_proyecto=' . $proyecto->getIdProyecto()) ?>" class="button editar icon custom-button">Editar</a>
        </div>
    </div>

<?php endforeach; ?>


<a href="<?php echo url_for('proyecto/new') ?>" class="button  icon add">Nuevo Proyecto</a>

