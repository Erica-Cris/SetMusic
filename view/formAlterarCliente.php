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
        <style type="text/css">
            .error{
                color: red;
                font-style: italic;
            }
        </style>
    </head>
    <body>
        <?php
        $idCliente = $_GET["idCliente"];

        $clienteDao = new ClienteDao();
        $cliente = $clienteDao->getClienteById($idCliente);
        
        ?>
        <fieldset style="margin-top:100px">
            <legend style="font-size: 30px;">Formulário de cadastro</legend>
            <form class="form-horizontal" method="POST" action="../Controlador/AlterarCliente.php">
                <input type="hidden" name="idCliente" value="<?php echo $cliente["idCliente"] ?>"/>

                <table>  
                    <tr>
                        <td>Nome</td>
                        <td><input  name="nome"type="text"
                                    placeholder="Nome Completo" value="<?php echo $cliente["nome"] ?>"></td> </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email"
                                   placeholder="E-mail" value="<?php echo $cliente["email"] ?>"></td></tr>
                    <tr>
                        <td>Data de Nascimento</td>
                        <td><input type="date"  name="dtnasc"value="<?php echo $cliente["dtnasc"] ?>"></td>
                    </tr>
                    <tr>
                        <td>Telefone</td>
                        <td><input type="telefone" id="telefone" name="telefone"value="<?php echo $cliente["telefone"] ?>"></td>
                    </tr>
                    <td>Sexo:</td>
                    <td>
                        <input type="radio" value="M" name="sexo"value="<?php echo $cliente["sexo"] ?>"/> Masculino
                        <input type="radio" value="F" name="sexo"value="<?php echo $cliente["sexo"] ?>"/> Feminino 
                    </td>

                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" value="Alterar"/></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="button" value="Cancelar"/></td>
                    </tr>
                </table>
            </form>
        </fieldset>

    </body>
</html>
