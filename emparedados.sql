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

 alter table Factura modify column idFactura int(4) auto_increment;

-- drop table factura;

-- Relaciones 

alter table Cajero add constraint FK_TipoDocCajero foreign key (idTipoDoc_FK) references TipoDoc(idTipoDoc);

alter table Cajero add constraint FK_UsuarioCajero foreign key (idUsuario_FK) references Usuario(idUsuario);

alter table Cliente add constraint FK_UsuarioCliente foreign key (idUsuario_FK) references Usuario(idUsuario);

-- alter table Administrador add constraint FK_UsuarioAdministrador foreign key (idUsuario_FK) 
-- references Usuario(idUsuario);

alter table Producto add constraint FK_CategoriaProducto foreign key (idCategoria_FK) 
references Categoria(idCategoria);

alter table Pedido add constraint FK_PedidoCajero foreign key (idCajero_FK) references Cajero(idCajero);

alter table Pedido add constraint FK_PedidoCliente foreign key (idCliente_FK) references Cliente(idCliente);

alter table Factura add constraint FK_FacturaPedido foreign key (idPedido_FK) references Pedido(idPedido);

alter table Factura add constraint FK_FacturaProducto foreign key (idProducto_FK) references Producto(idProducto);



insert into categoria values ('1', 'Sandwiches', 'cualquier tipo de sandwiches');
insert into categoria values ('2', 'Sandwiches 2', 'cualquier tipo de sandwiches 2');

delete from Pedido where idPedido=4;
delete from Factura where idPedido_FK=4 and idProducto_FK=3;

select *from  Producto as p join Factura as f on p.idProducto=f.idProducto_FK join Pedido as pe 
on pe.idPedido=f.idPedido_FK join Categoria as c on c.idCategoria=p.idCategoria_FK;

delimiter //
create procedure CalSubtotal(id int)
begin
	update Factura set total=(select  f.cantidad*p.precioUnidad as total from Producto as 
    p join Factura as f on p.idProducto=f.idProducto_FK where idFactura=id) where idFactura=id;
end;
//

-- CREATE TRIGGER stock
-- AFTER INSERT ON Factura
-- FOR EACH ROW
-- BEGIN
-- UPDATE Producto
-- SET cantidadProducto = cantidadProducto - new.cantidad
-- WHERE idProducto = new.idProducto_FK; 
-- END;

select * from Factura;

alter table TipoDoc AUTO_INCREMENT=0;
SET SQL_SAFE_UPDATES=0;



