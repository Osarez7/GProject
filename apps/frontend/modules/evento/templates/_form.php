<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<div id="evento-form-content" class="cotent-form">
<form action="<?php echo url_for('evento/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_evento='.$form->getObject()->getIdEvento() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a style="display:none" href="<?php echo url_for('evento/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'evento/delete?id_evento='.$form->getObject()->getIdEvento(), array( 'class' =>"button icon trash danger   action-confirm  dialogLink updateCalendar")); ?>
          <?php endif; ?>
          <input type="submit" value="Guardar" class="dialogSubmit button updateCalendar"  />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form ?>
    </tbody>
  </table>
</form>
<div>
