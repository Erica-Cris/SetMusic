<!DOCTYPE html>
<!--Você pode mudar a cor do menu se quiser, eu mudei pra testar.-->
<!--Eu vou fazer a logo e te mando depois-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css" media="all">
        <link rel="stylesheet" type="text/css" href="css/modal.css" media="all">
        <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <script type="text/javascript" src="Js/jquery.min.js"></script>
        <script type="text/javascript" src="Js/bootstrap.min.js"></script>

    </head>
    <body>
        <!-- Menu -->

        <div class="menu">
            <img src="imagem/logo.png">
            <a href="view/formCadastraCliente.php" >Inscrever-se</a>
            <a  id="myBtn">Entrar</a>
        </div>
        <div class="pagina">
            <div class="modal fade" id="myModal" style="margin-top: 85px;">
                <div class="modal-dialog">

                    <!-- Modal cONTEUDO-->
                    <div class="modal-content">
                        <div class="modal-logo" >
                            <button type="button" class="close" data-dismiss="modal" style="color: white;padding: 10px;">&times;</button>
                        <img  src="imagem/logo.png">
                        <p1 class="glyphicon glyphicon-lock">Login</p1>
                        </div>
<div class="modal-body" style="padding:40px 50px;">
          <!--formulario-->
       <?php
            include 'View/login.php';
               ?>
</div>

                    </div>

                </div>
            </div> 


        </div>


        <!-- Slide -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicadores -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <a href="view/formCadastraCliente.php"><img src="imagem/img1.jpg"></a>
                </div>
                <div class="item">
                    <a> <img src="imagem/img2.jpg"></a>
                </div>
                <div class="item">
                    <a href="view/artistas.php"><img src="imagem/img3.jpg"></a>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!--Categorias-->
        <div style="background-color: #EEEEE0; padding-bottom: 3%;">
            <div class="container" style="background-color: #EEEEE0; padding-bottom: 6%;">
                <h1 id="categorias">Categorias</h1>
                <div class="row">
                    <div class="col-md-4">
                        <a href="#">
                            <img class="img-thumbnail" width="470px" height="320px" src="imagem/solo.jpg">
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="#">
                            <img class="img-thumbnail" width="470px" height="320px"  src="imagem/banda.jpg">
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="#">
                            <img class="img-thumbnail" width="470px" height="320px" src="imagem/instrumentistas.jpg">
                        </a>
                    </div>
                </div>                     
            </div>
        </div>

        <!-- Artistas -->
        <div>
            <div><h1 id="artistas">Destaque</h1></div>
            <div class="container" style="padding-bottom: 10%;">   
                <div class="col-lg-4">
                    <a href="#"> 
                        <img id="imagem" width="350px" height="220px" src="imagem/am.jpg">
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="#"> 
                        <img id="imagem" width="350px" height="220px" src="imagem/lana .jpg">
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="#"> 
                        <img id="imagem" width="350px" height="220px" src="imagem/marina.jpg">
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="#"> 
                        <img id="imagem" width="350px" height="220px" src="imagem/tdcc.jpg">
                    </a>
                </div><!--
                -->            <div class="col-lg-4">
                    <a href="#"> 
                        <img id="imagem" width="350px" height="220px" src="imagem/tame.jpg">
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="#"> 
                        <img id="imagem" width="350px" height="220px" src="imagem/mel.jpg">
                    </a>
                </div>
            </div>
        </div>

        <!--Inscrever para obter conteúdo-->
        <div class="inscrever_cont">
            <h2>Inscreva-se para obter conteúdo exclusivo.</h2>
            <div id="divInsc">
                <input type="text" id="txtInsc" placeholder="Digite um email..."/>
                <button id="btnInsc">Inscrever</button>
            </div>
        </div>


        <!-- rodape -->
        <div class="rodape"> RODAPE</div>

        <script>
            $(document).ready(function () {
                $("#myBtn").click(function () {
                    $("#myModal").modal();
                });
            });
        </script>

    </body>
</html>
