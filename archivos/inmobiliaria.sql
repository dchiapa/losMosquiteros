create database inmobiliaria;
use inmobiliaria;
CREATE TABLE `estado` (
	`idEstado` int (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `valorEstado` varchar(30) NOT NULL UNIQUE
);
INSERT INTO `estado` (`idEstado`, `valorEstado`) values
(1,'venta'),
(2,'alquiler');



CREATE TABLE `tipo`(
		`idTipo` int (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `valorTipo` varchar(30) NOT NULL UNIQUE
        );

INSERT INTO `tipo` (`idTipo`, `valorTipo`) values
(1,'casa'),
(2,'departamento'),
(3,'ph'),
(4,'duplex'),
(5,'terreno'),
(6,'local');



CREATE TABLE `barrio`(
		`idBarrio` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `valorBarrio` varchar(30) NOT NULL UNIQUE
        );
        
INSERT INTO `barrio` (`idBarrio`, `valorBarrio`) values
(1,'Tigre'),
(2,'San Fernando'),
(3,'Victoria'),
(4,'Virreyes'),
(5,'Bulogne'),
(6,'San Isidro'),
(7,'Don Torcuato'),
(8,'El Talar'),
(9,'Los Troncos del Talar'),
(10,'Ricardo Rojas'),
(11,'Rincón de Milberg'),
(12,'General Pacheco');

CREATE TABLE `propiedades`(
		`idPropiedad` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `idEstado` int (10) NOT NULL,
        `idTipo` int (10) NOT NULL,
        `idBarrio` int (10) NOT NULL,
        `ambientes` int (2) NOT NULL,
        `proTitulo` varchar(150) NOT NULL,
         `proDireccion` varchar(60) NOT NULL,
         `proPrecio` int (11) NOT NULL,
          `proDescripcion` text,
        `proDormitorios` int (2),
        `proBaños` int (2) NOT NULL,
         `proSupTotal` int (5) NOT NULL,
        `proSupCubierta` int (5),
        `proSupSemi` int (5),
        `proAntiguedad` int (3),
		`proCocheras` int (2),
        `proPileta` tinyint(1) DEFAULT '0',
         `proQuincho` tinyint(1) DEFAULT '0',
         `proParrilla` tinyint(1) DEFAULT '0',
         `proJardin` tinyint(1) DEFAULT '0',
         `proLuzEle` tinyint(1) DEFAULT '0',
         `proAguaCorriente` tinyint(1) DEFAULT '0',
         `proAguaPozo` tinyint(1) DEFAULT '0',
         `proGasNatural` tinyint(1) DEFAULT '0',
         `proGasEmbasado` tinyint(1) DEFAULT '0',
         `proCloacas` tinyint(1) DEFAULT '0',
         `idImagenPrincipal` int (20)
         );
         
         
INSERT INTO `propiedades` (`idPropiedad`,`idEstado`,`idTipo`,`idBarrio`,`ambientes`,`proTitulo`,`proDireccion`,`proPrecio`,`proDescripcion`,`proDormitorios`,`proBaños`,`proSupTotal`,`proSupCubierta`,`proSupSemi`,`proAntiguedad`,`proCocheras`,`proPileta`,`proQuincho`,`proParrilla`,`proJardin`,`proLuzEle`,`proAguaCorriente`,`proAguaPozo`,`proGasNatural`,`proGasEmbasado`,`proCloacas`) VALUES
																									 
(1, '1','1','1',3,'Casa en Venta en Tigre','Alberti N° 1156', 150000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',2,1,300,200,100,10,1,1,0,1,1,1,1,0,1,0,1), 
(2, '1','1','1',2,'Casa en Venta en Tigre','Guido N° 569', 90000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',1,1,150,0,0,20,2,1,1,1,1,1,1,0,1,0,1),
(3, '1','1','1',4,'Casa en Venta en Tigre','Aguado N° 6700', 250000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',3,2,420,320,100,30,2,1,1,1,1,1,1,0,0,0,1),
(4, '1','1','2',3,'Casa en Venta en San Fernando','Belgrano N° 390', 160000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',2,2,350,0,0,15,1,1,0,1,1,1,1,0,1,0,1), 
(5, '1','1','2',2,'Casa en Venta en San Fernando','Gral. Lavalle N° 2300', 97000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',1,1,110,0,0,25,2,1,1,1,1,1,1,0,1,0,1),
(6, '1','1','3',3,'Casa en Venta en Victoria','Guido Espano N° 3300', 105000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',2,1,95,0,0,35,2,1,1,1,1,1,1,0,0,0,1),
(7, '1','1','4',4,'Casa en Venta en Virreyes','Suipacha N° 280', 170000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',3,1,410,320,90,26,2,1,1,1,1,1,1,0,1,0,1),
(8, '1','1','6',2,'Casa en Venta en San Isidro','Jacinto Diaz N° 926', 87000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',1,1,105,0,0,18,1,1,0,1,1,1,1,0,1,0,1), 
(9, '1',2,'1',3,'Departamento en Venta en Tigre','Av. Cazon N° 800', 155000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',2,1,97,0,0,0,0,0,0,0,0,1,1,0,1,0,1),
(10, '1',2,'1',2,'Departamento en Venta en Tigre','Zuviria N° 380', 125000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',1,1,60,0,0,0,0,0,0,0,0,1,1,0,1,0,1),
(11, '1',2,'1',4,'Departamento en Venta en Tigre','Av. Italia N° 899', 220000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',3,2,410,310,100,10,1,1,0,0,0,1,1,0,1,0,1),
(12, '1',2,'2',3,'Departamento en Venta en San Fernando','Sobremonte N° 1528',163000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',2,2,98,0,0,10,1,1,0,0,0,1,1,0,1,0,1),
(13, '1',2,'2',2,'Departamento en Venta en San Fernando','Sarmiento N° 1803', 102000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',1,1,89,0,0,10,1,1,0,0,0,1,1,0,1,0,1),
(14, '1',2,'3',3,'Departamento en Venta en Victoria','Ing. White N° 1153', 107000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',2,1,115,0,0,15,1,1,1,0,0,1,1,0,0,0,1),
(15, '1',2,'4',4,'Departamento en Venta en Virreyes','Av. Avellaneda N° 3056', 195000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',3,1,130,0,0,20,1,1,1,0,0,1,1,0,0,0,1),
(16, '1',2,'6',2,'Departamento en Venta en San Isidro','Diego Palma N° 1411', 116000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',1,1,106,0,0,20,1,1,1,1,1,1,1,0,0,0,1),
(17, 2,1,1,2,'Casa en Alquiler en Tigre','Primera Junta N° 276',14000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',1,1,55,0,0,10,1,1,0,1,1,1,1,0,1,0,1),
(18, 2,1,1,2,'Casa en Alquiler en Tigre','Peron N° 4400',18500,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',1,1,136,75,0,20,2,1,1,1,1,1,1,0,1,0,1),
(19, 2,1,1,2,'Casa en Alquiler en Tigre','Buschiazo N° 1700',25000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',1,1,110,80,0,30,2,1,1,1,1,1,1,0,0,0,1),
(20, 2,1,1,3,'Casa en Alquiler en Tigre','Solis N° 100',28000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',2,1,120,90,0,15,1,1,0,1,1,1,1,0,1,0,1),
(21, 2,1,1,3,'Casa en Alquiler en Tigre','Reinoso N° 2417',32000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',2,2,165,100,0,25,2,1,1,1,1,1,1,0,1,0,1),
(22, 2,1,1,3,'Casa en Alquiler en Tigre','italia N° 1600',35000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',2,2,180,110,0,35,2,1,1,1,1,1,1,0,0,0,1),
(23, 2,2,1,1,'Departamento en Alquiler en Tigre','Montevideo N° 1300',15000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',0,1,44,0,0,0,0,0,0,0,0,1,1,0,1,0,1),
(24, 2,2,1,1,'Departamento en Alquiler en Tigre','Lavalle N° 50',18000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',0,1,65,55,5,0,0,0,0,0,0,1,1,0,1,0,1),
(25, 2,2,1,1,'Departamento en Alquiler en Tigre','Luis Garcia N° 1730',19000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',0,1,70,0,0 ,10,1,1,0,0,0,1,1,0,1,0,1),
(26, 2,2,1,2,'Departamento en Alquiler en Tigre','Montes de oca N° 339',23000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',1,1,80,75,5,10,1,1,0,0,0,1,1,0,1,0,1),
(28, 2,2,1,2,'Departamento en Alquiler en Tigre','España N° 1100',24000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',1,1,85,0,0 ,15,1,1,1,0,0,1,1,0,0,0,1),
(29, 2,2,1,3,'Departamento en Alquiler en Tigre','Boyero N° 1600',28000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',2,1,90,0,0,20,1,1,1,0,0,1,1,0,0,0,1),
(30, 2,2,1,4,'Departamento en Alquiler en Tigre','Bartome Mitre N° 380',32000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',3,2,110,0,0,20,1,1,1,0,0,1,1,0,0,0,1);





CREATE TABLE `imagenes` (
  `idImagen` int(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `idPropiedad` int (20) NOT NULL,
  `imgNombre` varchar(40) NOT NULL
  );


CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `usuNombre` varchar(30) NOT NULL,
  `usuApellido` varchar(30) NOT NULL,
  `usuEmail` varchar(30) NOT NULL UNIQUE,
  `usuPass` varchar(30) NOT NULL,
  `usuEstado` tinyint(1) DEFAULT '0'
  );
  
  INSERT INTO `usuarios` (`idUsuario`, `usuNombre`, `usuApellido`, `usuEmail`, `usuPass`, `usuEstado`) VALUES
(1, 'fernando', 'pereyra', 'ferfit16@gmail.com', 'nohayclave', 1),
(2, 'gustavo', 'magliano', 'gustmag@yahoo.com', '1234', 1),
(3, 'diego', 'chiapa', 'diegochiapa@gmail.com', 'abcd', 1);


ALTER TABLE `propiedades`
  ADD CONSTRAINT `fk_estado` FOREIGN KEY (`idEstado`) REFERENCES `estado` (`idEstado`),
  ADD CONSTRAINT `fk_tipo` FOREIGN KEY (`idTipo`) REFERENCES `tipo` (`idTipo`) ,
  ADD CONSTRAINT `fk_barrio` FOREIGN KEY (`idBarrio`) REFERENCES `barrio` (`idBarrio`) ;
 
 ALTER TABLE `imagenes`
  ADD CONSTRAINT `fk_imgPropiedad` FOREIGN KEY (`idPropiedad`) REFERENCES `propiedades` (`idPropiedad`) ;


		