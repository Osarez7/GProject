<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Gesti&oacute;n de Proyectos</title>
        <link rel="shortcut icon" href="/favicon.ico" />
        <?php include_javascripts() ?>
        <?php include_stylesheets() ?>
    </head>

    <body>


        <div id="contenedor" class="shadow">

            <div id="header">



                <?php if ($sf_user->isAuthenticated()): ?>

                    <span class="nombre-bienvenida"><?php echo " Bienvenido(a) " . $sf_user->getAttribute('nombre') ?></span>

                    <a href="<?php echo url_for('login/logout') ?>" id="btn-cerrar">Cerrar Sesi&oacute;n</a>
                <?php endif; ?>


             

            </div>  

                <div id="menu-principal">

                    <div class="button-group">


                        <?php echo link_to('Home', 'home/index', array('class' => 'button primary icon home'))
                        ?>

                        <?php
                        echo link_to('Proyectos', 'proyecto/index', array('class' => 'button icon user'))
                        ?>



                        <?php if ($sf_user->hasCredential('gerente')): ?>
                            <?php  echo link_to('Reportes', 'reporte/index', array('class' => 'button'))?>
                        <?php endif; ?>

                        <?php if ($sf_user->hasCredential('admin')): ?>
                            <?php
                            echo link_to('Usuarios', 'usuario/index', array('class' => 'button icon user'))
                            ?>
                        <?php endif; ?>


                        <a href="<?php echo url_for('show_usuario', array('idUsuario' => $sf_user->getAttribute('idUsuario'))) ?>" class ='button icon settings'>Mis Datos</a>

                    </div>

                </div>



            <div id="contenido">
                 
                
                <?php if ($sf_user->hasFlash('error')): ?>
                    <div class="flash_error"><?php echo $sf_user->getFlash('error') ?></div>
                <?php endif; ?>
                <?php if ($sf_user->hasFlash('OK')): ?>
                    <div class="flash_ok"><?php echo $sf_user->getFlash('OK') ?></div>
                <?php endif; ?>    

                <?php echo $sf_content ?>
            </div>

            <div id="pie">
            </div>
        </div>

    </body>

</html>
