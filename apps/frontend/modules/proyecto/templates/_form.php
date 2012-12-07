<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<div id="content-form-proyecto">


<form action="<?php echo url_for('proyecto/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_proyecto='.$form->getObject()->getIdProyecto() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          
          <input type="submit" value="Guardar" class="button icon add  dialogSubmit" />
<?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'proyecto/delete?id_proyecto='.$form->getObject()->getIdProyecto(), array('method' => 'delete', 'class' => 'button icon trash danger dialogSubmit action-confirm')) ?>
          <?php endif; ?>
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form ?>
    </tbody>
  </table>
</form>


</div>
