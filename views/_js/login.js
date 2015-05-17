PREF = PREF || {};
(function (exports) {
    function login(usuario, senha, callback) {
        $.ajax({
            type: "POST",
            url: HOME_URI + "/login/validaUsuario/json",
            data: { 'usuario': usuario, 'senha': senha },
            success: callback,
            dataType: 'json'
        });
    }
    exports.login = login;
}(PREF));