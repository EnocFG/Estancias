DROP VIEW IF EXISTS VISTA_SOLICITUD;

CREATE VIEW  VISTA_SOLICITUD AS
SELECT Nombre_alumno, Telefono_celular_al,
id_asesor_fk, modalidad_fk
FROM alumno AS alum 
INNER JOIN telefono_alumno AS tel_alum 
ON alum.Matricula = tel_alum.Matricula_fk
INNER JOIN alumno_asesor AS alum_ase 
ON alum.Matricula = alum_ase.matricula_fk
INNER JOIN alumno_modalidad AS al_mod
ON alum.Matricula = al_mod.matricula_fk;

SELECT * FROM VISTA_SOLICITUD;