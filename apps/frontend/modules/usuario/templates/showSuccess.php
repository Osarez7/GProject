<table  class="info">
  <tbody>
    <tr>
      <th>Id usuario:</th>
      <td><?php echo $usuario->getIdUsuario() ?></td>
    </tr>
    <tr>
      <th>Perfil:</th>
      <td><?php echo $usuario->getPerfil() ?></td>
    </tr>
    <tr>
      <th>Usr nombre:</th>
      <td><?php echo $usuario->getUsrNombre() ?></td>
    </tr>
    <tr>
      <th>Usr apellido1:</th>
      <td><?php echo $usuario->getUsrApellido1() ?></td>
    </tr>
    <tr>
      <th>Usr apellido2:</th>
      <td><?php echo $usuario->getUsrApellido2() ?></td>
    </tr>
    <tr>
      <th>Email:</th>
      <td><?php echo $usuario->getEmail() ?></td>
    </tr>
    <tr>
      <th>Usr nick:</th>
      <td><?php echo $usuario->getUsrNick() ?></td>
    </tr>
    <tr>
      <th>Password:</th>
      <td><?php echo $usuario->getPassword() ?></td>
    </tr>
    <tr>
      <th>Fecha creacion:</th>
      <td><?php echo $usuario->getFechaCreacion() ?></td>
    </tr>
    <tr>
      <th>Fecha actualizacion:</th>
      <td><?php echo $usuario->getFechaActualizacion() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('usuario/edit?id_usuario='.$usuario->getIdUsuario()) ?>">Editar</a>






