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
        <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <script type="text/javascript" src="Js/jquery.min.js"></script>
        <script type="text/javascript" src="Js/bootstrap.min.js"></script>
        <style>
            #form {
             position: relative;
             left: 100px;
            }
           
           
</style>
    </head>
    <body>
        <form id="form" class="form-group" action="../Controlador/loginControlador.php" method="post">
            
            <table>
                <a href="login.php"></a>
                <tr>
                    <td>Usuario</td>
                    <td><input class="form-control" type="text" name="usuario"placeholder="Usuário"></td></tr>
                <td>&nbsp;</td>
                <tr>
                    <td>Senha:</td>
                    <td><input class="form-control" type="password" name="senha"placeholder="Senha"/></td></tr>
                <td>&nbsp;</td>
                <tr><td><input class="btn btn-danger" type="submit" value="ENTRAR"/></td></tr>
            </table>
        </form>
    </body>
</html>
