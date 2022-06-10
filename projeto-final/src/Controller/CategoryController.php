<?php

declare(strict_types=1);

namespace App\Controller;

use App\Controller\AbstractController;
use App\Connection\Connection;

class CategoryController extends AbstractController
{
    public function listAction(): void 
    {
        $con = Connection::getConnection();
        $result = $con->prepare('SELECT * FROM tb_category');
        $result->execute();
        
        parent::render('category/list', $result);
    }

    public function addAction(): void 
    {
        if ($_POST) {
            $name = $_POST['name'];
            $description = $_POST['description'];

            $query = "INSERT INTO tb_category (name, description) VALUES ('{$name}', '{$description}')";
            $con = Connection::getConnection();
            $result = $con->prepare($query);
            $result->execute();
            echo "Categoria cadastrada com sucesso!";
        }
        parent::render('category/add');
    }

    public function removeAction(): void
    {        
        $id = $_GET['id'];

        $con = Connection::getConnection();
        $query = "DELETE FROM tb_category WHERE id = '{$id}'";
        $result = $con->prepare($query);
        $result->execute();
        parent::renderMessage('Categoria excluída com sucesso!');
    }

    public function editAction(): void
    {
        $id = $_GET['id'];

        $con = Connection::getConnection();

        if ($_POST) {
            $name = $_POST['name'];
            $description = $_POST['description'];

            $queryUpdate = "UPDATE tb_category 
                      set name = '{$name}',
                      description = '{$description}'
                      WHERE id = '{$id}'";

            $con = Connection::getConnection();
            $result = $con->prepare($queryUpdate);
            $result->execute();
            echo "Categoria editada com sucesso!";
        }

        $query = "SELECT * FROM tb_category WHERE id='{$id}'";
        $result = $con->prepare($query);
        $result->execute();
        $data = $result->fetch(\PDO::FETCH_ASSOC);
        parent::render('category/edit', $data);  
    }



}