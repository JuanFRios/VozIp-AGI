USE biblioteca;
CREATE TABLE libros (
	libro INT NOT NULL AUTO_INCREMENT, 
	nombre CHAR(100), 
	autor  CHAR(50), 
	tema CHAR(15), 
	comentario CHAR(100), 
	KEY (libro) 
); 

INSERT INTO libros VALUES (1, 'La Cenicienta', 'Charles Perrault', 'Cuentos Infantiles', 'Es un cuento muy interesante' ); 

INSERT INTO libros VALUES (2, ' Cuentos de siempre', 'Saturnino Callejas',  'Cuentos Infantiles','Es una coleccion con Cuentos excelentes' ); 

INSERT INTO libros VALUES (3, 'La Bella Durmiente', 'Grimm Hermanos',  'Cuentos Infantiles', 'Es un buen cuento' ); 

INSERT INTO libros VALUES (4, 'Caperucita Roja', 'Grimm Hermanos',  'Cuento Infantil', 'Historia de una chica y un lobo que....' ); 

INSERT INTO libros VALUES (5, '20 de julio', 'Rosa Elena Angel',  'Historia', 'Historia de Colombia'); 

