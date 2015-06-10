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


INSERT INTO `genrec`.`usuarios` (`usuario`, `senha`, `nome`, `email`, `nivel`, `prioridade`) VALUES
('admin', '$2y$10$GfOIfDEIANYBcm5/wVS9KufIDrIzsLLMxBU2u/qs21NPT8gNBX36i', 'Administrador', 'admin@admin', 1, 1);