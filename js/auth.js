function SignUp() {
    var empresa = document.getElementById("empresa").value;
    var nif = document.getElementById("nif").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var contato = document.getElementById("contato").value;
    var mensagemDiv = document.getElementById("mensagem");

    if (!empresa || !nif || !email || !password || !contato) {
        mensagemDiv.innerHTML = `<div class="alert alert-warning">Preencha todos os campos!</div>`;
        return;
    }


    const dados = {
        empresa: empresa,
        nif: nif,
        email: email,
        password: password,
        contato: contato
    };

    $.post('../api/empresa', dados, function(response) {
        console.log(response)
        console.log(response.erro)
    console.log(dados)
        if (response.erro) {
            mensagemDiv.innerHTML = `<div class="alert alert-danger">${response.erro}</div>`;
        } else if (response.sucesso) {
            mensagemDiv.innerHTML = `<div class="alert alert-success">${response.sucesso}</div>`;
            setTimeout(() => {
                window.location.href = '../auth/sign-in';
            }, 1000);
            $('#form-signup')[0].reset();
        }
    }).fail(function(jqXHR, textStatus, errorThrown) {
        console.error("Erro na requisição:", textStatus, errorThrown);
        mensagemDiv.innerHTML = `<div class="alert alert-danger">Erro ao conectar com o servidor.</div>`;
    });
}

function SignIn() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var mensagemDiv = document.getElementById("mensagem");

    console.log(email,password)

    if (!email || !password) {
        mensagemDiv.innerHTML = `<div class="alert alert-warning">Preencha todos os campos!</div>`;
        return;
    }
  

   // const dados = { email: email, password: password };
    //const use  = axios.post('localhost/sistema-faturacao/api/auth',{email,password})
    
    $.post('../api/auth', {email,password}, function(response) {
        console.log(response)
        if (response.erro) {
            mensagemDiv.innerHTML = `<div class="alert alert-danger">${response.erro}</div>`;
        } else if (response.sucesso) {
            mensagemDiv.innerHTML = `<div class="alert alert-success">${response.sucesso}</div>`;
            setTimeout(() => {
                window.location.href = '../inicial/inicial';
            }, 1000);
        }
    });
}
