<html lang="pt-br">
    <head>
    <meta charset = "utf-8">
        <title>Code Storm</title>
        <link rel = "stylesheet" href="../../CodeStorm/css/reset.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel = "stylesheet" href="../../CodeStorm/css/style.css">
        <link href = "https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
        <link href = "../../CodeStorm/img/icon/CodeStormIcone.png" rel="icon">
        <?php require_once 'global.php' ?>
        <?php
            try {
                $produto = new Produto();
                $lista = $produto->listar();
            } catch(Exception $e) {
                echo '<pre>';
                    print_r($e);
                echo '</pre>';
                echo $e->getMessage();
            }
        ?>
    </head>
    
    <body>
    <?php
            include_once("valida-sentinela-adm.php");
        ?>
        <div class="tudo">
        <header id = "nav">
            <div id = "navTop">
                <div id = "divLogo"><img src = "../img/icon/CodeStormLogo.png" id = "logo"></div>
                <div class="barra-pesquisa">
                    <form class="form-inline my-0 my-lg-0">
                      <input type="search" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Escreva aqui o que deseja buscar em nossa loja ♥">
                    <button type="submit" class="btn-sm btn-primary" id="btn-index-pesquisa">Pesquisar</button>
                    </form>
                </div>
                <div id = "divIcones">
                    <div id = "divTelaCadastro"><img id = "perfil" src = "../img/icon/unnamed.png">
                    <h1 id = "EntrarCadastrarTxt">Administrador<p>
                        <a href="../logout.php" >Sair</p></h1>
                    </div>
                    <div id = "divCarrinho"><a href = "#"><img id = "carrinho" src = "../img/icon/Cart.png"></a></div>
                </div>
            </div>
            <div id = "navDown">
                <img src = "../img/detalhe/moldeNav.png" id="moldeNav">
                <div id = "linkTop">
                <a href = "index-area-restrita-adm.php" id = "link"><h1 id = "linkTxt">Inicio</h1></a>
                <a href = "lista-clientes.php" id = "link"><h1 id = "linkTxt">Clientes</h1></a>
                <a href = "form-cadastro-produto.php" id = "link"><h1 id = "linkTxt">Produtos</h1></a>
                <a href = "catalogo-adm.php" id = "link"><h1 id = "linkTxt">Catálogo</h1></a>
                </div>
                <div id = "linkDown">
                <a href = "../pecas.php" id = "link"><h1 id = "linkTxt2">Peças</h1></a>
                <a href = "../perifericos.php" id = "link"><h1 id = "linkTxt2">Periféricos</h1></a>
                <a href = "../computador.php" id = "link"><h1 id = "linkTxt2">Computador</h1></a>
                <a href = "../notebook.php" id = "link"><h1 id = "linkTxt2">Notebook</h1></a>
                </div>
            </div>
        </header>
        
        <div class="corpo">
            <div class="detalhe">
                <div class="imgDetalhe">
                    <img class="imgD"src="../img/detalhe/detalheE.png">
                </div>
                <div class="meioDetalhe">
                    <h4 class="meioDetalhetTxt">CADASTRAR PRODUTOS</h4>
                </div>
                <div class="imgDetalhe2">
                    <img class="imgD"src="../img/detalhe/detalheD.png">
                </div>
            </div>
            <br>
            <br>
                <center>
                <form name='cadastro-produtos' enctype="multipart/form-data" 
                      action='cadastrar-produto.php' method='post'>
                    <div class="form-group">
                        <label for="exampleFormControlInput1" class="name_produto">Nome do Produto</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name='txtdesc'>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1" class="name_produto">Valor do Produto</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"name='txtvalor'>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1" class="name_produto">Quantidade em Estoque</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name='txtqtde'>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1" class="name_produto">Selecione a Imagem do Produto</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1"  name="foto" accept="image/*">
                     </div>
                     <br>
                     <br>
                     <button type="submit" id="btn_produto" class="btn btn-primary">Cadastrar Produto</button>
            </form>
            
                        
                </center>


                <br>
                <br>
                <br>
               
            
            <footer class="footer" id="footer">
                
                <div class="container-foot">
                    <div class="link-footer">
                        <br>
                        <img src="../img/icon/icon-info.png">
                        <a href="">Sobre a CodeStorm</a>
                        <br>
                        <img src="../img/icon/icon-bag.png">
                        <a href="">Trabalhe Conosco</a>
                        <br>
                        <img src="../img/icon/icon-email.png">
                        <a href="../CodeStorm/contato.php">Entre em Contato</a>
                        <br>
                        <img src="../img/icon/icon-eyeoff.png">
                        <a href="">Política de Privacidade</a>
                        <br>
                        <img src="../img/icon/icon-change.png">
                        <a href="">Troca e Devolução</a>
                        <br>
                        <img src="../img/icon/carroFrete.png">
                        <a href="">Frete e Envio</a>
                    </div>
                    <div class="endereco-footer">
                        <div class="iconmap">
                            <img src="../img/icon/icon-map.png">
                        </div>
                        <div class="text-endereco">
                            <p>CodeStorm<br>
                            R. Júlio Guetardilho, 90<br>
                            Próx. Praça do Lazaro - Candeias - Vila América, SP<br>
                            Seg. à sex. 10h - 16h. Sáb. 10h - 16h
                            </p>
                        </div>
                    </div>
                    
                    <div class="social-footer">
                        <div class="cont-img-social">
                            <a href=""><img src="../img/icon/icon-twitter.png"></a>
                            <a href=""><img src="../img/icon/icon-youtube.png"></a>
                            <a href=""><img src="../img/icon/iconfacebook.png"></a>
                            <a href=""><img src="../img/icon/icon-instagram.png"></a>
                        </div>
                    </div>
                </div>
            </footer>
            
    </body>
</html>  