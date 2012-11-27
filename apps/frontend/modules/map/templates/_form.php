<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>


<div id="form-mapa-content">
<form action="<?php echo url_for('map/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_mapa='.$form->getObject()->getIdMapa() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'map/delete?id_mapa='.$form->getObject()->getIdMapa(), array('method' => 'delete', 'class' => 'button icon trash danger dialogSubmit action-confirm')) ?>
          <?php endif; ?>
          <input type="submit" value="Guardar" class="dialogSubmit button"/>
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form ?>
    </tbody>
  </table>
</form>
 <div>
