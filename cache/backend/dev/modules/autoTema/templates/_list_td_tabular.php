<td class="sf_admin_text sf_admin_list_td_idTema">
  <?php echo link_to($tema->getIdTema(), 'tema_edit', $tema) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_tituloTema">
  <?php echo $tema->getTituloTema() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_proyectoFK">
  <?php echo $tema->getProyectoFK() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_usuarioFK">
  <?php echo $tema->getUsuarioFK() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_fecha_creacion">
  <?php echo false !== strtotime($tema->getFechaCreacion()) ? format_date($tema->getFechaCreacion(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_fecha_actualizacion">
  <?php echo false !== strtotime($tema->getFechaActualizacion()) ? format_date($tema->getFechaActualizacion(), "f") : '&nbsp;' ?>
</td>
