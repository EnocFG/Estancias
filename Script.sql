CALL insertar_cuatrim("primero");
CALL actualizar_cuatrim(1,"primero");
CALL consultar_cuatrim();
call eliminar_cuatrim(6);
SELECT * FROM cuatrimestre;
/************PROCEDIMIENTOS DE CUATRIMESTRE********************/
DELIMITER $$
DROP PROCEDURE IF EXISTS actualizar_cuatrim;
CREATE PROCEDURE actualizar_cuatrim(id_cuatri INT(11), descrip VARCHAR(20))
BEGIN
UPDATE cuatrimestre
SET
Id_cuatrimestre = id_cuatri,
Descripcion = descrip
WHERE Id_cuatrimestre = id_cuatri;
END$$;
DELIMITER **
DROP PROCEDURE IF EXISTS consultar_cuatrim();
CREATE Procedure consultar_cuatrim()
BEGIN
SELECT * from cuatrimestre;
END;
DELIMITER $
CREATE Procedure eliminar_cuatrim(IN id_cuatrim int(11))
BEGIN
delete from cuatrimestre where Id_cuatrimestre = id_cuatrim;
END$

/*********************************/

DROP PROCEDURE IF EXISTS insertar_campus;
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertar_campus`(IN descr_campus VARCHAR(40))
BEGIN
INSERT INTO campus(Descripcion_campus) VALUES(descr_campus);
END

call insertar_campus("Pachuca");
select * from campus;

DROP Procedure if exists eliminar_campus;
create procedure eliminar_campus(IN id_camp INT(11))
BEGIN
DELETE FROM campus WHERE id_campus = id_camp;
END;
CALL eliminar_campus(3);

DROP Procedure IF EXISTS consultar_campus();
create procedure consultar_campus()
BEGIN
SELECT * FROM campus;
END;

call consultar_campus();

create procedure actualizar_campus(IN id_camp int(11), IN descr_campus VARCHAR(40))
BEGIN
update campus
set
Id_campus = id_camp, 
Descripcion_campus = descr_campus
where Id_campus = id_camp;
END

call actualizar_campus(2,"Actopan");
/*******************alumno**********************/
DROP procedure if exists actualizar_alumno;
create procedure actualizar_alumno(IN mat int(11),
IN nomb_al VARCHAR(40),
IN ap_pat VARCHAR(40),
IN ap_mat VARCHAR(40),
IN dom VARCHAR(150),
IN sex VARCHAR(8),
IN ims VARCHAR(12),
IN curp_al VARCHAR(18),
IN correo_al VARCHAR(30),
IN id_grp_fk int(11),
IN id_cuat_fk int(11),
IN id_camp_fk int(11)
)
BEGIN 
UPDATE alumno
SET 
Matricula = mat,
Nombre_alumno = nomb_al,
Ap_paterno_alumno = ap_pat,
Ap_materno_alumno = ap_mat,
Domicilio = dom,
Sexo = sex,
IMSS = ims,
CURP = curp_al,
Correo_electronico = correo_al,
id_grupo_fk = id_grp_fk,
id_cuatrimestre_fk = id_cuat_fk,
id_campus_fk = id_camp_fk
WHERE Matricula = mat;
END;
CALL actualizar_alumno(1,"Antonio","Lopes","Rico","Calle Ceiba","Hombre","123458","123458","Toño@gmail.com",3,2,1);
select * from alumno;

drop Procedure if exists consultar_alumno;
create procedure consultar_alumno(IN mat INT(11))
BEGIN 
select * from alumno
where Matricula = mat;
END;
call consultar_alumno();

drop Procedure if exists consultar_alumnos;
create procedure consultar_alumnos())
BEGIN 
select * from alumno
END;
call consultar_alumnos();

DROP Procedure if exists eliminar_alumno;
CREATE Procedure eliminar_alumno(IN mat int(11))
BEGIN
delete from alumno
where Matricula = mat;
END;
CALL eliminar_alumno();

drop Procedure if exists insertar_alumno;
CREATE Procedure insertar_alumno(IN mat int(11),
IN nomb_al VARCHAR(40),
IN ap_pat VARCHAR(40),
IN ap_mat VARCHAR(40),
IN dom VARCHAR(150),
IN sex VARCHAR(8),
IN ims VARCHAR(12),
IN curp_al VARCHAR(18),
IN correo_al VARCHAR(30),
IN id_grp_fk int(11),
IN id_cuat_fk int(11),
IN id_camp_fk int(11))
BEGIN
INSERT INTO alumno(Matricula,Nombre_alumno, Ap_paterno_alumno,Ap_materno_alumno,Domicilio,Sexo,IMSS,CURP,Correo_electronico,id_grupo_fk,id_cuatrimestre_fk,id_campus_fk) VALUES(mat,nomb_al,ap_pat,ap_mat,dom,sex,ims,curp_al,correo_al,id_grp_fk,id_cuat_fk,id_camp_fk);
END;

CALL insertar_alumno(1915031204,"Paco","Lopez","Gonzalez","Daxtha","hombre","12345","12345","enoc@gmail.com",1,1,1);
/****************************************/
USE `estancias`;
DROP procedure IF EXISTS `eliminar_competencia`;

DELIMITER $$
USE `estancias`$$
CREATE PROCEDURE `eliminar_competencia` (IN id_comp int(11))
BEGIN
DELETE FROM competencias
WHERE id_competencia = id_comp;
END$$

DELIMITER ;
/****************************************/
USE `estancias`;
DROP procedure IF EXISTS `insertar_competencia`;

DELIMITER $$
USE `estancias`$$
CREATE PROCEDURE `insertar_competencia` (IN id_comp int(11), IN descrp varchar(350))
BEGIN
INSERT INTO competencias(id_competencia,descripcion) VALUES(id_comp,descrp);
END$$

DELIMITER ;
/****************************************/
USE `estancias`;
DROP procedure IF EXISTS `actualizar_cuatrimestre`;

DELIMITER $$
USE `estancias`$$
CREATE PROCEDURE `actualizar_cuatrimestre` (IN id_cuat int(11), IN descrp varchar(350))
BEGIN
UPDATE cuatrimestre
SET
id_cuatrimestre = id_comp,
Descripcion = descrp
WHERE Id_cuatrimestre = id_cuat;
END$$

DELIMITER ;
/****************************************/
USE `estancias`;
DROP procedure IF EXISTS `consultar_cuatrimestre`;
DELIMITER $$
USE `estancias`$$
CREATE PROCEDURE `consultar_cuatrimestre` ()
BEGIN
SELECT * FROM cuatrimestre;
END$$
DELIMITER ;
/****************************************/
USE `estancias`;
DROP procedure IF EXISTS `eliminar_cuatrimestre`;
DELIMITER $$
USE `estancias`$$
CREATE PROCEDURE `eliminar_cuatrimestre` (IN id_cuat INT(11))
BEGIN
DELETE FROM cuatrimestre 
WHERE Id_cuatrimestre = id_cuat;
END$$
DELIMITER ;
/****************************************/
USE `estancias`;
DROP procedure IF EXISTS `insertar_cuatrimestre`;
DELIMITER $$
USE `estancias`$$
CREATE PROCEDURE `insertar_cuatrimestre` (IN id_cuat INT(11),IN descrp VARCHAR(20))
BEGIN
INSERT INTO cuatrimestre(Id_cuatrimestre,Descripcion) VALUES(id_cuat,descrp);
END$$
DELIMITER ;
/****************************************/
USE `estancias`;
DROP procedure IF EXISTS `insertar_cuatrimestre`;
DELIMITER $$
USE `estancias`$$
CREATE PROCEDURE `insertar_cuatrimestre` (IN id_cuat INT(11),IN descrp VARCHAR(20))
BEGIN
INSERT INTO cuatrimestre(Id_cuatrimestre,Descripcion) VALUES(id_cuat,descrp);
END$$
DELIMITER ;
/****************************************/
USE `estancias`;
DROP procedure IF EXISTS `actualizar_ase`;
DELIMITER $$
USE `estancias`$$
CREATE PROCEDURE `actualizar_ase` (IN id_ase INT(11),IN nomb VARCHAR(30), IN ap_pat_as VARCHAR(30), IN ap_mat_as VARCHAR(30))
BEGIN
UPDATE asesor_academico
SET 
Id_asesor = id_ase,
Nombre_asesor = nomb,
Ap_paterno_asesor = ap_pat_as,
Ap_materno_asesor = ap_mat_as
WHERE Id_asesor = id_ase;
END$$
DELIMITER ;
/***********************/
USE `estancias`;
DROP PROCEDURE IF EXISTS `consultar_asesor`;
DELIMITER $$
USE `estancias`$$
CREATE PROCEDURE `consultar_asesor`()
BEGIN 
SELECT * FROM asesor_academico;
END$$
DELIMITER ;
CALL consultar_asesor();
/***********************/
USE `estancias`;
DROP PROCEDURE IF EXISTS `eliminar_asesor`;
DELIMITER $$
USE `estancias`$$
CREATE PROCEDURE `eliminar_asesor`(IN id_ase INT(11))
BEGIN 
DELETE FROM asesor_academico
WHERE Id_asesor=id_ase;
END$$
DELIMITER ;
CALL eliminar_asesor(1);
/***********************/
USE `estancias`;
DROP PROCEDURE IF EXISTS `insertar_asesor`;
DELIMITER $$
USE `estancias`$$
CREATE PROCEDURE `insertar_asesor`(IN id_ase INT(11),IN nomb VARCHAR(30), IN ap_pat_as VARCHAR(30), IN ap_mat_as VARCHAR(30))
BEGIN 
INSERT INTO asesor_academico(Id_asesor,Nombre_asesor,Ap_paterno_asesor,Ap_materno_asesor) VALUES(id_ase,nomb,ap_pat_as,ap_mat_as);
END$$
DELIMITER $$;
CALL insertar_asesor(1,"cain","velazque","pardo");
/***********asesor y programa educativo************/
USE `estancias`;
DROP PROCEDURE IF EXISTS `actualizar_asesor_pe`;
DELIMITER $$
USE `estancias`$$
CREATE PROCEDURE `actualizar_asesor_pe`(IN id_ase_pe INT(11),IN id_prog_fk INT(11), IN id_ase_fk INT(11))
BEGIN 
UPDATE asesor_programaeducativo
SET
id_asesorpe = id_ase_pe,
id_programaed_FK = id_prog_fk,
id_asesoracad_FK = id_ase_fk
WHERE id_asesorpe = id_ase_pe;
END$$

DELIMITER $$;
USE `estancias`;
DROP PROCEDURE IF EXISTS `eliminar_asesor_pe`;
DELIMITER $$
USE `estancias`$$
CREATE PROCEDURE `eliminar_asesor_pe`(IN id_ase_pe INT(11))
BEGIN 
DELETE FROM asesor_programaeducativo
WHERE id_asesorpe = id_ase_pe;
END$$
DELIMITER $$;

DELIMITER $$;
USE `estancias`;
DROP PROCEDURE IF EXISTS `consultar_asesor_pe`;
DELIMITER $$
USE `estancias`$$
CREATE PROCEDURE `consultar_asesor_pe`(IN id_ase_pe INT(11))
BEGIN 
SELECT * FROM asesor_programaeducativo;
END$$
DELIMITER $$;

USE `estancias`;
DROP PROCEDURE IF EXISTS `insertar_asesor_pe`;
DELIMITER $$
USE `estancias`$$
CREATE PROCEDURE `insertar_asesor_pe`(IN id_ase_pe INT(11),IN id_prog_fk INT(11), IN id_ase_fk INT(11))
BEGIN 
INSERT INTO asesor_programaeducativo(id_asesorpe,id_programaed_FK,id_asesoracad_FK) VALUES(id_ase_pe,id_prog_fk,id_ase_fk);
END$$
/******************directores************************/
USE `estancias`;
DROP PROCEDURE IF EXISTS `actualizar_director`;
DELIMITER $$
USE `estancias`$$
CREATE PROCEDURE `actualizar_director`(IN id_dic INT(11),
IN nomb VARCHAR(30),
IN ap_pat VARCHAR(30),
IN ap_mat VARCHAR(30),
IN id_prog_fk INT(11))
BEGIN 
UPDATE directores
SET
id_director = id_dic,
Nombre_director = nomb,
Ap_paterno_director = ap_pat,
Ap_materno_director = ap_mat,
id_programa_educativo_fk = id_prog_fk
WHERE id_director = id_dic;
END$$
DELIMITER $$;


USE `estancias`;
DROP PROCEDURE IF EXISTS `consultar_director`;
DELIMITER $$
USE `estancias`$$
CREATE PROCEDURE `consultar_director`()
BEGIN 
SELECT * FROM directores;
END$$
DELIMITER $$;

USE `estancias`;
DROP PROCEDURE IF EXISTS `eliminar_director`;
DELIMITER $$
USE `estancias`$$
CREATE PROCEDURE `eliminar_director`(IN id_dir INT(11))
BEGIN 
DELETE FROM directores
WHERE id_director = id_dir;
END $$
DELIMITER $$;

USE `estancias`;
DROP PROCEDURE IF EXISTS `insertar_director`;
DELIMITER $$
USE `estancias`$$
CREATE PROCEDURE `insertar_director`(IN id_dir INT(11),
IN nom VARCHAR(30),
IN ap_pat VARCHAR(30),
IN ap_mat VARCHAR(30),
IN prog_fk INT(11))
BEGIN 
INSERT INTO directores(id_director,Nombre_director,Ap_paterno_director,
Ap_materno_director,id_programa_educativo_fk) VALUES(id_dir,nom,ap_pat,
ap_mat,prog_fk);
END $$
DELIMITER $$;

/*********************************/
DROP PROCEDURE IF EXISTS actualizar_documento;
CREATE PROCEDURE actualizar_documento(IN id_doc INT(11),IN descrip VARCHAR(20))
BEGIN
UPDATE tipo_documento
SET
id_documento = id_doc,
Descripcion_documento = descrip
WHERE id_documento = id_doc;
END

DROP PROCEDURE IF EXISTS consultar_documento;
CREATE PROCEDURE consultar_documento()
BEGIN 
SELECT * FROM tipo_documento;
END

CALL consultar_documento();

DROP PROCEDURE IF EXISTS eliminar_documento;
CREATE PROCEDURE eliminar_documento(IN id_doc INT(11))
BEGIN
DELETE FROM tipo_documento WHERE id_documento = id_doc;
END

DROP PROCEDURE IF EXISTS insertar_documento;
CREATE PROCEDURE insertar_documento(IN id_doc INT(11),IN descrp VARCHAR(20))
BEGIN
INSERT INTO tipo_documento(id_documento,Descripcion_documento) VALUES(id_doc,descrp);
END
/***********EXPEDIENTE*******/
DROP PROCEDURE IF EXISTS actualizar_expediente;
CREATE Procedure actualizar_expediente(IN id_exp INT(11),IN mat INT(11),IN id_doc_fk INT(11))
BEGIN
update expediente
set
Id_expediente = id_exp,
Matricula_alumno_fk = mat,
id_documento_fk = id_doc_fk
WHERE id_documento_fk = id_doc_fk;
END

drop procedure if exists consultar_expediente;
create Procedure consultar_expediente()
begin 
select * from expediente;
end

drop procedure if exists eliminar_expediente;
create procedure eliminar_expediente(IN id_exp INT(11))
begin
delete from expediente where Id_expediente = id_exp;
end

drop procedure if exists insertar_expediente;
create procedure insertar_expediemte(IN id_exp int(11),in mat int(11),in id_doc_fk int(11))
BEGIN
insert into expediente(Id_expediente,Matricula_alumno_fk,id_documento_fk) values(id_exp,mat,id_doc_fk);
end

drop procedure if exists actualizar_empresa;
create procedure actualizar_empresa(IN id_emp INT(11),IN nomb_emp VARCHAR(50),IN dom_emp VARCHAR(150),
IN tel_emp double,IN correo_emp VARCHAR(50))
begin
UPDATE empresa
set 
id_empresa = id_emp,
Nombre_empresa = nom_emp,
Domicilio_empresa = dom_emp,
Telefono_empresa = tel_emp,
Correo_electronico = correo_emp
WHERE id_empresa = id_emp;
END;

create procedure consultar_empresa()
begin
select * from empresa;
end;

create procedure eliminar_empresa(in id_emp int(11))
begin 
delete from empresa where id_empresa = id_emp;
end;

create procedure insertar_empresa(in id_emp int(11),in nom_emp varchar(50),in dom_emp varchar(150),
in tel_emp double,in correo_emp varchar(50))
begin 
insert into empresa(id_empresa,Nombre_empresa,Domicilio_empresa,Telefono_empresa,Correo_electronico) 
values(id_emp,nom_emp,dom_emp,tel_emp,correo_emp);
end;

call insertar_empresa(1,"EMPRESA","Domicilio",7721234456,"Empresa@correo.com");
call consultar_empresa();
call eliminar_empresa(1);

CREATE PROCEDURE actualizar_modalidad(IN id_mod int(11),in descr_moda varchar(30))
BEGIN
UPDATE modalidad
SET
id_modalidad = id_mod,
Descripcion_modalidad = descr_moda
WHERE id_modalidad = id_mod;
END;

create procedure consultar_modalidad()
begin
select * from modalidad;
end;

create procedure eliminar_modalidad(in id_mod int(11))
begin
delete from modalidad where id_modalidad = id_mod;
end;

create procedure insertar_modalidad(in id_mod int(11),in descr_moda varchar(30))
begin
insert into modalidad(id_modalidad,Descripcion_modalidad) values(id_mod,descr_moda);
end;

drop Procedure if EXISTS actualizar_solicitud;
CREATE PROCEDURE actualizar_solicitud(IN id_sol int(11),in nom varchar(40),
in pat varchar(40),in mat varchar(40),in dom varchar(150),in sex varchar(8),
in ims varchar(12),in curp_al varchar(14),in mat_fk int(11),in correo varchar(30),
in id_tel double,in fecha date,in prog_ed varchar(50),in cuat varchar(10),
in grup varchar(10),in moda varchar(15),in nom_as varchar(40),in pa_as varchar(40),
in mat_as varchar(40), in nom_pro varchar(60))
BEGIN
UPDATE solicitud_estancia
SET
id_solicitud = id_sol,
Nombre_alumno_sol = nom,
Ap_paterno_alumno_sol = pat,
Ap_materno_alumno_sol = mat,
Domicilio_alumno = dom,
Sexo_alumno = sex,
IMSS = ims,
CURP = curp_al,
Matricula_fk = mat_fk,
correo_electronico_fk = correo,
id_telefono_al_fk = id_tel,
Fecha_elaboracion = fecha,
Programa_educativo = prog_ed,
Cuatrimestre = cuat,
Grupo = grup,
Modalidad = moda,
Nombre_asesor = nom_as,
Ap_paterno_asesor = pa_as,
Ap_materno_asesor = mat_as,
Nombre_proyecto = nom_pro
WHERE id_solicitud = id_sol;
END;

create procedure consultar_solicitud()
begin
select * from solicitud_estancia;
end;

create procedure eliminar_solicitud(IN id_sol int(11))
begin
delete from solicitud_estancia where id_solicitud = id_sol;
end;

create procedure insertar_solicitud(IN id_sol int(11),in nom varchar(40),
in pat varchar(40),in mat varchar(40),in dom varchar(150),in sex varchar(8),
in ims varchar(12),in curp_al varchar(14),in mat_fk int(11),in correo varchar(30),
in id_tel double,in fecha date,in prog_ed varchar(50),in cuat varchar(10),
in grup varchar(10),in moda varchar(15),in nom_as varchar(40),in pa_as varchar(40),
in mat_as varchar(40), in nom_pro varchar(60))
begin
insert into solicitud_estancia(id_solicitud,Nombre_alumno_sol,Ap_materno_alumno_sol,Ap_materno_alumno_sol,
Domicilio_alumno,Sexo_alumno,IMSS,CURP,Matricula_fk,correo_electronico_fk,id_telefono_al_fk,
Fecha_elaboracion,Programa_educativo,Cuatrimestre,Grupo,Modalidad,Nombre_asesor,Ap_paterno_asesor,
Ap_materno_asesor,Nombre_proyecto) values(id_sol,nom,pat,mat,dom,sex,ims,curp_al,mat_fk,correo,id_tel,
fecha,prog_ed,cuat,grup,moda,nom_as,pa_as,mat_as,nom_pro);
end;

create procedure actualizar_tel_alum(in id_tel int(11),in tel_casa double,
in tel_cel double,in mat_fk int(11))
begin
update telefono_alumno
SET
id_telefono_alumno = id_tel,
Telefono_casa_al = tel_casa,
Telefono_celular_al = tel_cel,
Matricula_fk = mat_fk
where id_telefono_alumno = id_tel;
end;

create procedure consultar_telefono()
begin
SELECT * FROM telefono_alumno;
end;

create procedure eliminar_telefono(IN id_tel int(11))
begin
delete from telefono_alumno where id_telefono_alumno=id_tel;
end;

create procedure insertar_telefono(IN id_tel int(11),in tel_casa double, in tel_cel double,
in mat_fk int(11))
begin
insert into telefono_alumno(id_telefono_alumno,Telefono_casa_al,Telefono_celular_al,Matricula_fk)
values(id_tel,tel_casa,tel_cel,mat_fk);
end;

DROP Table IF Exists solicitud_estancia;
CREATE TABLE solicitud_estancia(
    id_solicitud INT(11) NOT NULL,
    matricula_FK INT(11) NOT NULL,
    id_telefono_FK INT(11) NOT NULL,
    fecha date NOT NULL,
    id_modalidad_fk INT(11) NOT NULL,
    id_asesor_FK INT(11) NOT NULL,
    nombre_proyecto VARCHAR(60),
    PRIMARY KEY(id_solicitud),
    FOREIGN KEY(matricula_FK) REFERENCES alumno(Matricula)
    ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY(id_telefono_FK) REFERENCES telefono_alumno(id_telefono_alumno)
    ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY(id_modalidad_FK) REFERENCES modalidad(id_modalidad)
    ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY(id_asesor_FK) REFERENCES asesor_academico(Id_asesor)
    ON DELETE CASCADE ON UPDATE CASCADE
    );

    CREATE TABLE alumno_modalidad(
        id INT(11) NOT NULL,
        matricula_fk INT(11) NOT NULL,
        modalidad_fk INT(11) NOT NULL,
        PRIMARY KEY(id),
        FOREIGN KEY(matricula_fk) REFERENCES alumno(Matricula)
        ON DELETE CASCADE ON UPDATE CASCADE,
        FOREIGN KEY(modalidad_fk) REFERENCES modalidad(id_modalidad)
        ON DELETE CASCADE ON UPDATE CASCADE
    );

    CREATE TABLE alumno_asesor(
        id_alumno_asesor INT(11) NOT NULL,
        matricula_fk INT(11) NOT NULL,
        id_asesor_fk INT(11) NOT NULL,
        PRIMARY KEY(id_alumno_asesor),
        FOREIGN KEY(matricula_fk) REFERENCES alumno(Matricula)
        ON DELETE CASCADE ON UPDATE CASCADE,
        FOREIGN KEY(id_asesor_fk) REFERENCES asesor_academico(Id_asesor)
        ON DELETE CASCADE ON UPDATE CASCADE
    );


DROP view if exists vista_solicitud;
CREATE VIEW vista_solicitud as
SELECT Nombre_alumno, Telefono_celular_al
FROM alumno a JOIN telefono_alumno tel_al ON a.Matricula = tel_al.Matricula_fk
WHERE a.Matricula = tel_al.Matricula_fk;

