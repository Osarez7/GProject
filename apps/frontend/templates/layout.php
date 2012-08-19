<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Gesti&oacute;n de Proyectos</title>
        <link rel="shortcut icon" href="/favicon.ico" />
        <?php include_javascripts() ?>
        <?php include_stylesheets() ?>
    </head>

 <body>
     
     
   <div id="contenedor">
         
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
  <li><a href="<?php echo url_for('show_usuario',array('idUsuario' => $sf_user->getAttribute('idUsuario'))) ?>">Mis Datos</a></li>
 
 <?php if ($sf_user->hasCredential('admin')): ?>
 <li ><a href="<?php echo url_for('usuario/index') ?>" class="icon add">Usuarios</a></li> 
<?php endif; ?>
                <?php if ($sf_user->isAuthenticated()): ?>
                   <li id="btn-cerrar"> <a href="<?php echo url_for('login/logout') ?>" >Cerrar Sesi&oacute;n</a></li>
                <?php endif; ?>

</ul>
            </div>
            <div id="lateral">
              
            </div>

            <div id="contenido">
                 <?php echo $sf_content ?>
            </div>

            <div id="pie">
            </div>
        </div>

    </body>
    
</html>
