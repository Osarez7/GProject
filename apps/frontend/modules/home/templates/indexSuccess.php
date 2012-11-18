
<div id="home-content">


    <?php if ($sf_user->hasCredential('admin')): ?>

        <div id="admin-home">

            <ul id="menu-admin">
                <li id="home-admin">

                    <img src="/images/fugue-icons-3.5/icons/alarm-clock.png">
                    Tareas
                </li>

                <li id="user-admin">
                    <img src="/images/fugue-icons-3.5/icons/user.png">
                    <span>Usuarios</span>
                </li>

                <li id="system-admin">
                    <img src="/images/fugue-icons-3.5/icons/wrench-screwdriver.png">
                    <span> Sistema</span>
                </li>

                <li id="system-admin">
                    <img src="/images/fugue-icons-3.5/icons/palette.png">
                    <span> Estilos </span>
                </li>
            </ul>     

        </div>

    <?php endif; ?>



    <?php if ($sf_user->hasCredential('gerente')): ?>

        <div id="proyectos-home">
       
            <h1>Tareas Pendientes</h1>
            <table class="listado">

                <tr>
                    <th>Nombre</th>
                    <th>Prioridad</th>
                    <th>Fecha L&imite</th>
                </tr>

                <?php foreach ($proyectos as $i => $proyecto): ?>

                    <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
                        <td><?php echo $proyecto->getNombre() ?></td> 
                        <td><?php echo $proyecto->getPrioridad() ?></td> 
                        <td><?php echo $proyecto->getFechaInicio() ?></td> 
                    </tr>
                <?php endforeach; ?>
            </table>   
        
        </div>

    <?php endif; ?>   



    <?php if ($sf_user->hasCredential('ejecutor')): ?>

        <div id="tareas-home">
            <h1>Tareas Pendientes</h1>
            <table class="listado">

                <tr>
                    <th>Nombre</th>
                    <th>Prioridad<th>
                    <th>Fecha L&imite<th>
                </tr>

                <?php foreach ($tareas as $i => $tarea): ?>

                    <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
                        <td>$tarea->nombreTarea</td>    
                    </tr>
                <?php endforeach; ?>
            </table>   
        </div>
    <?php endif; ?>   

</div>
