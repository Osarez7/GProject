CREATE TABLE evento (idevento BIGINT AUTO_INCREMENT, fechaevento DATETIME NOT NULL, nombreevento VARCHAR(50) NOT NULL, descevento VARCHAR(200), proyectofk BIGINT NOT NULL, fecha_cambio_estado DATETIME NOT NULL, fecha_actualizacion DATETIME NOT NULL, INDEX proyectofk_idx (proyectofk), PRIMARY KEY(idevento)) ENGINE = INNODB;
CREATE TABLE grupo (idgrupo BIGINT AUTO_INCREMENT, nombregrupo VARCHAR(50) NOT NULL, descgrupo VARCHAR(200) NOT NULL, PRIMARY KEY(idgrupo)) ENGINE = INNODB;
CREATE TABLE grupo__usuario (usuario BIGINT, grupo BIGINT, PRIMARY KEY(usuario, grupo)) ENGINE = INNODB;
CREATE TABLE perfil (idperfil BIGINT AUTO_INCREMENT, perfilnombre VARCHAR(50) NOT NULL, PRIMARY KEY(idperfil)) ENGINE = INNODB;
CREATE TABLE prioridad (idprioridad BIGINT AUTO_INCREMENT, nombreprioridad VARCHAR(50) NOT NULL, PRIMARY KEY(idprioridad)) ENGINE = INNODB;
CREATE TABLE proyecto (idproyecto BIGINT AUTO_INCREMENT, nombre VARCHAR(50) NOT NULL, fechainicio DATETIME, descproyecto VARCHAR(200) NOT NULL, statusfk BIGINT NOT NULL, prioridadfk BIGINT NOT NULL, fecha_creacion DATETIME NOT NULL, fecha_actualizacion DATETIME NOT NULL, INDEX statusfk_idx (statusfk), INDEX prioridadfk_idx (prioridadfk), PRIMARY KEY(idproyecto)) ENGINE = INNODB;
CREATE TABLE proyecto_usuario (idusuario BIGINT, idproyecto BIGINT, PRIMARY KEY(idusuario, idproyecto)) ENGINE = INNODB;
CREATE TABLE registro__estado__proyecto (idregistroproyecto BIGINT AUTO_INCREMENT, statusfk BIGINT NOT NULL, proyectofk BIGINT NOT NULL, fecha_cambio_estado DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX statusfk_idx (statusfk), INDEX proyectofk_idx (proyectofk), PRIMARY KEY(idregistroproyecto)) ENGINE = INNODB;
CREATE TABLE registro__estado__tarea (idregistrotarea BIGINT AUTO_INCREMENT, statusfk BIGINT NOT NULL, tareafk BIGINT NOT NULL, fecha_cambio_estado DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX statusfk_idx (statusfk), INDEX tareafk_idx (tareafk), PRIMARY KEY(idregistrotarea)) ENGINE = INNODB;
CREATE TABLE status (idstatus BIGINT AUTO_INCREMENT, nombrestatus VARCHAR(50) NOT NULL, PRIMARY KEY(idstatus)) ENGINE = INNODB;
CREATE TABLE tarea (idtarea BIGINT AUTO_INCREMENT, nombretarea VARCHAR(50) NOT NULL, duracion BIGINT NOT NULL, statusfk BIGINT NOT NULL, prioridadfk BIGINT NOT NULL, proyectofk BIGINT NOT NULL, tar_fecha_creacion DATETIME NOT NULL, tar_fecha_actulizacion DATETIME NOT NULL, root_id BIGINT, lft INT, rgt INT, level SMALLINT, INDEX statusfk_idx (statusfk), INDEX prioridadfk_idx (prioridadfk), INDEX proyectofk_idx (proyectofk), PRIMARY KEY(idtarea)) ENGINE = INNODB;
CREATE TABLE usuario (idusuario BIGINT AUTO_INCREMENT, perfilfk BIGINT NOT NULL, usr_nombre VARCHAR(50) NOT NULL, usr_apellido1 VARCHAR(20) NOT NULL, usr_apellido2 VARCHAR(20) NOT NULL, email VARCHAR(100) NOT NULL, usr_nick VARCHAR(20) NOT NULL UNIQUE, password VARCHAR(32) NOT NULL, fecha_creacion DATETIME NOT NULL, fecha_actualizacion DATETIME NOT NULL, INDEX perfilfk_idx (perfilfk), PRIMARY KEY(idusuario)) ENGINE = INNODB;
CREATE TABLE usuario_tarea (idusuario BIGINT, idtarea BIGINT, fecha_asignacion DATETIME NOT NULL, fecha_actualizacion DATETIME NOT NULL, PRIMARY KEY(idusuario, idtarea)) ENGINE = INNODB;
ALTER TABLE evento ADD CONSTRAINT evento_proyectofk_proyecto_idproyecto FOREIGN KEY (proyectofk) REFERENCES proyecto(idproyecto) ON DELETE CASCADE;
ALTER TABLE grupo__usuario ADD CONSTRAINT grupo__usuario_usuario_usuario_idusuario FOREIGN KEY (usuario) REFERENCES usuario(idusuario) ON DELETE CASCADE;
ALTER TABLE grupo__usuario ADD CONSTRAINT grupo__usuario_grupo_grupo_idgrupo FOREIGN KEY (grupo) REFERENCES grupo(idgrupo) ON DELETE CASCADE;
ALTER TABLE proyecto ADD CONSTRAINT proyecto_statusfk_status_idstatus FOREIGN KEY (statusfk) REFERENCES status(idstatus) ON DELETE CASCADE;
ALTER TABLE proyecto ADD CONSTRAINT proyecto_prioridadfk_prioridad_idprioridad FOREIGN KEY (prioridadfk) REFERENCES prioridad(idprioridad) ON DELETE CASCADE;
ALTER TABLE proyecto_usuario ADD CONSTRAINT proyecto_usuario_idusuario_usuario_idusuario FOREIGN KEY (idusuario) REFERENCES usuario(idusuario) ON DELETE CASCADE;
ALTER TABLE proyecto_usuario ADD CONSTRAINT proyecto_usuario_idproyecto_proyecto_idproyecto FOREIGN KEY (idproyecto) REFERENCES proyecto(idproyecto) ON DELETE CASCADE;
ALTER TABLE registro__estado__proyecto ADD CONSTRAINT registro__estado__proyecto_statusfk_status_idstatus FOREIGN KEY (statusfk) REFERENCES status(idstatus) ON DELETE CASCADE;
ALTER TABLE registro__estado__proyecto ADD CONSTRAINT registro__estado__proyecto_proyectofk_proyecto_idproyecto FOREIGN KEY (proyectofk) REFERENCES proyecto(idproyecto) ON DELETE CASCADE;
ALTER TABLE registro__estado__tarea ADD CONSTRAINT registro__estado__tarea_tareafk_tarea_idtarea FOREIGN KEY (tareafk) REFERENCES tarea(idtarea) ON DELETE CASCADE;
ALTER TABLE registro__estado__tarea ADD CONSTRAINT registro__estado__tarea_statusfk_status_idstatus FOREIGN KEY (statusfk) REFERENCES status(idstatus) ON DELETE CASCADE;
ALTER TABLE tarea ADD CONSTRAINT tarea_statusfk_status_idstatus FOREIGN KEY (statusfk) REFERENCES status(idstatus) ON DELETE RESTRICT;
ALTER TABLE tarea ADD CONSTRAINT tarea_proyectofk_proyecto_idproyecto FOREIGN KEY (proyectofk) REFERENCES proyecto(idproyecto) ON DELETE RESTRICT;
ALTER TABLE tarea ADD CONSTRAINT tarea_prioridadfk_prioridad_idprioridad FOREIGN KEY (prioridadfk) REFERENCES prioridad(idprioridad) ON DELETE RESTRICT;
ALTER TABLE usuario ADD CONSTRAINT usuario_perfilfk_perfil_idperfil FOREIGN KEY (perfilfk) REFERENCES perfil(idperfil) ON DELETE CASCADE;
ALTER TABLE usuario_tarea ADD CONSTRAINT usuario_tarea_idusuario_usuario_idusuario FOREIGN KEY (idusuario) REFERENCES usuario(idusuario) ON DELETE CASCADE;
ALTER TABLE usuario_tarea ADD CONSTRAINT usuario_tarea_idtarea_tarea_idtarea FOREIGN KEY (idtarea) REFERENCES tarea(idtarea) ON DELETE CASCADE;
