<td>
  <ul class="sf_admin_td_actions">
    <?php echo $helper->linkToEdit($usuario, array(  'params' =>   array(  ),  'class_suffix' => 'edit',  'label' => 'Editar',)) ?>
    <?php echo $helper->linkToDelete($usuario, array(  'params' =>   array(  ),  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',  'label' => 'Eliminar',)) ?>
    <li class="sf_admin_action_inactivar">
      <?php echo link_to(__('Inactivar', array(), 'messages'), 'usuario/ListInactivar?idUsuario='.$usuario->getIdUsuario(), array()) ?>
    </li>
  </ul>
</td>
