<?php
require_once '../Conexao/ClienteDao.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../css/estiloform.css" media="all">
        <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <script type="text/javascript" src="Js/jquery.min.js"></script>
        <script type="text/javascript" src="Js/bootstrap.min.js"></script>
        <script type="text/javascript">
        function confirmar(){
            if(confirm("Deseja Excluir o usuario?")){
                return true;
            }else{
                return false;
            }
        }
    </script>
    </head>
    <body>
        <div class="menu">
            <img  src="../imagem/logo.png">
            <a href="../index.php">Voltar</a>

        </div>
        <form action="" method="post" style="margin-top: 100px;">
            <div class="col-xs-2" style="padding-bottom: 3%; top: 10px">
        <input type="text" name="pnome" class="form-control" placeholder="Digite um nome..."/>
            </div>
            <div class="col-xs-2" style="padding-bottom: 3%; top: 10px">
        <input type="submit" value="Pesquisar por nome" class="btn btn-default"/>
            </div>
        </form>
        <br> 
        <?php
        $clienteDAO = new ClienteDao();

        if (!empty($_POST["pnome"])) {
            $clientes = $clienteDAO->getClienteByNome($_POST["pnome"]);
        } else {
            $clientes = $clienteDAO->getAllCliente();
        }


        
        echo "<table class='table table-hover'>";
        echo "  <tr>";
        echo "      <th>Nome</th>";
        echo "      <th>Email</th>";
        echo "      <th>Data de Nascimento</th>";
        echo "      <th>Telefone</th>";
        echo "      <th>Sexo</th>";
        echo "      <th>Excluir</th>";
        echo "      <th>Alterar</th>";
        echo "  <tr>";

        $cont = 0;
        foreach ($clientes as $cliente) {

            $cont++;
            if ($cont % 2 == 0) {
                echo " <tr style='background-color:red;'>";
            } else {
                echo " <tr>";
            }
            echo "  <tr>";
            echo "      <td>", $cliente["nome"], "</td>";
            echo "      <td>", $cliente["email"], "</td>";
            echo "      <td>", $cliente["dtnasc"], "</td>";
            echo "      <td>", $cliente["telefone"], "</td>";
            echo "      <td>", $cliente["sexo"], "</td>";
            echo "<td align='center'><a href='../Controlador/excluirCliente.php?idCliente={$cliente["idCliente"]}'><img src='../Imagens/excluir.jpg' width='30' onClick='return confirmar()'></a></td>";
            echo "<td align='center'><a href='formAlterarCliente.php?idCliente={$cliente["idCliente"]}'><img src='../Imagens/alterar.png' width='30'></a></td>";
           
            echo "  <tr>";
        }
        echo "</table>";
        ?>
    </body>
</html>
