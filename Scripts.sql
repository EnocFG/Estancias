/*Creación de Procedimiento Almacenados para Base de datos*/
USE DATABASE estancias;

/*PROCEDIMIENTOS PARA ALUMNO*/
DROP PROCEDURE IF EXISTS consultar_alumnos();

CREATE PROCEDURE consultar_alumos() BEGIN
SELECT
  *
FROM
  alumno;

END;

CALL consultar_alumnos();

DROP PROCEDURE IF EXISTS consultar_alumno();

CREATE PROCEDURE consultar_alumno(IN mat INT(11)) BEGIN
SELECT
  *
FROM
  alumno
WHERE
  Matricula = mat;

END;

DROP PROCEDURE eliminar_alumno();

CREATE PROCEDURE eliminar_alumno(IN mat INT(11)) BEGIN
DELETE FROM
  alumno
WHERE
  Matricula = mat;

END DROP PROCEDURE actualizar_alumno();

CREATE PROCEDURE actualizar_alumno(
  IN matri INT(11),
  IN nom VARCHAR(40),
  IN pat VARCHAR(40),
  IN mat VARCHAR(40),
  IN dom VARCHAR(150),
  IN sex VARCHAR(8),
  IN ims VARCHAR(12),
  IN cp VARCHAR(14),
  IN correo VARCHAR(30),
  IN id_g INT(11),
  IN id_cuat INT(11),
  IN id_cam INT(11)
) BEGIN
UPDATE
  alumno
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
WHERE
  Matricula = matri;

END;

CALL actualizar_alumno(
  1915031201,
  "panfilo",
  "perez",
  "perez",
  "desconocido",
  "hombre",
  "12345",
  "132415",
  "pnafilo@dominio.com",
  1,
  1,
  1
);

DROP PROCEDURE IF EXISTS insertar_alumno;

CREATE PROCEDURE insertar_alumno(
  IN nom VARCHAR(40),
  IN pat VARCHAR(40),
  IN mater VARCHAR(40),
  IN dom VARCHAR(150),
  IN sex VARCHAR(8),
  IN ims VARCHAR(12),
  IN curp VARCHAR(14),
  IN correo VARCHAR(30),
  IN gru INT(11),
  IN cuat INT(11),
  IN cam INT(11)
) BEGIN
END;

/*PROCEDIMIENTOS ALMACENADOS PARA asesor*/
DROP PROCEDURE IF EXISTS consultar_asesores;

CREATE PROCEDURE consultar_asesores() BEGIN
SELECT
  *
FROM
  asesor_academico;

END;

DROP PROCEDURE IF EXISTS consultar_asesor;

CREATE PROCEDURE consultar_asesor(IN id INT(11)) BEGIN
SELECT
  *
FROM
  asesor_academico
WHERE
  Id_asesor = id;

END;

DROP PROCEDURE IF EXISTS eliminar_asesor;

CREATE PROCEDURE eliminar_asesor(IN id_ase INT(11)) BEGIN
DELETE FROM
  asesor_academico
WHERE
  Id_asesor = id_ase;

END;

DROP PROCEDURE IF EXISTS insertar_asesor;

CREATE PROCEDURE insertar_asesor(
  IN nom VARCHAR(40),
  IN pat VARCHAR(40),
  IN mat VARCHAR(40)
) BEGIN
INSERT INTO
  asesor_academico(
    Nombre_asesor,
    Ap_paterno_asesor,
    Ap_materno_asesor
  )
VALUES
  (nom, pat, mat);

END;

CALL insertar_asesor("ernesto", "amaro", "hernandez");

DROP PROCEDURE IF EXISTS actualizar_asesor;

CREATE PROCEDURE actualizar_asesor(
  IN id INT(11),
  IN nom VARCHAR(40),
  IN pat VARCHAR(40),
  IN mat VARCHAR(40)
) BEGIN
UPDATE
  asesor_academico
SET
  Nombre_asesor = nom,
  Ap_paterno_asesor = pat,
  Ap_materno_asesor = mat
WHERE
  Id_asesor = id;

END;

CALL actualizar_asesor(1, "Francisco", "Mujica", "Reyes");

/* load data infile "C:\\Users\\hi_en\\Downloads\\hoja.csv" into table alumno fields terminated by ',' optionally enclosed by '"' lines terminated by '\r\n'; */
/* SELECT
 * into outfile "C:\\Users\\hi_en\\Downloads\\hoja2.csv" fields TERMINATED BY ',' OPTIONALLY ENCLOSED BY '"' LINES TERMINATED BY '\r\n'
 from
 alumno; */
DROP VIEW alumno_telefono;

CREATE VIEW alumno_telefono AS
SELECT
  *
FROM
  alumno AS a
  INNER JOIN telefono_alumno ON a.Matricula = telefono_alumno.Matricula_fk;

/*****vista que muestre solo dos columnas de telefono***/
CREATE VIEW alumno_telefono AS
SELECT
  *
FROM
  alumno
  INNER JOIN telefono_alumno ta ON alumno.Matricula;

SELECT
  *
FROM
  alumno_telefono;

SELECT
  *
FROM
  empleados
  INNER JOIN departamentos ON empleados.e_id = departamentos.d_id;

DROP PROCEDURE `PA_alumno`;

CREATE PROCEDURE PA_alumno(IN Mat INT(11)) BEGIN
SELECT
  *
FROM
  alumno_telefono
WHERE
  alumno_telefono.Matricula = Mat;

END;

CALL PROCEDURE PA_alumno(1915031201);

/**********PROCEDIMIENTOS PARA EMPRESA************/
DROP PROCEDURE IF EXISTS consultar_empresas;

CREATE PROCEDURE consultar_empresas() BEGIN
SELECT
  *
FROM
  empresa;

END;

CALL consultar_empresas();

CREATE PROCEDURE eliminar_empresa(IN id INT(11)) BEGIN
DELETE FROM
  empresa
WHERE
  id_empresa = id;

END;

CALL eliminar_empresa();

DROP procedure insertar_empresa;

CREATE PROCEDURE insertar_empresa(
  IN nom VARCHAR(50),
  IN dom VARCHAR(150),
  IN tel double,
  IN correo varchar(50)
) begin
insert into
  empresa(
    Nombre_empresa,
    Domicilio_empresa,
    Telefono_empresa,
    Correo_electronico
  )
VALUES
  (nom, dom, tel, correo);

end;

CALL insertar_empresa(
  "FLEXY",
  "Texcoco, Mexico",
  56498721,
  "Puma@gmail.com"
);

drop procedure if exists actualizar_empresa;

CREATE Procedure actualizar_empresa(
  IN id INT(11),
  in nom varchar(50),
  in dom varchar(150),
  in tel double,
  in correo varchar(50)
) begin
update
  empresa
set
  id_empresa = id,
  Nombre_empresa = nom,
  Domicilio_empresa = dom,
  Telefono_empresa = tel,
  Correo_electronico = correo
where
  id_empresa = id;

end;

call actualizar_empresa(
  2,
  "DC",
  "Durango, Sinaloa",
  9874561,
  "DC@outlook.com"
);