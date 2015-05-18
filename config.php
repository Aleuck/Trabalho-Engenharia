<?php //>

// Caminho para a raiz
define('ABSPATH', dirname(__FILE__));

// Caminho para a pasta de uploads
define( 'UP_ABSPATH', ABSPATH . '/views/_uploads' );

// URL da home
define( 'HOME_URI', 'http://localhost/~white/trabeng' );

// Nome do host da base de dados
define( 'DB_HOST', 'localhost' );

// Nome do DB
define( 'DB_NAME', 'genrec' );

// Usuário do DB
define( 'DB_USERMAME', 'genrec' );

// Senha do DB
define( 'DB_PASSWORD', 'senha_muito_aleatoria_wtf' );

// Níveis de usuario
define( 'NIVEL_ADMINISTRADOR', 1 );
define( 'NIVEL_GERENTE', 2 );
define( 'NIVEL_USUARIO', 3 );

// Prioridades de usuario
define( 'PRIORIDADE_PREFEITO', 1 );
define( 'PRIORIDADE_SECRETARIO', 2 );
define( 'PRIORIDADE_FUNCIONARIO', 3 );
define( 'PRIORIDADE_MAU_FUNCIONARIO', 4 );
