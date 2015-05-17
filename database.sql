CREATE TABLE `genrec`.`usuarios` (
	`id` INT NOT NULL AUTO_INCREMENT ,
	`usuario` VARCHAR(127) NOT NULL ,
	`senha` VARCHAR(255) NOT NULL ,
	`nome` VARCHAR(255) NOT NULL ,
	`nivel` TINYINT NOT NULL ,
	`prioridade` TINYINT NOT NULL ,
	PRIMARY KEY (`id`), UNIQUE `idx_usuario` (`usuario`)
) ENGINE = InnoDB;