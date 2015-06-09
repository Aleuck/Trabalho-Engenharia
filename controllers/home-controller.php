<?php //>
class HomeController extends MainController {
	public $necessitaAutenticacao = false;
	public function index() {
		if (!$this->usuario) {
			header('Location: ' . HOME_URI . '/login/' );
		} else {
			header('Location: ' . HOME_URI . '/usuario/' );
		}
	}
}