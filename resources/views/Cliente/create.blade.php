<html>
    <head>
        <title>Cadastro de cliente</title>
        <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
        <link rel="stylesheet" href="cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    </head>
    <body>
        <h2>Cadastro de cliente</h2>
        <form action="/clientes" method="POST">
            @csrf
            {{-- @method('PUT') --}}
            <label>Nome</label><br>
            <input type="text" name="nome"><br><br>
            <label>Data de Nascimento</label><br>
            <input type="date" name="dataNascimento"><br><br>
            <label>Telefone</label><br>
            <input type="text" name="telefone"><br><br>
            <label>Email</label><br>
            <input type="text" name="email"><br><br>
            <label>CPF</label><br>
            <input type="text" name="cpf"><br><br>
            <label>Endereço</label><br>
            <input type="text" name="endereco"><br><br>
            <button type="submit">enviar</button>
        </form>
    </body>
</html>