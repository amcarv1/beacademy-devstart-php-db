<h1>Listar Produtos</h1>

<div class="mb-3 text-end">
    <a href="produtos/relatorio" class="btn btn-outline-primary">Gerar PDF</a>
    <a href="produtos/novos" class="btn btn-dark">Novo Produto</a>
</div>

<table class="table table-hover table-stripped">
    <thead class="table-dark">
        <tr>
            <th>#ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Imagem</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Data de Criação</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while ($product = $data->fetch(\PDO::FETCH_ASSOC)) {
                extract($product);

                echo '<tr>';
                    echo "<td>{$id}</td>";
                    echo "<td>{$name}</td>";
                    echo "<td>{$description}</td>";
                    echo "<td><img width='100px' src='{$photo}' /></td>";
                    echo "<td>R$ {$price}</td>";
                    echo "<td>{$quantity}</td>";
                    echo "<td>{$created_at}</td>";
                    echo "<td>
                            <a href='/produtos/editar?id={$id}' class='btn btn-warning btn-sm'>Editar</a>
                            <a href='/produtos/excluir?id={$id}' class='btn btn-danger btn-sm'>Excluir</a>
                        </td>";
                echo '</tr>';
            }
        ?>
    </tbody>
</table>