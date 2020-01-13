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

function pageMessage(type) {
    debugger
    var messages = {
        permission: {
            message: "Permissão negada",
            class: "danger"
        },
        employee_c: {
            message: "Usuário cadastrado com sucesso!",
            class: "success"
        },
        employee_d: {
            message: "Usuário excluído com sucesso!",
            class: "success"
        },
        product_c: {
            message: "Produto cadastrado com sucesso!",
            class: "success"
        },
        product_d: {
            message: "Produto excluído com sucesso!",
            class: "success"
        },
        product_u: {
            message: "Produto alterado com sucesso!",
            class: "success"
        },
        active: {
            message: "Produto ativado com sucesso!",
            class: "success"
        },
        inactive: {
            message: "Produto inativado com sucesso!",
            class: "success"
        }
    }

    $("#page-message").html(messages[type].message)

    $("#page-message").addClass(`alert alert-${messages[type].class}`)
    $("#page-message").show()
}
