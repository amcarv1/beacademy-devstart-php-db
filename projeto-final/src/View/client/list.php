<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<h1>Listar Clientes</h1>

<div class="mb-3 text-end">
    <a href="clientes/novos" class="btn btn-outline-primary">Novo Cliente</a>
</div>

<table class="table table-hover table-stripped">
    <thead class="table-dark">
        <tr>
            <th>#ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while ($client = $data->fetch(\PDO::FETCH_ASSOC)) {
                extract($client);

                echo '<tr>';
                    echo "<td>{$id}</td>";
                    echo "<td>{$nome}</td>";
                    echo "<td>{$telefone}</td>";
                    echo "<td>{$email}</td>";
                    echo "<td>
                            <a href='/clientes/editar?id={$id}' class='btn btn-warning btn-sm'>Editar</a>
                            <a href='/clientes/excluir?id={$id}' class='btn btn-danger btn-sm'>Excluir</a>
                        </td>";
                echo '</tr>';
            }
        ?>
    </tbody>
</table>