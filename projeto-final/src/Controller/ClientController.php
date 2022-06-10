<?php

declare(strict_types=1);

namespace App\Controller;

use App\Controller\AbstractController;
use App\Connection\Connection;

class ClientController extends AbstractController
{
    public function listAction(): void 
    {
        $con = Connection::getConnection();
        $result = $con->prepare('SELECT * FROM tb_client');
        $result->execute();
        
        parent::render('client/list', $result);
    }

    public function addAction(): void 
    {
        if ($_POST) {
            $nome = $_POST['name'];
            $telefone = $_POST['phone'];
            $email = $_POST['email'];

            $query = "INSERT INTO tb_client (nome, telefone, email) VALUES ('{$nome}', '{$telefone}', '{$email}')";
            $con = Connection::getConnection();
            $result = $con->prepare($query);
            $result->execute();
            echo "Cliente cadastrado com sucesso!";
        }
        parent::render('client/add');
    }

    public function removeAction(): void
    {        
        $id = $_GET['id'];

        $con = Connection::getConnection();
        $query = "DELETE FROM tb_client WHERE id = '{$id}'";
        $result = $con->prepare($query);
        $result->execute();
        parent::renderMessage('Cliente excluído com sucesso!');
    }

    public function editAction(): void
    {
        $id = $_GET['id'];

        $con = Connection::getConnection();

        if ($_POST) {
            $nome = $_POST['name'];
            $telefone = $_POST['phone'];
            $email = $_POST['email'];

            $queryUpdate = "UPDATE tb_client 
                      set nome = '{$nome}',
                      telefone = '{$telefone}',
                      email = '{$email}'
                      WHERE id = '{$id}'";

            $con = Connection::getConnection();
            $result = $con->prepare($queryUpdate);
            $result->execute();
            echo "Cliente editado com sucesso!";
        }

        $query = "SELECT * FROM tb_client WHERE id='{$id}'";
        $result = $con->prepare($query);
        $result->execute();
        $data = $result->fetch(\PDO::FETCH_ASSOC);
        parent::render('client/edit', $data);  
    }
}