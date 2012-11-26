<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<div id="form-cotent">

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

                    <input  id="guardar-tarea" class="dialogSubmit button" type="button" value="Guardar"  class="button"/>
                    <?php if (!$form->getObject()->isNew()): ?>
                        &nbsp;<?php echo link_to('Borrar', 'tarea/delete?id_tarea=' . $form->getObject()->getIdTarea(), array('class' => 'button danger icon trash action-confirm  dialogLink')) ?>
                    <?php endif; ?>
                </td>
            </tr>
        </tfoot>
        <tbody>
            <?php echo $form ?>
        </tbody>
    </table>
</form>

<div>

