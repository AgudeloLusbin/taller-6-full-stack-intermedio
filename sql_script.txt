-- drop database if exists mi_proyecto;
create database mi_proyecto;
use mi_proyecto;

create table usuarios(
	id int not null primary key auto_increment,
    nombre varchar(50) not null,
    apellido varchar(50) not null,
    cedula varchar(50) not null
);

insert into usuarios(nombre, apellido, cedula) values
("Andres", "Agudelo", "54321354"),
("Camilo", "Gutierrez", "874354354"),
("José", "Pardo", "68421324"),
("Nicolás", "Pérez", "4354321"),
("Laura", "Espítia", "9874631367321357432");