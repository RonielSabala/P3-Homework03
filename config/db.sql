DROP DATABASE IF EXISTS tarea_db;
CREATE DATABASE tarea_db;
USE tarea_db;

-- Usuarios
drop table if exists usuarios;
create table usuarios (
    id int auto_increment primary key,
    username varchar(50) not null unique,
    user_password varchar(255) not null
);

-- Artículos
drop table if exists articulos;
create table articulos (
    id int auto_increment primary key,
    nombre varchar(150) not null,
    descripcion text,
    precio_unitario decimal(10,2) not null
);

-- Facturas
drop table if exists facturas;
create table facturas (
    id int auto_increment primary key,
    fecha_emision datetime default current_timestamp,
    nombre_cliente varchar(50) not null,
    total decimal(12,2) not null,
    comentario text
);

-- Detalles
drop table if exists detalle_factura;
create table detalle_factura (
    factura_id int not null,
    articulo_id int not null,
    cantidad int not null,
    precio_unitario decimal(10,2) not null,
    total decimal(12,2) as (cantidad * precio_unitario) stored,
    primary key (factura_id, articulo_id),
    foreign key (factura_id) references facturas(id) on delete cascade,
    foreign key (articulo_id) references articulos(id) on delete cascade
);

-- Inserción de datos iniciales

insert into articulos (nombre, descripcion, precio_unitario)
values
  ('Lapicero',   '', 5.00),
  ('Cuaderno',   '', 200.00),
  ('Borrador',   '', 5.00),
  ('Regla',      '', 120.00),
  ('Calculadora','', 150.00),
  ('Marcador',   '', 30.00),
  ('Mochila',    '', 540.00);