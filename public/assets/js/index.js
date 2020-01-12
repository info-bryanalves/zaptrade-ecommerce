function loginErrorMessage(type) {
    var messages = {
        auth: "Autenticação necessária para acessar o ambiente administrativo!",
        exists: "Usuário inexistente!",
        password: "Senha incorreta!"
    }

    $(".modal").modal();
    $("#login-error-message").html(messages[type])
    $("#login-error-message").show()
}

$('#login-modal').on('hidden.bs.modal', function (e) {
    $("#login-error-message").html()
    $("#login-error-message").hide()
})