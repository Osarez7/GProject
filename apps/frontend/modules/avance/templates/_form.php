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
          &nbsp;<a href="<?php echo url_for('avance/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'avance/delete?id_avance='.$form->getObject()->getIdAvance(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
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
        <th><?php echo $form['duracion']->renderLabel() ?></th>
        <td>
          <?php echo $form['duracion']->renderError() ?>
          <?php echo $form['duracion'] ?>
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
        <th><?php echo $form['tareaFK']->renderLabel() ?></th>
        <td>
          <?php echo $form['tareaFK']->renderError() ?>
          <?php echo $form['tareaFK'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fechaCreacion']->renderLabel() ?></th>
        <td>
          <?php echo $form['fechaCreacion']->renderError() ?>
          <?php echo $form['fechaCreacion'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fechaActulizacion']->renderLabel() ?></th>
        <td>
          <?php echo $form['fechaActulizacion']->renderError() ?>
          <?php echo $form['fechaActulizacion'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
