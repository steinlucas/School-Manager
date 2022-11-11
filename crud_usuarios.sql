CREATE DATABASE  IF NOT EXISTS `crud_usuarios`;
USE `crud_usuarios`;

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `endereco` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;


