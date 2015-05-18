CREATE TABLE `genrec`.`usuarios` (
	`id` INT NOT NULL AUTO_INCREMENT ,
	`usuario` VARCHAR(127) NOT NULL ,
	`senha` VARCHAR(255) NOT NULL ,
	`nome` VARCHAR(255) NOT NULL ,
	`email` VARCHAR(255) NOT NULL ,
	`nivel` tinyint(4) NOT NULL DEFAULT '3' ,
	`prioridade` tinyint(4) NOT NULL DEFAULT '3',
	PRIMARY KEY (`id`), UNIQUE `idx_usuario` (`usuario`)
) ENGINE = InnoDB;
