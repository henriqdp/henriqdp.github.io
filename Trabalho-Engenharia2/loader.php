<?php //>
if ( ! defined('ABSPATH')) exit;

// Evita que usuários acesse este arquivo diretamente
$database = new mysqli(DB_HOST, DB_USERMAME, DB_PASSWORD, DB_NAME);

require_once ABSPATH . '/functions/global-functions.php';
require_once ABSPATH . '/classes/class-Usuario.php';
$usuario_ativo = usuario_sessao();

require_once ABSPATH . '/controllers/main-controller.php';
require_once ABSPATH . '/classes/class-PrefMVC.php';

// Carrega aplicação
$pref_mvc = new PrefMVC();