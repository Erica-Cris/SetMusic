<?php

ession_start();

require_once '../Conexao/loginDao.php';

$usuario = $_POST['usuario'];
$senha = md5($_POST['senha']);

$loginDao = new loginDao();
$usuario = $loginDao->login($usuario, $senha);

if (!empty($usuario)) {
    $_SESSION['usuario'] = $usuario['usuario'];
    $_SESSION['perfil'] = $usuario['perfil'];

    switch ($_SESSION['perfil']) {
//  SWITCH PARA LEVAR A CAMINHOS DIFERENTES      
//            case "Administrador": 
//            echo "<script>";
//            echo "window.location='../indexpgADMINISTRADOR.php'";
//            echo "</script>";
//        case "Restrito":
//            echo "<script>";
//            echo "window.location='../indexpgRESTRITO.php'";
//            echo "</script>";
        
        case "Administrador":
            echo "<script>";
            echo "window.location='../index.php'";
            echo "</script>";
        case "Restrito":
            echo "<script>";
            echo "window.location='../index.php'";
            echo "</script>";
    }
} else {
    echo "<script>";
    echo "window.location='../Visao/login.php'";
    echo "</script>";
}

