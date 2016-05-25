-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema Exercicio5
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `Exercicio5` ;

-- -----------------------------------------------------
-- Schema Exercicio5
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Exercicio5` DEFAULT CHARACTER SET utf8 ;
USE `Exercicio5` ;

-- -----------------------------------------------------
-- Table `Exercicio5`.`TipoSanguineo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Exercicio5`.`TipoSanguineo` (
  `Id` INT NOT NULL,
  `Nome` VARCHAR(3) NOT NULL,
  PRIMARY KEY (`Id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Exercicio5`.`Sexo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Exercicio5`.`Sexo` (
  `Id` INT NOT NULL,
  `Nome` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`Id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Exercicio5`.`Pacientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Exercicio5`.`Pacientes` (
  `Id` INT NOT NULL AUTO_INCREMENT,
  `Documento` VARCHAR(20) NOT NULL,
  `Nome` VARCHAR(200) NOT NULL,
  `Peso` DECIMAL(3,0) NOT NULL,
  `Nascimento` DATE NOT NULL,
  `Altura` DECIMAL(3,0) NOT NULL,
  `TipoSanguineo_Id` INT NOT NULL,
  `Sexo_Id` INT NOT NULL,
  `Descricao` LONGTEXT NULL,
  PRIMARY KEY (`Id`),
  INDEX `fk_Pacientes_TipoSanguineo_idx` (`TipoSanguineo_Id` ASC),
  INDEX `fk_Pacientes_Sexo1_idx` (`Sexo_Id` ASC),
  UNIQUE INDEX `Documento_UNIQUE` (`Documento` ASC),
  CONSTRAINT `fk_Pacientes_TipoSanguineo`
    FOREIGN KEY (`TipoSanguineo_Id`)
    REFERENCES `Exercicio5`.`TipoSanguineo` (`Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pacientes_Sexo1`
    FOREIGN KEY (`Sexo_Id`)
    REFERENCES `Exercicio5`.`Sexo` (`Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `Exercicio5`.`TipoSanguineo`
-- -----------------------------------------------------
START TRANSACTION;
USE `Exercicio5`;
INSERT INTO `Exercicio5`.`TipoSanguineo` (`Id`, `Nome`) VALUES (1, 'O+');
INSERT INTO `Exercicio5`.`TipoSanguineo` (`Id`, `Nome`) VALUES (2, 'O-');
INSERT INTO `Exercicio5`.`TipoSanguineo` (`Id`, `Nome`) VALUES (3, 'A+');
INSERT INTO `Exercicio5`.`TipoSanguineo` (`Id`, `Nome`) VALUES (4, 'A-');
INSERT INTO `Exercicio5`.`TipoSanguineo` (`Id`, `Nome`) VALUES (5, 'B+');
INSERT INTO `Exercicio5`.`TipoSanguineo` (`Id`, `Nome`) VALUES (6, 'B-');
INSERT INTO `Exercicio5`.`TipoSanguineo` (`Id`, `Nome`) VALUES (7, 'AB+');
INSERT INTO `Exercicio5`.`TipoSanguineo` (`Id`, `Nome`) VALUES (8, 'AB-');

COMMIT;


-- -----------------------------------------------------
-- Data for table `Exercicio5`.`Sexo`
-- -----------------------------------------------------
START TRANSACTION;
USE `Exercicio5`;
INSERT INTO `Exercicio5`.`Sexo` (`Id`, `Nome`) VALUES (1, 'Femenino');
INSERT INTO `Exercicio5`.`Sexo` (`Id`, `Nome`) VALUES (2, 'Masculino');
INSERT INTO `Exercicio5`.`Sexo` (`Id`, `Nome`) VALUES (3, 'Intersexual');

COMMIT;

