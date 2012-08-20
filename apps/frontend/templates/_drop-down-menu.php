<div id="cssmenu">
    <ul>
        <li class='active '><a href='/'class=" icon home"><span>Inicio</span></a></li>
        <li class='has-sub' ><a href="#">Proyectos</a>
            <ul>
                <li ><a href="<?php echo url_for('proyecto/index') ?>">Mis Proyectos</a></li>
                <?php if ($sf_user->hasCredential('gerente')): ?>
                    <li ><a href="<?php echo url_for('proyecto/new') ?>">Nuevo Proyecto</a></li>
                <?php endif; ?>
            </ul>
        <li ><a href="<?php echo url_for('tarea/index') ?>">Tareas</a></li>
        <li ><a href="<?php echo url_for('evento/index') ?>">Eventos</a></li>
        <li><a href="<?php echo url_for('show_usuario', array('idUsuario' => $sf_user->getAttribute('idUsuario'))) ?>">Mis Datos</a></li>

        <?php if ($sf_user->hasCredential('admin')): ?>
            <li ><a href="<?php echo url_for('usuario/index') ?>" class="icon add">Usuarios</a></li> 
        <?php endif; ?>


    </ul>
</div>