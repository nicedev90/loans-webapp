CREATE DATABASE IF NOT EXISTS loans CHARACTER SET utf8 COLLATE utf8_general_ci;  

use loans;

CREATE TABLE IF NOT EXISTS profiles (
	id INT NOT NULL AUTO_INCREMENT,
	user_id INT NOT NULL,
	estado_civil VARCHAR(15) NOT NULL,
	direccion VARCHAR(100) NOT NULL,
	referencia_dir VARCHAR(100) NOT NULL,
	ciudad VARCHAR(50) NOT NULL,
	provincia VARCHAR(50) NOT NULL,
	PRIMARY KEY (id)
)ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS contactos (
	id INT NOT NULL AUTO_INCREMENT,
	user_id INT NOT NULL,
	nombres VARCHAR(100) NOT NULL,
	apellidos VARCHAR(100) NOT NULL,
	telefono VARCHAR(20) NOT NULL,
	direccion VARCHAR(100) NOT NULL,
	referencia_dir VARCHAR(100) NOT NULL,
	ciudad VARCHAR(50) NOT NULL,
	provincia VARCHAR(50) NOT NULL,
	PRIMARY KEY (id)
)ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS trabajos (
	id INT NOT NULL AUTO_INCREMENT,
	user_id INT NOT NULL,
	empresa VARCHAR(100) NOT NULL,
	ocupacion VARCHAR(40) NOT NULL,
	sueldo VARCHAR(20) NOT NULL,
	telefono VARCHAR(20) NOT NULL,
	direccion VARCHAR(100) NOT NULL,
	referencia_dir VARCHAR(100) NOT NULL,
	ciudad VARCHAR(50) NOT NULL,
	provincia VARCHAR(50) NOT NULL,
	PRIMARY KEY (id)
)ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS role (
	id INT NOT NULL AUTO_INCREMENT,
	role VARCHAR(15) NOT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (id)
)ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS users (
	id INT NOT NULL AUTO_INCREMENT,
	estado ENUM("Activo","Inactivo") NOT NULL,
	role_id INT NOT NULL,
	profile_id INT,
	contacto_id INT,
	trabajo_id INT,
	nombres VARCHAR(100) NOT NULL,
	apellidos VARCHAR(100) NOT NULL,
	telefono VARCHAR(20) NOT NULL,
	fecha_nac DATETIME NOT NULL,
	dni VARCHAR(20) NOT NULL,
	email VARCHAR(50) NOT NULL,
	password VARCHAR(150) NOT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	PRIMARY KEY (id),
	CONSTRAINT fk_profile_id
	FOREIGN KEY (profile_id)
	REFERENCES profiles (id),
	CONSTRAINT fk_role_id
	FOREIGN KEY (role_id)
	REFERENCES role (id),
	CONSTRAINT fk_contacto_id
	FOREIGN KEY (contacto_id)
	REFERENCES contactos (id),
	CONSTRAINT fk_trabajo_id
	FOREIGN KEY (trabajo_id)
	REFERENCES trabajos (id)
)ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS log_history (
	id INT NOT NULL AUTO_INCREMENT,
	email VARCHAR(50) NOT NULL,
	password VARCHAR(150) NOT NULL,
	status varchar(15) NOT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (id)
)ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS user_token (
	id INT NOT NULL AUTO_INCREMENT,
	email VARCHAR(50) NOT NULL,
	token VARCHAR(150) NOT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (id)
)ENGINE=INNODB;


INSERT INTO role (role) VALUES ('Administrador');
INSERT INTO role (role) VALUES ('Cliente');
INSERT INTO users(estado, role_id, nombres, email, password) VALUES('Activo', 1, 'Cesar', 'admin@g.com', '12');
INSERT INTO users (estado, role_id, nombres, email, password) VALUES ('Activo', 2, 'Marta', 'marga@g.com', '12');