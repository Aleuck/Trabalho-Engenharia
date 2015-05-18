<?php //>
class PermissaoNegadaController extends MainController {
	public $necessitaAutenticacao = false;
	private $failed_login = false;
	public function index() {
		// Título da página
		$this->title = 'Login';
		// Parametros da função
		//$parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();

		// header padrão
		include ABSPATH . '/views/_includes/header.php';

		// login view
		include ABSPATH . '/views/permissao-negada/permissaoNegada-view.php';

		// footer padrão
		include ABSPATH . '/views/_includes/footer.php';
	}
}
