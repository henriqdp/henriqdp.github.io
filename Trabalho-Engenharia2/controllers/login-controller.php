<?php //>
class LoginController extends MainController {
	public function index() {
		// Título da página
		$this->title = 'Login';
		// Parametros da função
		$parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();

		include ABSPATH . '/views/_includes/header.php';

		include ABSPATH . '/views/login/login-view.php';

		include ABSPATH . '/views/_includes/footer.php';
	}
}