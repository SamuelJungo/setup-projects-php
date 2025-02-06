$(document).ready(function() {

    function ListarClientes() {
        $.get('../api/cliente', function(data) {
            console.log(data)
    //         const cliente = JSON.parse(data);

    //         console.log(cliente);
    //         let linhas = '';
    //         cliente.forEach(cliente => {
    //             linhas += `
    //                 <tr>
    //                     <td>${cliente.id_cliente}</td>
    //                     <td>${cliente.cliente}</td>
    //                     <td>${cliente.nif}</td>
    //                     <td>${cliente.email}</td>
    //                     <td>${cliente.telefone}</td>
    //                     <td>${cliente.endereco}</td>
    //                     <td>
    //                         <button class="editar" data-id="${cliente.id_cliente}">Editar</button>
    //                         <button class="excluir" data-id="${cliente.id_cliente}">Excluir</button>
    //                     </td>
    //                 </tr>`;
    //         });
    //         $('#clientes-list').html(linhas);
        });
    }

    ListarClientes();

});
