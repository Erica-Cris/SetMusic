<?php

require_once 'Conexao.php';

class ClienteDao {

    public function salvar(ClienteDTO $clientedto) {  /*Salvar*/
        try {
            $pdo = Conexao::getInstance();
            $sql = "INSERT INTO cliente(nome,email,dtnasc,telefone,sexo)
                    VALUES(?,?,?,?,?)";
            $stmt = $pdo->prepare($sql);
            
            
            $stmt->bindValue(1, $clientedto->getNome());
            $stmt->bindValue(2, $clientedto->getEmail());
            $stmt->bindValue(3, $clientedto->getDtnasc());
            $stmt->bindValue(4, $clientedto->getTelefone());
            $stmt->bindValue(5, $clientedto->getSexo());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }


public function getAllCliente() {  /*listar*/
        try {
            $pdo = Conexao::getInstance();
            $sql="SELECT * FROM cliente";  /*tabela banco de dados*/
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $clientes;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }


public function getClienteByNome($nome){ /*selecionar*/
        try{
            $pdo = Conexao::getInstance();
            $sql = "SELECT * FROM cliente WHERE nome LIKE ?";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1,"%".$nome."%");
            $stmt->execute();
            $cliente = $stmt->fetchAll();
            return $cliente;
                    
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
     
    public function deleteClienteById($idCliente){ /*deletar*/
        try{
            $pdo = Conexao::getInstance();
            $sql = "DELETE FROM cliente WHERE idCliente = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $idCliente);
            $stmt->execute();
        } catch (PDOException $exc) {
             echo $exc->getMessage();
        }
    }
   
     public function getClienteById($idCliente){  /*selecionar pelo id*/
        try{
            $pdo = Conexao::getInstance();
            $sql = "SELECT * FROM cliente WHERE idCliente = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $idCliente);
            $stmt->execute();
            $cliente = $stmt->fetch();
            return $cliente;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    
       public function alterarCliente(ClienteDTO $ClienteDTO) {  /*alterar*/
        try {$pdo = Conexao::getInstance();
            $sql = "UPDATE cliente SET
                     nome=?, email=?, 
                     dtnasc=?,
                     telefone=?, 
                     sexo=? 
                     WHERE idCliente = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $ClienteDTO->getNome());
            $stmt->bindValue(2, $ClienteDTO->getEmail());
            $stmt->bindValue(3, $ClienteDTO->getDtnasc());
            $stmt->bindValue(4, $ClienteDTO->getTelefone());
            $stmt->bindValue(5, $ClienteDTO->getSexo());
            $stmt->bindValue(6, $ClienteDTO->getIdCliente());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

   } 