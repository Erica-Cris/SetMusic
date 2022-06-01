<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../css/estiloform.css" media="all">
        <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <script type="text/javascript" src="Js/jquery.min.js"></script>
        <script type="text/javascript" src="Js/bootstrap.min.js"></script>
<!--         <style type="text/css">
            .error{
                color: black;
                font-style: italic;
            }
        </style>-->
        <script>
        function mensagem(){
            alert("Cadastro Efetuado com sucesso!!!");
            
        }</script>
    </head>
    <body>

        <div class="menu">
            <img src="../imagem/logo.png">
            <a href="../index.php">Voltar</a>

        </div>

        <fieldset style="margin-top:100px">
            <legend style="font-size: 30px;">Formulário de cadastro</legend>
            <form class="form-horizontal" method="POST" action="../Controlador/CadastrarCliente.php">
                <table  >  
                    <tr>
                        <td>Nome</td>
                        <td><input id="nome" name="nome"
                                   type="text" placeholder="Nome Completo"></td> </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" id="email" name="email" placeholder="E-mail"></td></tr>
                    <tr>
                        <td>Data de Nascimento</td>
                        <td><input type="date"  name="dtnasc"></td>
                    </tr>
                    <tr>
                        <td>Telefone</td>
                        <td><input type="telefone" id="telefone" name="telefone"></td>
                    </tr>
                     <td>Sexo:</td>
                    <td>
                        <input type="radio" value="M" name="sexo"/> Masculino
                       <input type="radio" value="F" name="sexo"/> Feminino 
                    </td>


                 <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" onclick="mensagem()" value="Cadastrar"/></td>
                </tr>
                 <tr>
                    <td>&nbsp;</td>
                    <td><a href="listarCliente.php"><input type="button" value="Visualizar cadastro"/></a></td>
                </tr>
<!--                <tr>
                    <td colspan="2">
                      //?php
//                       
//                        if(!empty($_GET['mensagem'])){
//                            echo "<p class='error'>".$_GET['mensagem']."</p>";
//                        }
                      ?>
                    </td>
                </tr>-->
                    
                </table>
            </form>
        </fieldset>
        
        
    </body>
</html>
