<?php //>
class MainController {
	protected $title;
	protected $parametros;
	protected $usuario;
	private $jsPaths = array();
	public function __construct($parametros = array()) {
		global $usuario;
		$this->parametros = $parametros;
		$this->usuario = $usuario;
	}
	protected function includeJS($path) {
		$this->jsPaths[] = $path;
	}
	protected function includeJSHTML() {
		foreach ($this->jsPaths as $path) {
			echo "  <script src=\"".HOME_URI."$path\"></script>\n";
		}
	}
}
