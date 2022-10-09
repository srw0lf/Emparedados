create database emparedados;

-- drop database emparedados;

use emparedados;

-- Tablas

create table Administrador (
  idAdministrador int(4)  primary key auto_increment,
  nombreAdministrador varchar(50) not null,
  apellidoAdministrador varchar(50) not null,
  telefonoAdministrador char(11) not null,
  nitEmpresa varchar(100) not null,
  idUsuario_FK int(4)
);

-- alter table Administrador add column idAdministrador int(4) primary key auto_increment;

-- describe Administrador;


create table Cliente(

idCliente int (4) primary key auto_increment,
nombreCliente varchar(50) not null,
apellidoCliente varchar(50) not null,
telefonoCliente char(11) not null, 
idUsuario_FK int 

);

create table TipoDoc(

idTipoDoc int (4) primary key auto_increment,
nombreTipoDoc varchar(30) 

);

create table Cajero(

idCajero int (4) primary key auto_increment,
nombreCajero varchar(50) not null,
apellidoCajero varchar(50) not null,
direccionCajero varchar(100) not null,
telefonoCajero char(11) not null,
idTipoDoc_FK int not null,
idUsuario_FK int,
numeroTipoDoc varchar(20) not null

);


create table usuario (
  idUsuario int(4) primary key auto_increment,
  nombreUsuario varchar(50) NOT NULL,
  correoUsuario varchar(50) unique,
  passworUsuario varchar(20) NOT NULL,
  rolUsuario varchar(20) NOT NULL,
  estadoUsuario varchar(10) NOT NULL
);

create table Categoria(

idCategoria int(4) primary key auto_increment,
nombreCategoria varchar(50) not null,
descripcion varchar(50) not null 
);

create table Producto(

idProducto int(10) primary key auto_increment,
nombreProducto varchar(50) not null,
cantidadProducto int not null,
fechaCaducidad date not null,
precioUnidad float not null,
descripcionProducto varchar(300),
estadoProducto boolean not null,
foto varchar(100),
idCategoria_FK int(4) not null

);

-- alter table Producto add column foto varchar(100);
-- alter table Producto modify descripcionProducto varchar(300);

create table Pedido(

idPedido int(4) primary key auto_increment,
fechaPedido date not null,
direccionPedido varchar(100) not null,
idCliente_FK int(4),
idCajero_FK  int(4)

);

create table Factura(

idFactura int(4) primary key auto_increment,
cantidad int,
total float not null,
idPedido_FK  int(4),
idProducto_FK int(4)

);

 -- alter table Factura modify column idFactura int(4) auto_increment;

-- drop table factura;

-- Relaciones 

alter table Cajero add constraint FK_TipoDocCajero foreign key (idTipoDoc_FK) references TipoDoc(idTipoDoc);

alter table Cajero add constraint FK_UsuarioCajero foreign key (idUsuario_FK) references Usuario(idUsuario);

alter table Cliente add constraint FK_UsuarioCliente foreign key (idUsuario_FK) references Usuario(idUsuario);

alter table Administrador add constraint FK_UsuarioAdministrador foreign key (idUsuario_FK) 
references Usuario(idUsuario);

alter table Producto add constraint FK_CategoriaProducto foreign key (idCategoria_FK) 
references Categoria(idCategoria);

alter table Pedido add constraint FK_PedidoCajero foreign key (idCajero_FK) references Cajero(idCajero);

alter table Pedido add constraint FK_PedidoCliente foreign key (idCliente_FK) references Cliente(idCliente);

alter table Factura add constraint FK_FacturaPedido foreign key (idPedido_FK) references Pedido(idPedido);

alter table Factura add constraint FK_FacturaProducto foreign key (idProducto_FK) references Producto(idProducto);

 -- alter table Factura drop constraint FK_FacturaPedido;

insert into categoria values ('1', 'Sandwiches', 'cualquier tipo de sandwiches');
insert into categoria values ('2', 'Sandwiches 2', 'cualquier tipo de sandwiches 2');

INSERT INTO  Pedido VALUES ('', '2022-09-24', 'Cr 102 #155-50', 1, 1);
INSERT INTO  Factura VALUES ('', 1, 1000, 2, 1);
INSERT INTO  Factura VALUES ('', 3, 1000, 2, 2);

delete from Pedido where idPedido=4;
delete from Factura;
delete from Pedido;

select *from  Producto as p join Factura as f on p.idProducto=f.idProducto_FK join Pedido as pe 
on pe.idPedido=f.idPedido_FK join Categoria as c on c.idCategoria=p.idCategoria_FK;

-- Funciones Escalares
delimiter //
create function VentasAnuales(fecha int(4)) returns float 
begin
	return (select CaltotalPedido(idPedido) from Pedido where year(fechaPedido)=fecha);
end;
//

select VentasAnuales('2022');

delimiter //
create function FrecuenciaProdcuto(id int(4)) returns float 
begin
	return (select count(idProducto_FK) from Factura where idProdcuto_FK=id);
end;
//

select FrecuenciaProducto(1)

-- vistas
 
 create view   PedidoDetalle as 
select p.idPedido as id, CaltotalPedido(p.idPedido) as totalCobrado, c.nombreCliente  as Cliente, 
cj.nombreCajero as NombreCajero, cj.apellidoCajero as ApellidoCajero, 
p.FechaPedido as Fecha, p.direccionPedido as Direccion from 
Factura as f  join Pedido as p on f.idPedido_FK=p. idPedido join Cliente as c on idCliente=idCliente_FK join 
Cajero as cj  on cj.idCajero=p.IdCajero_FK group by p.idPedido;

select *from PedidoDetalles;

create view DatelleFactura as 
select p.nombreProducto as Producto, c.nombreCategoria as Categoria, p.descripcionProdcucto as Descripcion,
f.cantidad as CantidadPedida, p.PrecioUnidad as Precio,  f.total as Subtotal from Producto as p
join Categoria as c on  p.idCategoria_FK=c.idCategoria join Factura as f on f.idProducto_FK=p.idProducto
group by idFactura;

select *from DetalleFactura;

drop view CalSubTotal;

create view conteoId as 
select idPedido as id from Pedido order by idPedido desc limit 1;

create view conteoId2 as 
select idFactura as id from Factura order by idFactura desc limit 1;

create view CalSub as 
select f.cantidad*p.precioUnidad as total from Factura as f join Producto as p on 
f.idProducto_FK=p.idProducto where idFactura=(select *from conteoId2);

select *from CalSubTotal;

UPDATE Factura as f join Producto as p on f.idProducto_FK=p.idProducto set 
    total=(f.cantidad*p.precioUnidad) WHERE idFactura=(SELECT * FROM conteoId2);

-- Procedimientos  almacenados
delimiter //
create procedure CaltotalPedido(id int)
begin
	select idPedido, fechaPedido, direccionPedido, sum(total) from Pedido as p join Factura as f on 
    idPedido=IdPedido_FK where idPedido=id;
end;
// 

call  CaltotalPedido(1);

delimiter //
create procedure CalSubtotal(id int)
begin
	update Factura as f join Producto as p on f.idProducto_FK=p.idProducto set 
    total=(f.cantidad*p.precioUnidad) where idFactura=id;
end;
//

INSERT INTO  Factura (idPedido_FK, idProducto_FK, cantidad, total) VALUES 
((SELECT * FROM conteoId), 1,  2);

call CalSubtotal(1);

delimiter //
create procedure ProductoCat(id int)
begin
	select * from Producto as p join Categoria as c on p.idCategoria_FK=c.idCategoria where idCategoria=id;
end;
//

call  ProductoCat(1);

-- Tigers
delimiter //
create trigger ActualizarTotal
before insert on Factura
for each row
begin
	update Factura as f join Producto as p on f.idProducto_FK=p.idProducto set 
    total=(f.cantidad*p.precioUnidad);
end;
//

select * from Factura;

drop trigger ActualizarTotal;

delimiter //
create trigger StockProducto
after insert on Factura
for each row
begin
	update Producto set 
    cantidadProducto=cantidadProducto- new.cantidad where idProducto=new.idProducto_FK;
end;
//

select * from Producto;

-- CREATE TRIGGER stock
-- AFTER INSERT ON Factura
-- FOR EACH ROW
-- BEGIN
-- UPDATE Producto
-- SET cantidadProducto = cantidadProducto - new.cantidad
-- WHERE idProducto = new.idProducto_FK; 
-- END;

select * from Producto;
select * from Pedido;
select * from Factura;

SELECT * FROM usuario AS us JOIN Administrador AS ad ON us.idUsuario=ad.idUsuario_FK 
WHERE idUsuario=24;

SELECT * FROM usuario AS us JOIN Cajero AS cj ON us.idUsuario=cj.idUsuario_FK 
WHERE idUsuario=23;


SELECT * FROM usuario AS us JOIN Cliente AS cl ON us.idUsuario=cl.idUsuario_FK 
WHERE idUsuario=23;

describe administrador;

insert into administrador values ('', 'Sebastian', 'Pores',  '3012281013', '123456', 24);

select *from administrador;

insert into cajero (idUsuario_FK) values(24);
update Cajero set idUsuario_FK=23 where idCajero=1;
update Cliente set idUsuario_FK=26 where idCliente=1;

delete from administrador where idAdministrador=1;


show tables;

select *from conteoId2;

SELECT * FROM usuario WHERE correoUsuario='cris@gmail.com	' 
AND passworUsuario='123456' AND rolUsuario='Administrador';

alter table Pedido AUTO_INCREMENT=0;
SET SQL_SAFE_UPDATES=0;



