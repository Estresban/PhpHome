drop database raspi;

CREATE DATABASE raspi;

USE raspi;

CREATE TABLE `raspi`.`usuarios` ( 
`id_usuario` INT NOT NULL AUTO_INCREMENT , 
`usuario` VARCHAR(20) NOT NULL , 
`pass` VARCHAR(200) NOT NULL , 
`alias` VARCHAR(20) NOT NULL , 
`email` VARCHAR(80) NULL , 
`otros` VARCHAR(100) NULL , 
PRIMARY KEY (`id_usuario`)) ENGINE = InnoDB;

CREATE TABLE `raspi`.`historial` ( 
`id_usuario` INT NOT NULL , 
`id_comando` INT NOT NULL , 
`comando` VARCHAR(20) NOT NULL , 
`fecha` DATETIME NOT NULL , 
`otros` VARCHAR(100) NULL) ENGINE = InnoDB;

ALTER TABLE `raspi`.`historial` ADD FOREIGN KEY (`id_usuario`) REFERENCES `usuarios`(`id_usuario`) ON UPDATE CASCADE ON DELETE RESTRICT;

CREATE TABLE `raspi`.`meteo` (  
`humedad` INT NOT NULL , 
`indice` FLOAT NOT NULL , 
`temperatura1` FLOAT NOT NULL ,
`temperatura2` FLOAT NOT NULL , 
`altitud` FLOAT NOT NULL , 
`presion` FLOAT NOT NULL ,
`lumenes` INT NOT NULL,
`fecha` DATETIME NOT NULL PRIMARY KEY) ENGINE = InnoDB;


CREATE TABLE `raspi`.`estadosp2` (
`escalera` int NOT NULL,
`salon` int NOT NULL,
`pasillo` int NOT NULL,
`cocina` int NOT NULL,
`patio` int NOT NULL,
`matrimonio` int NOT NULL,
`hab1` int NOT NULL,
`hab2` int NOT NULL,
`hab3` int NOT NULL,
`garaje` int NOT NULL,
`fecha` DATETIME NOT NULL PRIMARY KEY) ENGINE = InnoDB;



CREATE TABLE `raspi`.`estadosp1` (
`humedad` int NOT NULL,
`indice` int NOT NULL,
`temp1` int NOT NULL,
`temp2` int NOT NULL,
`altitud` int NOT NULL,
`lumenes` int NOT NULL,
`presion` int NOT NULL,
`estados` int NOT NULL,
`fecha` DATETIME NOT NULL PRIMARY KEY) ENGINE = InnoDB;
 
CREATE TABLE `raspi`.`retornos` (  
`escalera` int NOT NULL , 
`salon` int NOT NULL , 
`pasillo` int NOT NULL ,
`cocina` int NOT NULL , 
`patio` int NOT NULL , 
`matrimonio` int NOT NULL ,
`hab1` int NOT NULL ,
`hab2` int NOT NULL ,
`hab3` int NOT NULL , 
`garaje` int NOT NULL , 
`motorpuerta` int NOT NULL ,
`persiana1` int NOT NULL , 
`persiana2` int NOT NULL , 
`aire_acond` int NOT NULL ,
`calefaccion` int NOT NULL ,
`alarma` int NOT NULL ,
`fecha` DATETIME NOT NULL PRIMARY KEY) ENGINE = InnoDB;


INSERT INTO `usuarios` (`id_usuario`, `usuario`, `pass`, `alias`, `email`, `otros`) VALUES (NULL, 'Esteban', SHA2('yo',512), 'Esteban', 'asirestebanvi@gmail.com', 'usuario de prueba');

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `pass`, `alias`, `email`, `otros`) VALUES (NULL, 'Jose', SHA2('yo',512), 'Jose', 'kayserhack@gmail.com', 'usuario de prueba');
