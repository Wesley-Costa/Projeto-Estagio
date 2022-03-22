$(document).ready(function ($) {
    base_url = window.location.origin;
    var table = $("#clientes").DataTable({
        ajax: base_url + "/clientes/show",
        serverSide: true,
        reponsive: true,
        processing: true,
        searching: true,
        "order": [0, "desc"],
        columns: [{
                "width": "5%",
                data: "id",
                name: "id"
            },
            {
                "width": "15%",
                data: "nome",
                name: "nome"
            },
            {
                "width": "15%",
                data: "dataNascimento",
                name: "dataNascimento"
            },
            {
                "width": "15%",
                data: "telefone",
                name: "telefone"
            },
            {
                "width": "15%",
                data: "email",
                name: "email"
            },
            {
                "width": "15%",
                data: "cpf",
                name: "cpf"
            },
            {
                "width": "15%",
                data: "endereco",
                name: "endereco"
            },
            {
                "width": "15%",
                data: "acao",
                name: "acao"
            },
        ]
    });

    $(document).on("click", ".btnExcluir", function () {
        var id = $(this).data("id");
        var nome = $(this).data("nome");

        swalWithBootstrapButtons
            .fire({
                title: "Você realmente deseja excluir o cliente: " + nome + "?",
                text: "",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Sim, quero excluir!",
                cancelButtonText: "Não, cancelar!",
                reverseButtons: true,
            })
            .then((result) => {
                if (result.value) {
                    $.ajax({
                        type: "delete",
                        url: "clientes/" + id,
                        headers: {
                            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                                "content"
                            ),
                        },
                        data: {},
                        success: function (data) {
                            if (data.erro) {
                                swalWithBootstrapButtons.fire(
                                    "Atenção",
                                    "Exclusão cancelada, tente novamente em outro momento.",
                                    "error"
                                );
                            } else {
                                swalWithBootstrapButtons
                                    .fire(
                                        "Sucesso",
                                        "Exclusão realizada com sucesso",
                                        "success"
                                    )
                                    .then(function (result) {
                                        if (result.value) {
                                            $("#table").DataTable().draw(false);
                                        }
                                    });
                            }
                        },
                        error: function () {
                            swalWithBootstrapButtons.fire(
                                "Atenção",
                                "Exclusão cancelada, tente novamente em outro momento.",
                                "error"
                            );
                        },
                    });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swalWithBootstrapButtons.fire(
                        "Atenção",
                        "Exclusão cancelada, tente novamente em outro momento.",
                        "error"
                    );
                }
            });
    });
});
