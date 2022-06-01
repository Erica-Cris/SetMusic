<?php

require_once '../Conexao/ClienteDao.php';

$idCliente = $_GET['idCliente'];


$clienteDAO = new ClienteDao();
$clienteDAO->deleteClienteById($idCliente);

echo "<script>";
echo" window.location='../view/listarCliente.php'";
echo "</script>";
