<?php //>
class LoginController extends MainController {
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
		if (isset($_POST) && isset($_POST['usuario']) && isset($_POST['senha'])) {
			$usuario = (string) $_POST['usuario'];
			$objUsuario = new Usuario($usuario);
			$valido = ($objUsuario->verificarSenha((string) $_POST['senha']));

			$idUsuario = $valido ? $objUsuario->getId() : 0;
		}
		if ('json' === chk_array($this->parametros, 0)) {
			echo json_encode(array(
				'id' => $idUsuario,
				'usuario' => $usuario,
				'senhaValida' => $valido));
			// response as json
		} else {
			include ABSPATH . '/views/_includes/header.php';
			include ABSPATH . '/views/login/login-view.php';
			include ABSPATH . '/views/_includes/footer.php';
		}
	}
}