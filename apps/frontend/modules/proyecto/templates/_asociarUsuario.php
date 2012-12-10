<div id="content-asociar-usuario">
 <?php if ($sf_user->hasFlash('OK')): ?>
    <div class="flash_ok"><?php echo $sf_user->getFlash('OK') ?></div>
<?php endif; ?> 
<h1>Asociar usuarios a <?php  echo $proyecto ?></h1>

<form action="<?php echo url_for('proyecto/updateAsociar?idProyecto='.$form->getObject()->getIdProyecto())?>"
method="post" >

<?php //echo $form['usuario_list']->renderLabel() ?>
<br/></br>

    <?php foreach($form as $field): ?>
    <?php echo $field->render() ?>
    <?php endforeach; ?>

</br> </br>

 

<input class="button dialogSubmit" type="submit"  value="Guardar"/>

</form>

</div>
