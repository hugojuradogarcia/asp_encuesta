SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `aspen_encuestas` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `aspen_encuestas` ;

-- -----------------------------------------------------
-- Table `aspen_encuestas`.`aspen_empleados`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `aspen_encuestas`.`aspen_empleados` (
  `asp_idempleado` INT NOT NULL,
  `asp_puesto` VARCHAR(60) NULL,
  `asp_ingreso` DATE NULL,
  `asp_edad` INT NULL,
  PRIMARY KEY (`asp_idempleado`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `aspen_encuestas`.`aspen_educacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `aspen_encuestas`.`aspen_educacion` (
  `asp_bachi` INT NULL,
  `asp_bachi_con` INT NULL,
  `asp_bachi_tiempo` INT NULL,
  `asp_uni` INT NULL,
  `asp_uni_con` INT NULL,
  `asp_uni_tiempo` INT NULL,
  `asp_maestria` INT NULL,
  `asp_maestria_con` INT NULL,
  `asp_maestria_tiempo` INT NULL,
  `asp_esp` INT NULL,
  `asp_esp_con` INT NULL,
  `asp_esp_tiempo` INT NULL,
  `asp_diplo` INT NULL,
  `asp_diplo_con` INT NULL,
  `asp_diplo_tiempo` INT NULL,
  `asp_docto` INT NULL,
  `asp_docto_con` INT NULL,
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
CREATE TABLE IF NOT EXISTS `aspen_encuestas`.`aspen_inf_gral` (
  `asp_inmueble` INT NULL,
  `asp_edo_civil` INT NULL,
  `asp_dep_eco` INT NULL,
  `asp_dep_eco_edad` INT NULL,
  `asp_conyuge` INT NULL,
  `asp_hijos` INT NULL,
  `asp_ing_fam` INT NULL,
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
CREATE TABLE IF NOT EXISTS `aspen_encuestas`.`aspen_egresos` (
  `asp_luz` INT NULL,
  `asp_luz_monto` INT NULL,
  `asp_tel` INT NULL,
  `asp_tel_monto` INT NULL,
  `asp_movil` INT NULL,
  `asp_movil_monto` INT NULL,
  `asp_gas` INT NULL,
  `asp_gas_monto` INT NULL,
  `asp_predial` INT NULL,
  `asp_predial_monto` INT NULL,
  `asp_mant_carro` INT NULL,
  `asp_mant_carro_monto` INT NULL,
  `asp_ade_tarj` INT NULL,
  `asp_ade_tarj_monto` INT NULL,
  `asp_ade_prestamo` INT NULL,
  `asp_ade_prestamo_monto` INT NULL,
  `asp_ade_auto` INT NULL,
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
CREATE TABLE IF NOT EXISTS `aspen_encuestas`.`aspen_activos` (
  `asp_compu` INT NULL,
  `asp_telefono` INT NULL,
  `asp_auto` INT NULL,
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
