
<div id="home-content">


<div id="content-lateral-1">
  <div id="ultimos-avances">
    <ul>
           <li>Casos de uso</li>
           <li>Diagrama de clases</li> 
           <li>Manuales de usuario</li>
     <ul>

  </div>


  <div id="ultimos-comentarios">
        <ul>
           <li>Casos de uso</li>
           <li>Diagrama de clases</li> 
           <li>Manuales de usuario</li>
        <ul>

  </div>
<div>


<div id="content-central">


    <div id="mis-tareas">
  

  </div>

  
  <div id="mis-proyectos">
  

  </div>



    <?php if ($sf_user->hasCredential('gerente')): ?>

        <div id="proyectos-home">
       
            <h1>Proyectos Pendientes</h1>
            <table class="listado">
           <thead>
                <tr>
                    <th class="celda-inicial">Nombre</th>
                    <th>Prioridad</th>
                    <th class="celda-final">Fecha L&iacute;mite</th>
                </tr>
                         <thead>     
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
  
<div>



<div id="content-lateral-2">
    <div id="ultimos-eventos">
  

  </div>
 

  <div id="ultimos-mapas">
  

  </div>

<div>



</div>
