INSERT INTO CENTRO (id, descripcion, direccion, telefono)
values(default,"Lavanderia Pacholi Casa Matriz", "San Lorenzo", "021585120");

INSERT INTO CENTRO (id, descripcion, direccion, telefono)
values(default,"Lavanderia Pacholi Suc 2", "Asunción", "021585120");

UPDATE CENTRO SET descripcion = "Lavanderia Pacholi Sucursal 2"
WHERE id= 2;

INSERT INTO CENTRO
values(default, "Prueba", "Asu", "0");

DELETE FROM CENTRO WHERE descripcion = "Prueba";

-- IMPORTANTISIMO
SELECT * FROM CENTRO;
SELECT descripcion FROM CENTRO;
SELECT descripcion FROM CENTRO WHERE direccion like "Asunción";

--USUAROS
INSERT INTO USUARIO VALUES("123","MAGNUS CARLSEN", "0991563456", 1);
INSERT INTO USUARIO VALUES("456","HIKARU NAKAMURA", "616161", 1);
INSERT INTO USUARIO VALUES("789","ERIC HANSEN", "545454", 2);

--CLIENTES
INSERT INTO CLIENTE VALUES ("369", "Ibai Llanos", "09652148", "España casi Mcal Lopez","123");
