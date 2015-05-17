<?php //>
require_once('class-PasswordHash.php');
class Usuario {
	protected $id = 0;
	protected $usuario = '';
	protected $senha = '';
	protected $nome = '';
	protected $nivel = -1;
	function __construct($parametro) {
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
		$usuario = (string) $usuario;
		if ($usuario === '') {
			throw new Exception('Usuario em branco.');
		}
		$this->usuario = $usuario;
	}
	public function setSenha($senha) {
		$this->senha = PasswordHash::hash($senha);
	}
	public function setNome($nome) {
		$this->nome = $nome;
	}
	public function setNivel($nivel) {
		$nivel = (int) $nivel;
		$this->nivel = $nivel;
	}
	// Carrega usuario pelo id
	public function loadId($id) {
		global $database;
		$sql = 'SELECT id, usuario, senha, nome, nivel FROM usuarios WHERE id=?';
		$stmt = $database->prepare($sql);
		$stmt->bind_param('i',$id);
		$stmt->bind_result($id, $usuario, $senha, $nome, $nivel);
	}
	// Carrega usuário pelo nome de usuario
	public function loadUsuario($usuario) {

	}
	public function verificarSenha($senha) {
		return PasswordHash::match($senha, $this->senha);
	}
	private function limpa() {
		$this->id = 0;
		$this->usuario = '';
		$this->senha = '';
		$this->nome = '';
		$this->nivel = -1;
	}
}