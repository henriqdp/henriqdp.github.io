<?php //>
class MainController {
	protected $title;
	protected $parametros;
	protected $usuario;
	protected $required_js;
	public function __construct($parametros = array()) {
		global $usuario;
		$this->parametros = $parametros;
		$this->usuario = $usuario;
	}
}
