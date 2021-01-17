<html>
    <head>
        <meta charset = "utf-8">
        <title>Code Storm</title>
        <link rel = "stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel = "stylesheet" href="../css/style.css">
        <link href = "https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
        <link href = "../img/icon/CodeStormIcone.png" rel="icon">
    </head>
    <body id = "body_home">
    <?php
            include_once("valida-sentinela-cliente.php");
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
                    <div id = "divTelaCadastro">
                      <img id = "perfil" src = "../img/icon/unnamed.png">
                      <h1 id = "EntrarCadastrarTxt">Bem vindo, Cliente<p>
                        <a href="../logout.php" >Sair</p></h1>
                    <br>
                    </div>
                    <div id = "divCarrinho"><a href = "#"><img id = "carrinho" src = "../img/icon/Cart.png"></a></div>
                </div>
            </div>
            <div id = "navDown">
                <img src = "../img/detalhe/moldeNav.png" id="moldeNav">
                <div id = "linkTop">
                <a href = "index-area-restrita-cliente.php" id = "link"><h1 id = "linkTxt">Inicio</h1></a>
                <a href = "#" id = "link"><h1 id = "linkTxt">Destaques</h1></a>
                <a href = "#" id = "link"><h1 id = "linkTxt">Descontos</h1></a>
                <a href = "contato.php" id = "link"><h1 id = "linkTxt">Contato</h1></a>
                </div>
                <div id = "linkDown">
                <a href = "pecas.php" id = "link"><h1 id = "linkTxt2">Peças</h1></a>
                <a href = "perifericos.php" id = "link"><h1 id = "linkTxt2">Periféricos</h1></a>
                <a href = "computador.php" id = "link"><h1 id = "linkTxt2">Computador</h1></a>
                <a href = "notebook.php" id = "link"><h1 id = "linkTxt2">Notebook</h1></a>
                </div>
            </div>
        </header>

        <div id  = "divBannerHome">  
         <img id="bannerHome" src="../img/detalhe/BannerHome.png" alt="banner">
        </div>
            <br><br>
            <div id = "divHr">
                <hr id="hr1">
                <h1 id= "hrTxt">Destaques</h1>
                <hr id="hr2">
            </div>
            <div id="divCards" >
            <div class="card" style="width: 15rem;">
                <img class="card-img-top" src="../img/perifericos/headset/gamer-razer-chroma.png" alt="Card image cap">
                <div class="card-body">
                <br>
                  <p class="card-title" class="titulo">Headset Gamer Razer Chroma</p>
                  <a href="#" class="btn btn-primary">Verificar Produto</a>
                </div>
              </div>
                
              <div class="card" style="width: 15rem;">
                <img class="card-img-top" src="../img/computador/veneno.png" alt="Card image cap">
                <div class="card-body">
                  <p class="card-title" class="titulo">Core i7 9700f GeForce RTX 2070 8gb Super SSD M2 de 240GB</p>
                  <a href="#" class="btn btn-primary">Verificar Produto</a>
                </div>
              </div>
                
              <div class="card" style="width: 15rem;">
                <img class="card-img-top" src="../img/pecas/cpu/ryzen3.png" alt="Card image cap">
                <div class="card-body">
                <br>
                  <p class="card-title" class="titulo">Processador Ryzen 5 </p>
                  <br>
                  <a href="#" class="btn btn-primary">Verificar Produto</a>
                </div>
              </div>
                
              <div class="card" style="width: 15rem; ">
                <img class="card-img-top" src="../img/notebook/acerAspire.png" alt="Card image cap">
                <div class="card-body">
                <br>
                  <p class="card-title" class="titulo">Aspire 3 ryzen 5 12 gb ram</p>
                  <br>
                  <a href="#" class="btn btn-primary">Verificar Produto</a>
                </div>
              </div>
            </div>
            <div id = "divHr">
                <hr id="hr1">
                <h1 id= "hrTxt">Descontos</h1>
                <hr id="hr2">
            </div>
            <div id="divCards" >
                <div class="card" style="width: 15rem;">
                    <img class="card-img-top" src="../img/pecas/placaDeVideo/pny4.png" alt="Card image cap">
                    <div class = "divDesconto">
                    <h1 id = "descontotxt">10% de desconto</h1>
                  </div>
                    <div class="card-body">
                <br>
                      <p class="card-title" class="titulo">Gtx 1050 TI</p>
                      <br>
                      <a href="#" class="btn btn-primary">Verificar Produto</a>
                    </div>
                  </div>
                  <div class="card" style="width: 15rem;">
                    <img class="card-img-top" src="../img/pecas/cooler/ingvarac332.png" alt="Card image cap">
                    <div class = "divDesconto">
                    <h1 id = "descontotxt">15% de desconto</h1>
                  </div>
                    <div class="card-body">
                <br>
                      <p class="card-title" class="titulo">Base ventilada notebook 2 fãs</p>
                      <a href="#" class="btn btn-primary">Verificar Produto</a>
                    </div>
                  </div>
                  <div class="card" style="width: 15rem;">
                    <img class="card-img-top" src="../img/pecas/ram/hyperNot8.png" alt="Card image cap">
                    <div class = "divDesconto">
                    <h1 id = "descontotxt">20% de desconto</h1>
                  </div>
                    <div class="card-body">
                <br>
                      <p class="card-title" class="titulo">Memoria ram hyperX 8GB</p>
                      <br>
                      <a href="#" class="btn btn-primary">Verificar Produto</a>
                    </div>
                  </div>
                  <div class="card" style="width: 15rem; ">
                    <img class="card-img-top" src="../img/perifericos/mouse/gamer-pichau.png" alt="Card image cap">
                    <div class = "divDesconto">
                    <h1 id = "descontotxt">25% de desconto</h1>
                  </div>
                    <div class="card-body">
                <br>
                      <p class="card-title" class="titulo">Mouse Gamer RGB Pichau</p>
                      <br>
                      <a href="#" class="btn btn-primary">Verificar Produto</a>
                    </div>
                  </div>
                </div>
            </div>
                <footer class="footer" id="footer-index">
                <div class="container-foot">
                    <div class="link-footer">
                        <br>
                        <img src="../img/icon/icon-info.png">
                        <a href="">Sobre a</a>
                        <br>
                        <img src="../img/icon/icon-bag.png">
                        <a href="">Trabalhe Conosco</a>
                        <br>
                        <img src="../img/icon/icon-email.png">
                        <a href="../contato.php">Entre em Contato</a>
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
                            <p<br>
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
                            <a href=""><img src="../img/icon/icon-instagram.png"></a>
                            <a href=""><img src="../img/icon/iconfacebook.png"></a>
                        </div>
                    </div>
                </div>
            </footer>
    </body>
</html>