<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

    
    <form action="<?php echo url_for('login/index')?>" method="post">
        <table>
            <tbody>
<!--                Mostramos el mensaje flash, en caso de que haya.-->
                <?php if ($sf_user->hasFlash('error')): ?>
                    <div class="flash_error"><?php echo $sf_user->getFlash('error') ?></div>
                <?php endif; ?>
<!--                //Printamos el formulario.-->
                <?php echo $form; ?>
                <tr>
                    <th></th>
                    <td>
                        <input class="button" type="submit" value="Ingresar" name="login">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>

