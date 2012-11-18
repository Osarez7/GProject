<td colspan="3">
  <?php echo __('%%usr_nombre%% - %%email%% - %%usr_nick%%', array('%%usr_nombre%%' => link_to($usuario->getUsrNombre(), 'usuario_edit', $usuario), '%%email%%' => $usuario->getEmail(), '%%usr_nick%%' => $usuario->getUsrNick()), 'messages') ?>
</td>
