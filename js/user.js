$(document).ready(function() {
    // function carregarEmpresa() {
    //     $.get('api.php?acao=listar', function(data) {
    //         const alunos = JSON.parse(data);
    //         let linhas = '';
    //         alunos.forEach(aluno => {
    //             linhas += `
    //                 <tr>
    //                     <td>${aluno.nome}</td>
    //                     <td>${aluno.email}</td>
    //                     <td>${aluno.idade}</td>
    //                     <td>
    //                         <button class="editar" data-id="${aluno.id}">Editar</button>
    //                         <button class="excluir" data-id="${aluno.id}">Excluir</button>
    //                     </td>
    //                 </tr>`;
    //         });
    //         $('#tabela-alunos').html(linhas);
    //     });
    // }

    $('#form-signup').submit(function(e) {
      
        e.preventDefault();
        const dados = $(this).serialize();
        const id = $('#id').val();
        const acao = id ? 'editar' : 'createUser';
        const mensagemDiv = $('#mensagem');
        
        $.post('../api/user', dados, function(response) {
            console.log(JSON.stringify(dados))
            console.log(JSON.stringify(response))
            const resultado = JSON.parse(response);
            if (resultado.erro) {
                mensagemDiv.html(resultado.erro);
            } else if (resultado.sucesso) {
                mensagemDiv.html(resultado.sucesso, style="display: block;  color: green; font-size: 20px;  text-align: center; margin-top: 10px;");
                // redirecionar para a página dashboard
                setTimeout(() => {
                    window.location.href = '../auth/login';
                }, 1000);
               
                $('#form-signup')[0].reset();
            }
        });
    });
  
    $('#form-login').submit(function(e) {
        e.preventDefault();
        const dados = $(this).serialize();
        const mensagemDiv = $('#mensagem');
      
        $.post('../api/auth', dados, function(response) {
         
            const resultado = JSON.parse(response);
            if (resultado.erro) {
                mensagemDiv.html(resultado.erro);
            } else if (resultado.sucesso) {
                mensagemDiv.html(resultado.sucesso);
                // redirecionar para a página dashboard
                setTimeout(() => {
                    window.location.href = '../inicial/inicial';
                }, 1000);
                $('#form-login')[0].reset();
            }
        });
    });
});
