<table  class="info">
  <tbody>
      <th><label>Perfil:</label></th>
      <td><?php echo $usuario->getPerfil() ?></td>
    </tr>
    <tr>
      <th><label>Nombre:</label></th>
      <td><?php echo $usuario->getUsrNombre() ?></td>
    </tr>
    <tr>
       <th><label>Primer Apellido:</label></th>
       <td><?php echo $usuario->getUsrApellido1() ?></td>
    </tr>
    <tr>
      <th><label>Segundo  Apellido:</label></th>
      <td><?php echo $usuario->getUsrApellido2() ?></td>
    </tr>
    <tr>  
      <th><label>Email:</label></th>
      <td><?php echo $usuario->getEmail() ?></td>
    </tr>
    <tr>
     <th><label>Nick:</label></th>
     <td><?php echo $usuario->getUsrNick() ?></td>
    </tr>
  
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('usuario/edit?idUsuario='.$usuario->getIdUsuario()) ?>">Editar</a>






