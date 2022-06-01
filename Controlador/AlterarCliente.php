

<?php
require_once '../Dto/ClienteDTO.php';
require_once '../Conexao/ClienteDao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$dtnasc = $_POST['dtnasc'];
$telefone = $_POST['telefone'];
$sexo = $_POST['sexo'];
$idCliente = $_POST['idCliente'];



$clienteDTO = new ClienteDTO();
$clienteDTO->setNome($nome);
$clienteDTO->setEmail($email);
$clienteDTO->setDtnasc($dtnasc);
$clienteDTO->setTelefone($telefone);
$clienteDTO->setSexo($sexo);
$clienteDTO->setIdCliente($idCliente);


$clienteDAO = new ClienteDao();

$clienteDAO->alterarCliente($clienteDTO);


echo "<script>";
echo" window.location='../Visao/listAllFuncionario.php'";
echo "</script>";


