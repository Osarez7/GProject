<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Administración de gestión</title>
<link rel="shortcut icon" href="/favicon.ico" />
<?php use_stylesheet('admin.css') ?>
<?php include_javascripts() ?>
<?php include_stylesheets() ?>
</head>
<body>
<div id="container">
<div id="header">

<a href="<?php echo url_for('homepage') ?>">
<h1>
 Administración
</h1>
</a>

<a href="<?php echo url_for('login/logout') ?>" id="btn-cerrar">Cerrar Sesi&oacute;n</a>
                
</div>

<div id="menu_admin">
    <ul >
               

                <li id="user-admin">
                  <?php echo link_to('Usuarios', 'usuario') ?>
                </li>

                 <li id="user-admin">
                   <?php echo link_to('Perfiles', 'perfil') ?>
                </li>

                  <li id="user-admin">
                   <?php echo link_to('Niveles de prioridad', 'prioridad') ?>
                </li>
        
        
                 <li id="user-admin">
                   <?php echo link_to('Estados', 'status') ?>
                </li>
        
               

                
            </ul>     
</div> 
<div id="content">

<?php echo $sf_content ?>

</div>
<div id="footer">

</div>
</div>
</body>
</html>

