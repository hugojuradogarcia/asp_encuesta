SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `aspen_encuestas` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `aspen_encuestas` ;

-- -----------------------------------------------------
-- Table `aspen_encuestas`.`aspen_empleados`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `aspen_encuestas`.`aspen_empleados` ;

CREATE TABLE IF NOT EXISTS `aspen_encuestas`.`aspen_empleados` (
  `asp_idempleado` INT NOT NULL AUTO_INCREMENT,
  `asp_nombre` VARCHAR(60) NULL,
  `asp_puesto` VARCHAR(60) NULL,
  `asp_ingreso` DATE NULL,
  `asp_edad` INT NULL,
  `asp_date` DATE NULL,
  `asp_pasaporte` VARCHAR(45) NULL,
  `asp_visa` VARCHAR(45) NULL,
  `asp_visa_paises` VARCHAR(200) NULL,
  PRIMARY KEY (`asp_idempleado`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `aspen_encuestas`.`aspen_educacion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `aspen_encuestas`.`aspen_educacion` ;

CREATE TABLE IF NOT EXISTS `aspen_encuestas`.`aspen_educacion` (
  `asp_bachi` VARCHAR(10) NULL,
  `asp_bachi_tiempo` INT NULL,
  `asp_uni` VARCHAR(10) NULL,
  `asp_uni_tiempo` INT NULL,
  `asp_maestria` VARCHAR(10) NULL,
  `asp_maestria_tiempo` INT NULL,
  `asp_esp` VARCHAR(10) NULL,
  `asp_esp_tiempo` INT NULL,
  `asp_diplo` VARCHAR(10) NULL,
  `asp_diplo_tiempo` INT NULL,
  `asp_docto` VARCHAR(10) NULL,
  `asp_docto_tiempo` INT NULL,
  `aspen_empleados_asp_idempleado` INT NOT NULL,
  INDEX `fk_aspen_educacion_aspen_empleados1_idx` (`aspen_empleados_asp_idempleado` ASC),
  CONSTRAINT `fk_aspen_educacion_aspen_empleados1`
    FOREIGN KEY (`aspen_empleados_asp_idempleado`)
    REFERENCES `aspen_encuestas`.`aspen_empleados` (`asp_idempleado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `aspen_encuestas`.`aspen_inf_gral`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `aspen_encuestas`.`aspen_inf_gral` ;

CREATE TABLE IF NOT EXISTS `aspen_encuestas`.`aspen_inf_gral` (
  `asp_inmueble` VARCHAR(50) NULL,
  `asp_edo_civil` VARCHAR(50) NULL,
  `asp_dep_eco` INT NULL,
  `asp_dep_conyuge_edad` INT NULL,
  `asp_dep_hijos_edad` INT NULL,
  `asp_dep_padres_edad` INT NULL,
  `asp_dep_nietos_edad` INT NULL,
  `asp_trab_conyuge` VARCHAR(10) NULL,
  `asp_trab_conyuge_monto` INT NULL,
  `asp_trab_hijos` VARCHAR(10) NULL,
  `asp_trab_hijos_monto` INT NULL,
  `asp_ing_fam_aspen` INT NULL,
  `asp_ing_fam_otros` INT NULL,
  `aspen_empleados_asp_idempleado` INT NOT NULL,
  INDEX `fk_aspen_inf_gral_aspen_empleados1_idx` (`aspen_empleados_asp_idempleado` ASC),
  CONSTRAINT `fk_aspen_inf_gral_aspen_empleados1`
    FOREIGN KEY (`aspen_empleados_asp_idempleado`)
    REFERENCES `aspen_encuestas`.`aspen_empleados` (`asp_idempleado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `aspen_encuestas`.`aspen_egresos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `aspen_encuestas`.`aspen_egresos` ;

CREATE TABLE IF NOT EXISTS `aspen_encuestas`.`aspen_egresos` (
  `asp_tel` VARCHAR(10) NULL,
  `asp_tel_monto` INT NULL,
  `asp_movil` VARCHAR(10) NULL,
  `asp_movil_monto` INT NULL,
  `asp_gas` VARCHAR(10) NULL,
  `asp_gas_monto` INT NULL,
  `asp_predial` VARCHAR(10) NULL,
  `asp_predial_monto` INT NULL,
  `asp_mant_carro` VARCHAR(10) NULL,
  `asp_mant_carro_monto` INT NULL,
  `asp_ade_tarj` VARCHAR(10) NULL,
  `asp_ade_tarj_monto` INT NULL,
  `asp_ade_prestamo` VARCHAR(10) NULL,
  `asp_ade_prestamo_monto` INT NULL,
  `asp_ade_auto` VARCHAR(10) NULL,
  `asp_ade_auto_monto` INT NULL,
  `asp_ade_ahorro` VARCHAR(10) NULL,
  `asp_gasto_mensual_monto` INT NULL,
  `asp_ing_adicionales_monto` INT NULL,
  `aspen_empleados_asp_idempleado` INT NOT NULL,
  INDEX `fk_aspen_egresos_aspen_empleados_idx` (`aspen_empleados_asp_idempleado` ASC),
  CONSTRAINT `fk_aspen_egresos_aspen_empleados`
    FOREIGN KEY (`aspen_empleados_asp_idempleado`)
    REFERENCES `aspen_encuestas`.`aspen_empleados` (`asp_idempleado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `aspen_encuestas`.`aspen_inversiones`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `aspen_encuestas`.`aspen_inversiones` ;

CREATE TABLE IF NOT EXISTS `aspen_encuestas`.`aspen_inversiones` (
  `asp_educ` INT NULL,
  `asp_educ_monto` DECIMAL(2) NULL,
  `asp_vest` INT NULL,
  `asp_vest_monto` DECIMAL(2) NULL,
  `asp_alim` INT NULL,
  `asp_alim_monto` DECIMAL(2) NULL,
  `asp_inv` INT NULL,
  `asp_inv_monto` DECIMAL(2) NULL,
  `asp_activ` INT NULL,
  `asp_activ_monto` DECIMAL(2) NULL,
  `asp_seguro` INT NULL,
  `aspen_empleados_asp_idempleado` INT NOT NULL,
  INDEX `fk_aspen_inversiones_aspen_empleados1_idx` (`aspen_empleados_asp_idempleado` ASC),
  CONSTRAINT `fk_aspen_inversiones_aspen_empleados1`
    FOREIGN KEY (`aspen_empleados_asp_idempleado`)
    REFERENCES `aspen_encuestas`.`aspen_empleados` (`asp_idempleado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `aspen_encuestas`.`aspen_activos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `aspen_encuestas`.`aspen_activos` ;

CREATE TABLE IF NOT EXISTS `aspen_encuestas`.`aspen_activos` (
  `asp_compu` VARCHAR(10) NULL,
  `asp_telefono` VARCHAR(10) NULL,
  `asp_auto` VARCHAR(10) NULL,
  `aspen_empleados_asp_idempleado` INT NOT NULL,
  INDEX `fk_aspen_activos_aspen_empleados1_idx` (`aspen_empleados_asp_idempleado` ASC),
  CONSTRAINT `fk_aspen_activos_aspen_empleados1`
    FOREIGN KEY (`aspen_empleados_asp_idempleado`)
    REFERENCES `aspen_encuestas`.`aspen_empleados` (`asp_idempleado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
