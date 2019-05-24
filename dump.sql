-- -----------------------------------------------------
-- Schema php_site
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `php_site` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `php_site` ;

-- -----------------------------------------------------
-- Table `php_site`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `php_site`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(250) NOT NULL,
  `password` VARCHAR(250) NOT NULL,
  `full_name` VARCHAR(255) NULL,
  `phone` VARCHAR(45) NULL,
  `created` DATETIME NOT NULL,
  `updated` DATETIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `php_site`.`pages`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `php_site`.`pages` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(45) NOT NULL,
  `url` VARCHAR(250) NOT NULL,
  `body` TEXT NULL,
  `created` DATETIME NOT NULL,
  `updated` DATETIME NOT NULL,
  `users_id` INT NOT NULL,
  PRIMARY KEY (`id`, `users_id`),
  INDEX `fk_pages_users_idx` (`users_id` ASC),
  CONSTRAINT `fk_pages_users`
    FOREIGN KEY (`users_id`)
    REFERENCES `php_site`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;
