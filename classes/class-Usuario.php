<?php //>
require_once('class-PasswordHash.php');
class Usuario {
	protected $id = 0;
	protected $usuario = '';
	protected $senha = '';
	protected $nome = '';
	protected $nivel = 100;
	protected $prioridade = 100;
	function __construct($parametro = false) {
		if (is_string($parametro)) {
			$usuario = $parametro;
			$this->loadUsuario($usuario);
		} elseif (is_integer($parametro)) {
			$id = $parametro;
			$this->loadId($id);
		}
	}
	// Getters
	public function getId() {
		return $this->id;
	}
	public function getUsuario() {
		return $this->usuario;
	}
	public function getSenha() {
		return $this->senha;
	}
	public function getNome() {
		return $this->nome;
	}
	public function getNivel() {
		return $this->nivel;
	}
	// Setters
	private function setId($id) {
		$this->id = (int) $id;
	}
	public function setUsuario($usuario) {
		$usuario = trim($usuario);
		if (!preg_match('/^[a-zA-Z0-9_]+$/', $usuario)) {
			throw new Exception('Usuario invalido.');
		}
		$this->usuario = $usuario;
	}
	public function setSenha($senha) {
		$this->senha = PasswordHash::hash($senha);
	}
	public function verificarSenha($senha) {
		return PasswordHash::match($senha, $this->senha);
	}
	public function setNome($nome) {
		$nome = trim($nome);
		if (preg_match('/[!@><#$%^\\&*(){}\[\]\/]/', $nome)) {
			throw new Exception("Nome invalido.", 1);
		} else {
			$this->nome = $nome;
		}
	}
	public function setNivel($nivel) {
		$nivel = (int) $nivel;
		$this->nivel = $nivel;
	}
	public function setPrioridade($prioridade) {
		$prioridade = (int) $prioridade;
		$this->prioridade = $prioridade;
	}
	// Carrega usuario pelo id
	public function loadId($id) {
		global $database;
		$sql = 'SELECT id, usuario, senha, nome, nivel, prioridade FROM usuarios WHERE id=?';
		$stmt = $database->prepare($sql);
		$stmt->bind_param('i', $id);
		$this->executeLoadStmt($stmt);
	}
	// Carrega usuário pelo nome de usuario
	public function loadUsuario($usuario) {
		global $database;
		$sql = 'SELECT id, usuario, senha, nome, nivel, prioridade FROM usuarios WHERE usuario=?';
		$stmt = $database->prepare($sql);
		$stmt->bind_param('s', $usuario);
		$this->executeLoadStmt($stmt);
	}
	private function executeLoadStmt($stmt) {
		$stmt->execute();
		$stmt->store_result();
		if ($stmt->num_rows !== 1) {
			$stmt->close();
			$this->limpa();
			return;
		}
		$stmt->bind_result($id, $usuario, $senha, $nome, $nivel, $prioridade);
		$stmt->fetch();
		$stmt->close();
		$this->setId($id);
		$this->setUsuario($usuario);
		$this->senha = $senha;
		$this->setNome($nome);
		$this->setNivel($nivel);
		$this->setPrioridade($prioridade);
	}
	private function limpa() {
		$this->id = 0;
		$this->usuario = '';
		$this->senha = '';
		$this->nome = '';
		$this->nivel = 100;
		$this->prioridade = 100;
	}
	private function salvarNovo() {
		global $database;
		$sql = 'INSERT INTO usuarios (usuario, senha, nome, nivel, prioridade) VALUES (?,?,?,?,?)';
		$stmt = $database->prepare($sql);
		$stmt->bind_param('sssii',
			$this->usuario,
			$this->senha,
			$this->nome,
			$this->nivel,
			$this->prioridade);
		$stmt->execute();
		$this->setId($stmt->insert_id);
		$stmt->close();
	}
	private function atualizarDB() {
		global $database;
		$sql = 'UPDATE usuarios SET usuario=?, senha=?, nome=?, nivel=?, prioridade=? WHERE id=?';
		$stmt = $database->prepare($sql);
		$stmt->bind_param('sssiii',
			$this->usuario,
			$this->senha,
			$this->nome,
			$this->nivel,
			$this->prioridade,
			$this->id);
		$stmt->execute();
		$stmt->close();
	}
	public function salvar() {
		if ($this->id > 0) {
			return $this->atualizarDB();
		} else {
			return $this->salvarNovo();
		}
	}
}