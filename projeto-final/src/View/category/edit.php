<h1>Editar categoria</h1>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<form action="" method="post">
    <label for="name">Nome:</label>
    <input id="name" name="name" value="<?php echo $data['name']; ?>" type="text" class="form-control" /> <br> <br>

    <label for="description">Descrição:</label>
    <textarea id="description" name="description" value="<?php echo $data['description']; ?>"class="form-control"></textarea>

    <button class="btn btn-primary">Enviar</button>
</form>