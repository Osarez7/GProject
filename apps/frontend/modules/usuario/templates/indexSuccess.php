<h1>Lista de Usuarios</h1>

<table>
  <thead>
    <tr>
      <th>NickName</th>
      <th>Nombre</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($usuarios as $usuario): ?>
    <tr>
      <td><a href="<?php echo url_for('show_usuario',array('idUsuario'=>$usuario->getIdUsuario())) ?>"><?php echo $usuario->getUsrNick() ?></a></td>
      <td><?php echo $usuario->getUsrNombre()." " .$usuario->getUsrApellido1()." ".$usuario->getUsrApellido2() ?> </td>
      <td><?php echo $usuario->getEmail() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a  class="button" href="<?php echo url_for('usuario/new') ?>">Nuevo Usuario</a>
