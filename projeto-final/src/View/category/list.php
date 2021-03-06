<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<h1>Listar categoria</h1>

<div class="mb-3 text-end">
    <a href="categorias/nova" class="btn btn-outline-primary">Nova Categoria</a>
</div>

<table class="table table-hover table-stripped">
    <thead class="table-dark">
        <tr>
            <th>#ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while ($category = $data->fetch(\PDO::FETCH_ASSOC)) {
                extract($category);

                echo '<tr>';
                    echo "<td>{$id}</td>";
                    echo "<td>{$name}</td>";
                    echo "<td>{$description}</td>";
                    echo "<td>
                            <a href='/categorias/editar?id={$id}' class='btn btn-warning btn-sm'>Editar</a>
                            <a href='/categorias/excluir?id={$id}' class='btn btn-danger btn-sm'>Excluir</a>
                        </td>";
                echo '</tr>';
            }
        ?>
    </tbody>
</table>