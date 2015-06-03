<?php //>
class UsuarioController extends MainController {
	private $failed_login = false;
	public $necessitaAutenticacao = true;
	public $nivel = NIVEL_ADMINISTRADOR;
	public function index() {
		$this->cadastrar();
	}
	public function gerenciar() {
		$this->title = 'Gerência de Usuários';
		// header padrão
		include ABSPATH . '/views/_includes/header.php';

		// login view
		include ABSPATH . '/views/usuario/gerencia-view.php';

		// footer padrão
		include ABSPATH . '/views/_includes/footer.php';
	}
	public function editar() {
		$matricula = isset($_POST['matricula']) ? (string) $_POST['matricula'] : '';
	}
	public function excluir() {
		$matricula = isset($_POST['matricula']) ? (string) $_POST['matricula'] : '';
	}
	public function cadastrar() {
		if ('enviar' === chk_array($this->parametros, 0)) {
			$matricula = isset($_POST['matricula']) ? (string) $_POST['matricula'] : '';
			$senha = isset($_POST['senha']) ? (string) $_POST['senha'] : '';
			$nome = isset($_POST['nome']) ? (string) $_POST['nome'] : '';
			$email = isset($_POST['email']) ? (string) $_POST['email'] : 0;
			$prioridade = isset($_POST['prioridade']) ? (string) $_POST['prioridade'] : '';
			$nivel = isset($_POST['nivel']) ? (int) $_POST['nivel'] : 0;
			$usuario = new Usuario();
			$usuario->setUsuario($matricula);
			$usuario->setSenha($senha);
			$usuario->setNome($nome);
			$usuario->setEmail($email);
			$usuario->setPrioridade($prioridade);
			$usuario->setNivel($nivel);
			$usuario->salvar();
			$sucesso = ($usuario->getId() > 0);
			if ('json' === chk_array($this->parametros, 1)) {
				echo json_encode(array('sucesso' => $sucesso));
			} else {
				include ABSPATH . '/views/_includes/header.php';
				include ABSPATH . '/views/usuario/sucesso.php';
				include ABSPATH . '/views/_includes/footer.php';
			}
		} else {
			$this->title = 'Cadastro de Usuário';
			// Parametros da função
			//$parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();

			// header padrão
			include ABSPATH . '/views/_includes/header.php';

			// login view
			include ABSPATH . '/views/usuario/cadastro-view.php';

			// footer padrão
			include ABSPATH . '/views/_includes/footer.php';
		}
	}
}
