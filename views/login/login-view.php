<div id="login">
	<h1>Login</h1>
	<form id="login-form" method="post" action="<?php echo HOME_URI; ?>/login/validaUsuario">
		<dl compact>
			<dt>Usuario</dt>
			<dd><input type="text" name="usuario" id="login-campo-usuario" /></dd>
			<dt>Senha</dt>
			<dd><input type="password" name="senha" id="login-campo-senha" /></dd>
		</dl>
		<button type="submit">Logar</button>
	</form>
</div>