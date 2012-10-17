<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<?php if ($sf_user->hasFlash('OK')): ?>
    <div class="flash_ok"><?php echo $sf_user->getFlash('OK') ?></div>
<?php endif; ?> 

<form action="<?php echo url_for('tarea/' . ($form->getObject()->isNew() ? 'create' : 'update') . (!$form->getObject()->isNew() ? '?id_tarea=' . $form->getObject()->getIdTarea() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
    <?php if (!$form->getObject()->isNew()): ?>
        <input type="hidden" name="sf_method" value="put" />
    <?php endif; ?>
    <table>
        <tfoot>
            <tr>
                <td colspan="2">

                    <input  id="guardar-tarea" type="button" value="Guardar"  class="button icon check"/>
                    <?php if (!$form->getObject()->isNew()): ?>
                        &nbsp;<?php echo link_to('Delete', 'tarea/delete?id_tarea=' . $form->getObject()->getIdTarea(), array('method' => 'delete', 'confirm' => 'Are you sure?', 'class' => 'button danger trash')) ?>
                    <?php endif; ?>
                </td>
            </tr>
        </tfoot>
        <tbody>
            <?php echo $form ?>
        </tbody>
    </table>
</form>
