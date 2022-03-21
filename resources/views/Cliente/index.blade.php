<!DOCTYPE html>
<html>
    <head>
        <title>Listagem de clientes</title>
        <script src ="{{asset('js/jquery.min.js')}}"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
        
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" href="{{asset('css/datatables.min.css')}}">
        <script src ="{{asset('js/listar_cliente.js')}}"></script>

        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
                margin-top: 20px;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: center;
                padding: 8px;

            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }

            a {
                text-decoration: none;
            }
        </style>
    </head>

    <body>
        <h2>Listagem de clientes</h2>
        <a href="/clientes/create">Cadastrar novo cliente</a>    
    
        <table id="clientes">
            <thread>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Data de nascimento</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>CPF</th>
                    <th>Endereço</th>
                    <th>Ação</th>
                </tr>
            </thread>
            <tbody></tbody>
        </table>
    </body>
</html>