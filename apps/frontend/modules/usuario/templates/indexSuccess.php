<h1>Usuarios List</h1>

<table>
  <thead>
    <tr>
      <th>Id usuario</th>
      <th>Tipo usuario pk</th>
      <th>Usr nombre</th>
      <th>Usr apellido1</th>
      <th>Usr apellido2</th>
      <th>Email</th>
      <th>Usr nick</th>
      <th>Password</th>
      <th>Fecha creacion</th>
      <th>Fecha actualizacion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($usuarios as $usuario): ?>
    <tr>
      <td><a href="<?php echo url_for('usuario/show?id_usuario='.$usuario->getIdUsuario()) ?>"><?php echo $usuario->getIdUsuario() ?></a></td>
      <td><?php echo $usuario->getTipoUsuarioPK() ?></td>
      <td><?php echo $usuario->getUsrNombre() ?></td>
      <td><?php echo $usuario->getUsrApellido1() ?></td>
      <td><?php echo $usuario->getUsrApellido2() ?></td>
      <td><?php echo $usuario->getEmail() ?></td>
      <td><?php echo $usuario->getUsrNick() ?></td>
      <td><?php echo $usuario->getPassword() ?></td>
      <td><?php echo $usuario->getFechaCreacion() ?></td>
      <td><?php echo $usuario->getFechaActualizacion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('usuario/new') ?>">New</a>
