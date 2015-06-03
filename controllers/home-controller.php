<?php //>
class HomeController extends MainController {
	public $necessitaAutenticacao = false;
	public function index() {
		if (!$this->usuario) {
			require_once ABSPATH . '/controllers/login-controller.php';
			// Cria o objeto do controlador "home-controller.php"
			// Este controlador deverá ter uma classe chamada HomeControlle
			$loginController = new LoginController();
			// Executa o método index()
			$loginController->index();
			// FIM
			return;
		} else {
			header('Location: ' . HOME_URI . '/usuario/' );
		}
	}
}