-- MySQL Script generated by MySQL Workbench
-- Fri Nov  1 09:48:00 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema firehouse
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `firehouse` ;

-- -----------------------------------------------------
-- Schema firehouse
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `firehouse` DEFAULT CHARACTER SET utf8 ;
USE `firehouse` ;

-- -----------------------------------------------------
-- Table `firehouse`.`inventario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `firehouse`.`inventario` ;

CREATE TABLE IF NOT EXISTS `firehouse`.`inventario` (
  `idinventario` INT(11) NOT NULL,
  PRIMARY KEY (`idinventario`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_spanish_ci;


-- -----------------------------------------------------
-- Table `firehouse`.`proveedores`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `firehouse`.`proveedores` ;

CREATE TABLE IF NOT EXISTS `firehouse`.`proveedores` (
  `idproveedor` INT(3) NOT NULL,
  `proveedor` VARCHAR(50) NOT NULL,
  `telefono1` VARCHAR(25) NOT NULL,
  `telefono2` VARCHAR(25) NOT NULL,
  `correo` VARCHAR(100) NOT NULL,
  `comentario` VARCHAR(350) NOT NULL,
  PRIMARY KEY (`idproveedor`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_spanish_ci;


-- -----------------------------------------------------
-- Table `firehouse`.`producto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `firehouse`.`producto` ;

CREATE TABLE IF NOT EXISTS `firehouse`.`producto` (
  `idproducto` INT(3) NOT NULL,
  `producto` VARCHAR(50) NOT NULL,
  `stock` INT(11) NOT NULL,
  `proveedores_idproveedor` INT(3) NOT NULL,
  PRIMARY KEY (`idproducto`),
  INDEX `fk_producto_proveedores_idx` (`proveedores_idproveedor` ASC) VISIBLE,
  CONSTRAINT `fk_producto_proveedores`
    FOREIGN KEY (`proveedores_idproveedor`)
    REFERENCES `firehouse`.`proveedores` (`idproveedor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;


-- -----------------------------------------------------
-- Table `firehouse`.`usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `firehouse`.`usuario` ;

CREATE TABLE IF NOT EXISTS `firehouse`.`usuario` (
  `documento` INT(11) NOT NULL,
  `nombres` VARCHAR(25) NOT NULL,
  `apellidos` VARCHAR(25) NOT NULL,
  `correo` VARCHAR(100) NOT NULL,
  `usuario` VARCHAR(10) NOT NULL,
  `pass` VARCHAR(150) NOT NULL,
  PRIMARY KEY (`documento`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;


-- -----------------------------------------------------
-- Table `firehouse`.`inventario_has_producto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `firehouse`.`inventario_has_producto` ;

CREATE TABLE IF NOT EXISTS `firehouse`.`inventario_has_producto` (
  `inventario_idinventario` INT(11) NOT NULL,
  `producto_idproducto` INT(3) NOT NULL,
  PRIMARY KEY (`inventario_idinventario`, `producto_idproducto`),
  INDEX `fk_inventario_has_producto_producto1_idx` (`producto_idproducto` ASC) VISIBLE,
  INDEX `fk_inventario_has_producto_inventario1_idx` (`inventario_idinventario` ASC) VISIBLE,
  CONSTRAINT `fk_inventario_has_producto_inventario1`
    FOREIGN KEY (`inventario_idinventario`)
    REFERENCES `firehouse`.`inventario` (`idinventario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_inventario_has_producto_producto1`
    FOREIGN KEY (`producto_idproducto`)
    REFERENCES `firehouse`.`producto` (`idproducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_spanish_ci;


-- -----------------------------------------------------
-- Table `firehouse`.`inventario_has_proveedores`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `firehouse`.`inventario_has_proveedores` ;

CREATE TABLE IF NOT EXISTS `firehouse`.`inventario_has_proveedores` (
  `inventario_idinventario` INT(11) NOT NULL,
  `proveedores_idproveedor` INT(3) NOT NULL,
  PRIMARY KEY (`inventario_idinventario`, `proveedores_idproveedor`),
  INDEX `fk_inventario_has_proveedores_proveedores1_idx` (`proveedores_idproveedor` ASC) VISIBLE,
  INDEX `fk_inventario_has_proveedores_inventario1_idx` (`inventario_idinventario` ASC) VISIBLE,
  CONSTRAINT `fk_inventario_has_proveedores_inventario1`
    FOREIGN KEY (`inventario_idinventario`)
    REFERENCES `firehouse`.`inventario` (`idinventario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_inventario_has_proveedores_proveedores1`
    FOREIGN KEY (`proveedores_idproveedor`)
    REFERENCES `firehouse`.`proveedores` (`idproveedor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_spanish_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
