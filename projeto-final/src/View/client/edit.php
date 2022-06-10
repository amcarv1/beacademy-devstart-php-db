<h1>Editar Clientes</h1>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<form action="" method="post">
    <label for="name">Nome:</label>
    <input  id="name" name="name" value="<?php echo $data['nome']; ?>" type="text" class="form-control" />
    
    <label for="phone">Telefone:</label>
    <input id="phone" name="phone" value="<?php echo $data['telefone']; ?>" class="form-control"> 

    <label for="email">Email:</label>
    <input  id="email" name="email" value="<?php echo $data['email']; ?>" type="text" class="form-control" /> <br> <br>

    <button class="btn btn-primary">Enviar</button>
</form>