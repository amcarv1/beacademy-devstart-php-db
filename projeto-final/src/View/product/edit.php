<h1>Editar Produto</h1>

<?php 

    extract($data);

?>

<form action="" method="post">

    <label for="name">Nome:</label>
    <input  id="name" name="name" value="<?php echo $product['name']; ?>" type="text" class="form-control mb-3" />
    
    <label for="description">Descrição:</label>
    <input id="description" name="description" value="<?php echo $product['description']; ?>" class="form-control  mb-3"> 

    <label for="price">Preço:</label>
    <input  id="price" name="price" value="<?php echo $product['price']; ?>" type="text" class="form-control mb-3" /> 

    <label for="quantity">Quantidade:</label>
    <input id="quantity" name="quantity" value="<?php echo $product['quantity']; ?>" class="form-control  mb-3"> 

    <label for="photo">Foto:</label>
    <input  id="photo" name="photo" type="text" value="<?php echo $product['photo']; ?>" class="form-control mb-3" />

    <button class="btn btn-primary">Enviar</button>
</form>