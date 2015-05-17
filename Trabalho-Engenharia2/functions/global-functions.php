<?php //>

function usuario_sessao() {
	session_start();
	if (isset($_SESSION['usuario.id']) && is_integer($_SESSION['usuario.id'])) {
		$usuario = new Usuario($_SESSION['usuario.id']);
		if ($usuario->getId() > 0) {
			return $usuario;
		}
	}
	return false;
}

function chk_array ( $array, $key ) {
	// Verifica se a chave existe no array
	if ( isset( $array[ $key ] ) && ! empty( $array[ $key ] ) ) {
		// Retorna o valor da chave
		return $array[ $key ];
	}
	
	// Retorna nulo por padrão
	return null;
} // chk_array