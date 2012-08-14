<h1>Usuarios List</h1>

<table>
  <thead>
    <tr>
      <th>Usuario NickName</th>
      <th>Tipo usuario pk</th>
      <th>Usr nombre</th>
      <th>Usr apellido1</th>
      <th>Usr apellido2</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($usuarios as $usuario): ?>
    <tr>
      <td><a href="<?php echo url_for('show_usuario',array('idUsuario'=>$usuario->getIdUsuario())) ?>"><?php echo $usuario->getUsrNick() ?></a></td>
      <td><?php echo $usuario->getPerfil() ?></td>
      <td><?php echo $usuario->getUsrNombre() ?></td>
      <td><?php echo $usuario->getUsrApellido1() ?></td>
      <td><?php echo $usuario->getUsrApellido2() ?></td>
      <td><?php echo $usuario->getEmail() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('usuario/new') ?>">New</a>
