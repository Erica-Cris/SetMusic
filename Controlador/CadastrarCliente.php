<?php
require_once '../Dto/ClienteDTO.php';
require_once'../Conexao/ClienteDao.php' ;

$nome = $_POST['nome'];
$email = $_POST['email'];
$dtnasc = $_POST['dtnasc'];
$telefone = $_POST['telefone'];
$sexo = $_POST['sexo'];

$clienteDTO = new ClienteDTO();
$clienteDTO->setNome($nome);
$clienteDTO->setEmail($email);
$clienteDTO->setDtnasc($dtnasc);
$clienteDTO->setTelefone($telefone);
$clienteDTO->setSexo($sexo);

$clienteDAO = new ClienteDao;
$clienteDAO->salvar($clienteDTO);


//    $msg = "Cadastro Efetuado com sucesso!!!";
echo "<script>";
echo " window.location='../view/formCadastraCliente.php?mensagem={$msg}';";
echo "</script>";