/*Creación de Procedimiento Almacenados para Base de datos*/
USE DATABASE estancias;

/*PROCEDIMIENTOS PARA ALUMNO*/
DROP PROCEDURE IF EXISTS consultar_alumnos();
CREATE PROCEDURE consultar_alumos()
BEGIN
  SELECT * FROM alumno;
END;
CALL consultar_alumnos();
DROP PROCEDURE IF EXISTS consultar_alumno();
CREATE PROCEDURE consultar_alumno(IN mat INT(11))
BEGIN
  SELECT * FROM alumno WHERE Matricula = mat;
END;

DROP PROCEDURE eliminar_alumno();
CREATE PROCEDURE eliminar_alumno(IN mat INT(11))
BEGIN
  DELETE FROM  alumno WHERE Matricula = mat;
END

DROP PROCEDURE actualizar_alumno();
CREATE PROCEDURE actualizar_alumno(IN matri INT(11),IN nom VARCHAR(40),IN pat VARCHAR(40), IN mat VARCHAR(40),IN dom VARCHAR(150),IN sex VARCHAR(8), IN ims VARCHAR(12), IN cp VARCHAR(14),IN correo VARCHAR(30), IN id_g INT(11),IN id_cuat INT(11),IN id_cam INT(11))
BEGIN
  UPDATE alumno
  SET 
  Nombre_alumno = nom,
  Ap_paterno_alumno = pat,
  Ap_materno_alumno = mat,
  Domicilio = dom,
  Sexo = sex,
  IMSS = ims,
  CURP = cp,
  Correo_electronico = correo,
  id_grupo_fk = id_g,
  id_cuatrimestre_fk = id_cuat,
  id_campus_fk = id_cam
  WHERE Matricula = matri;
END;
CALL actualizar_alumno(1915031201,"panfilo","perez","perez","desconocido","hombre","12345","132415","pnafilo@dominio.com",1,1,1);

/*PROCEDIMIENTOS ALMACENADOS PARA asesor*/
DROP PROCEDURE IF EXISTS consultar_asesores;
CREATE PROCEDURE consultar_asesores()
BEGIN
  SELECT * FROM asesor_academico;
END;

DROP PROCEDURE IF EXISTS consultar_asesor;
CREATE PROCEDURE consultar_asesor(IN id INT(11))
BEGIN
  SELECT * FROM asesor_academico WHERE Id_asesor = id;
END;

DROP PROCEDURE IF EXISTS eliminar_asesor;
CREATE PROCEDURE eliminar_asesor(IN id_ase INT(11))
BEGIN
  DELETE FROM asesor_academico WHERE Id_asesor = id_ase;
END;
