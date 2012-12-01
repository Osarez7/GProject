<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('avance/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_avance='.$form->getObject()->getIdAvance() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'avance/delete?id_avance='.$form->getObject()->getIdAvance(), array('method' => 'delete', 'class' => 'button icon trash  danger action-confirm')) ?>
          <?php endif; ?>
          <input type="submit" value="Guardar" class="button icon add dialogSubmit" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['tituloAvance']->renderLabel() ?></th>
        <td>
          <?php echo $form['tituloAvance']->renderError() ?>
          <?php echo $form['tituloAvance'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['resumen']->renderLabel() ?></th>
        <td>
          <?php echo $form['resumen']->renderError() ?>
          <?php echo $form['resumen'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fechaInicio']->renderLabel() ?></th>
        <td>
          <?php echo $form['fechaInicio']->renderError() ?>
          <?php echo $form['fechaInicio'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fechaFinal']->renderLabel() ?></th>
        <td>
          <?php echo $form['fechaFinal']->renderError() ?>
          <?php echo $form['fechaFinal'] ?>
        </td>
      </tr>
      <tr>
        <th></th>
        <td>
          <?php echo $form['tareaFK']->renderError() ?>
          <?php echo $form['tareaFK'] ?>
        </td>
      </tr>
    
    </tbody>
  </table>
</form>
