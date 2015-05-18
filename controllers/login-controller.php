<?php //>
class LoginController extends MainController {
	private $failed_login = false;
	public $necessitaAutenticacao = false;
	public function index() {
		// Título da página
		$this->title = 'Login';
		// Parametros da função
		//$parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();

		// header padrão
		include ABSPATH . '/views/_includes/header.php';

		// login view
		include ABSPATH . '/views/login/login-view.php';

		// footer padrão
		include ABSPATH . '/views/_includes/footer.php';
	}
	public function validaUsuario() {
		$valido = false;
		$idUsuario = 0;
		$usuario = '';
		if (isset($_POST) && isset($_POST['matricula']) && isset($_POST['senha'])) {
			$usuario = (string) $_POST['matricula'];
			$objUsuario = new Usuario($usuario);
			$valido = ($objUsuario->verificarSenha((string) $_POST['senha']));
			$this->failed_login = !$valido;
			$idUsuario = $valido ? $objUsuario->getId() : 0;

			if ($valido) {
				$_SESSION['usuario.id'] = $objUsuario->getId();
			}
		}
		if ('json' === chk_array($this->parametros, 0)) {
			echo json_encode(array(
				'id' => $idUsuario,
				'usuario' => $usuario,
				'senhaValida' => $valido));
			// response as json
		} else {
			if ($this->failed_login) {
				// autenticação falhou, mostrar tela de login
				include ABSPATH . '/views/_includes/header.php';
				include ABSPATH . '/views/login/login-view.php';
				include ABSPATH . '/views/_includes/footer.php';
			} else {
				// redireciona para home
				header('Location: ' . HOME_URI . '/');
			}
		}
	}
	public function sair() {
		// Unset all of the session variables.
		$_SESSION = array();
		// If it's desired to kill the session, also delete the session cookie.
		// Note: This will destroy the session, and not just the session data!
		if (isset($_COOKIE[session_name()])) {
		    setcookie(session_name(), '', time()-42000, '/');
		}
		// Finally, destroy the session.
		session_destroy();
		header('Location: ' . HOME_URI . '/' );
	}
}