<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<div id="lugar-form-content" class="cotent-form">
<?php if($titulo): ?>
 <h1> <?php  echo $titulo ?>  </h1>
<?php endif; ?>


<form action="<?php echo url_for('lugar/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_lugar='.$form->getObject()->getIdLugar() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Borrar', 'lugar/delete?id_lugar='.$form->getObject()->getIdLugar(), array('class' => 'button icon danger trash action-confirm dialogLink')) ?>
          <?php endif; ?>
          <input type="submit" value="Guardar"  class="button dialogSubmit"/>
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form ?>
    </tbody>
  </table>
</form>

</div> 
