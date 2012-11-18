<td class="sf_admin_text sf_admin_list_td_usr_nombre">
  <?php echo link_to($usuario->getUsrNombre(), 'usuario_edit', $usuario) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_email">
  <?php echo $usuario->getEmail() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_usr_nick">
  <?php echo $usuario->getUsrNick() ?>
</td>
