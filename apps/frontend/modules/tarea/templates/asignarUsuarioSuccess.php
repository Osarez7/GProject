
<div id="content-asignar-usuario">

<h1>Tarea <?php  echo $tarea ?></h1>
<h2>Asignar Usuario</h2>

<form action="<?php echo url_for('tarea/updateAsignar?idTarea='.$form->getObject()->getIdTarea())?>"
method="post" >

<br/></br>

    <?php foreach($form as $field): ?>
    <?php echo $field->render() ?>
    <?php endforeach; ?>

</br> </br>

 

<input class="button dialogSubmit"  type="submit"  value="Guardar"/>

</form>

</div>

