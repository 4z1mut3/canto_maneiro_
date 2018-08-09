-- MySQL Script generated by MySQL Workbench
-- Mon Aug  6 09:20:52 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`usuarios` (
  `id_usuarios` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `telefone` VARCHAR(14) NOT NULL,
  `cpf` VARCHAR(14) NOT NULL,
  `senha` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id_usuarios`),
  UNIQUE INDEX `id_usuarios_UNIQUE` (`id_usuarios` ASC),
  UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tipos_de_imoveis`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tipos_de_imoveis` (
  `id_tipos_de_imoveis` INT NOT NULL AUTO_INCREMENT,
  `tipo` VARCHAR(45) NULL,
  PRIMARY KEY (`id_tipos_de_imoveis`),
  UNIQUE INDEX `id_tipos_de_imoveis_UNIQUE` (`id_tipos_de_imoveis` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`imovel`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`imovel` (
  `id_imovel` INT NOT NULL AUTO_INCREMENT,
  `endereco` VARCHAR(50) NULL,
  `area_mxm` DECIMAL(10,2) NULL,
  `preco` DECIMAL(10,2) NULL,
  `usuarios_id_usuarios` INT NOT NULL,
  `tipos_de_imoveis_id_tipos_de_imoveis` INT NOT NULL,
  PRIMARY KEY (`id_imovel`),
  UNIQUE INDEX `idi_movel_UNIQUE` (`id_imovel` ASC),
  INDEX `fk_imovel_usuarios_idx` (`usuarios_id_usuarios` ASC),
  INDEX `fk_imovel_tipos_de_imoveis1_idx` (`tipos_de_imoveis_id_tipos_de_imoveis` ASC),
  CONSTRAINT `fk_imovel_usuarios`
    FOREIGN KEY (`usuarios_id_usuarios`)
    REFERENCES `mydb`.`usuarios` (`id_usuarios`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_imovel_tipos_de_imoveis1`
    FOREIGN KEY (`tipos_de_imoveis_id_tipos_de_imoveis`)
    REFERENCES `mydb`.`tipos_de_imoveis` (`id_tipos_de_imoveis`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`contas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`contas` (
  `id_contas` INT NOT NULL AUTO_INCREMENT,
  `contas` VARCHAR(45) NULL,
  PRIMARY KEY (`id_contas`),
  UNIQUE INDEX `id_contas_UNIQUE` (`id_contas` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`imovel_has_contas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`imovel_has_contas` (
  `imovel_idi_movel` INT NOT NULL,
  `contas_id_contas` INT NOT NULL,
  PRIMARY KEY (`imovel_idi_movel`, `contas_id_contas`),
  INDEX `fk_imovel_has_contas_contas1_idx` (`contas_id_contas` ASC),
  INDEX `fk_imovel_has_contas_imovel1_idx` (`imovel_idi_movel` ASC),
  CONSTRAINT `fk_imovel_has_contas_imovel1`
    FOREIGN KEY (`imovel_idi_movel`)
    REFERENCES `mydb`.`imovel` (`id_imovel`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_imovel_has_contas_contas1`
    FOREIGN KEY (`contas_id_contas`)
    REFERENCES `mydb`.`contas` (`id_contas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`aluguel`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`aluguel` (
  `id_aluguel` INT NOT NULL AUTO_INCREMENT,
  `desconto` DECIMAL(10,2) NOT NULL,
  `vl_total` DECIMAL(10,2) NULL,
  `data_inicio` DATE NULL,
  `data_fim` DATE NULL,
  `usuarios_id_usuarios` INT NOT NULL,
  `imovel_id_imovel` INT NOT NULL,
  PRIMARY KEY (`id_aluguel`),
  UNIQUE INDEX `id_aluguel_UNIQUE` (`id_aluguel` ASC),
  INDEX `fk_aluguel_usuarios1_idx` (`usuarios_id_usuarios` ASC),
  INDEX `fk_aluguel_imovel1_idx` (`imovel_id_imovel` ASC),
  CONSTRAINT `fk_aluguel_usuarios1`
    FOREIGN KEY (`usuarios_id_usuarios`)
    REFERENCES `mydb`.`usuarios` (`id_usuarios`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_aluguel_imovel1`
    FOREIGN KEY (`imovel_id_imovel`)
    REFERENCES `mydb`.`imovel` (`id_imovel`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
describe imovel;
alter table imovel add comodo varchar(20) null;
select * from imovel;