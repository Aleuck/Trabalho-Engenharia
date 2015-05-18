<?php //>
class HomeController extends MainController {
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
			include ABSPATH . '/views/_includes/header.php';
			include ABSPATH . '/views/_includes/footer.php';
		}
	}
}