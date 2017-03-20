SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema petshop
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `petshop` ;

CREATE SCHEMA IF NOT EXISTS `petshop` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci ;
USE `petshop` ;

-- -----------------------------------------------------
-- Create database
-- -----------------------------------------------------

DROP USER `sispetshop`@`localhost`;
CREATE USER `sispetshop`@`localhost` identified by "123456";
GRANT ALL PRIVILEGES ON petshop.* TO `sispetshop`@`localhost`;
FLUSH PRIVILEGES;

--
-- Estrutura da tabela `produtos`
--
CREATE TABLE IF NOT EXISTS petshop.produtos (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `preco` DECIMAL(10,2) NOT NULL,
  `imagem` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

--
-- Extraindo dados da tabela `produtos`
--
INSERT INTO `produtos` (`id`, `nome`, `preco`, `imagem`) VALUES
(1, 'Ração para Cachorros', '119.90', 'racaodog.jpg'),
(2, 'Ração para Gatos', '139.90', 'racaocat.jpg'),
(3, 'Antipulgas e Carrapatos', '59.90', 'antipulga.jpg'),
(4, 'Osso', '15.90', 'osso.jpg'),
(5, 'Tapete Higiênico', '49.90', 'tapete.jpg'),
(6, 'Suplemento Vitamínico', '54.90', 'suplemento.jpg'),
(7, 'Casinha', '209.90', 'casinha.jpg'),
(8, 'Caminha', '78.90', 'caminha.jpg'),
(9, 'Almofada', '219.90', 'almofada.jpg'),
(10, 'Colete', '43.90', 'colete.jpg'),
(11, 'Shampoo', '13.90', 'shampoo.jpg'),
(12, 'Comedouro', '28.90', 'comedouro.jpg'),
(13, 'Arranhador', '209.90', 'arranhador.jpg'),
(14, 'Gaiola', '68.90', 'gaiola.jpg'),
(15, 'Aquário', '115.90', 'aquario.jpg');

-- -----------------------------------------------------
-- Estrutura da tabela `users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `petshop`.`users` ;

CREATE TABLE IF NOT EXISTS `petshop`.`users` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(191) NOT NULL,
  `email` VARCHAR(191) NOT NULL,
  `password` VARCHAR(191) NOT NULL,
  `type` SMALLINT(6) NOT NULL,
  `remember_token` VARCHAR(100) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

--
-- Extraindo dados da tabela `users`
--
INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`, `remember_token`) VALUES
(1, 'Maria José', 'maria@gmail.com', '123456', 1, 'sempre'),
(2, 'Grasielle Rodrigues', 'grasi_camila@yahoo.com.br', '262902', 2, 'qualquer'),
(3, 'José Maria', 'jose@gmail.com', '654321', 3, 'mesma');

--
-- Estrutura da tabela `compras`
--
DROP TABLE IF EXISTS `petshop`.`compras` ;

CREATE TABLE IF NOT EXISTS `petshop`.`compras` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `user_id` INT(10) NOT NULL,
  `produto_id` INT(10) NOT NULL,
  `quantidade` SMALLINT(6) NOT NULL,
  `data` DATETIME NOT NULL,
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_compras_produtos_idx` (`produto_id` ASC),
  INDEX `fk_compras_users1_idx` (`user_id` ASC),
  CONSTRAINT `fk_compras_produtos`
    FOREIGN KEY (`produto_id`)
    REFERENCES `petshop`.`produtos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_compras_users1`
    FOREIGN KEY (`user_id`)
    REFERENCES `petshop`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


ALTER TABLE users AUTO_INCREMENT = 100;
ALTER TABLE produtos AUTO_INCREMENT = 100;
ALTER TABLE compras AUTO_INCREMENT = 100;


GRANT ALL ON `petshop`.* TO 'sispetshop';

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
