
<html>
    <head>
        <meta charset = "utf-8">
        <title>Code Storm</title>
        <link rel = "stylesheet" href="../CodeStorm/css/reset.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel = "stylesheet" href="../CodeStorm/css/style.css">
        <link href = "https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
        <link href = "../CodeStorm/img/icon/CodeStormIcone.png" rel="icon">
    </head>
    <body id = "body_home">
        <div class="tudo">
        <header id = "nav">
            <div id = "navTop">
                <div id = "divLogo"><img src = "../CodeStorm/img/icon/CodeStormLogo.png" id = "logo"></div>
                <div class="barra-pesquisa">
                    <form class="form-inline my-0 my-lg-0">
                      <input type="search" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Escreva aqui o que deseja buscar em nossa loja ♥">
                    <button type="submit" class="btn-sm btn-primary" id="btn-index-pesquisa">Pesquisar</button>
                    </form>
                </div>
                <div id = "divIcones">
                    <div id = "divTelaCadastro"><a href = "../CodeStorm/loginCliente.php"><img id = "perfil" src = "../CodeStorm/img/icon/unnamed.png"><h1 id = "EntrarCadastrarTxt">Entrar | Cadastrar</h1></a></div>
                    <div id = "divCarrinho"><a href = "#"><img id = "carrinho" src = "../CodeStorm/img/icon/Cart.png"></a></div>
                </div>
            </div>
            <div id = "navDown">
                <img src = "../CodeStorm/img/detalhe/moldeNav.png" id="moldeNav">
                <div id = "linkTop">
                <a href = "index.php" id = "link"><h1 id = "linkTxt">Inicio</h1></a>
                <a href = "catalogo.php" id = "link"><h1 id = "linkTxt">Catálogo</h1></a>
                <a href = "#" id = "link"><h1 id = "linkTxt">Descontos</h1></a>
                <a href = "../CodeStorm/contato.php" id = "link"><h1 id = "linkTxt">Contato</h1></a>
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
         <img id="bannerHome" src="../CodeStorm/img/detalhe/BannerHome.png" alt="banner">
        </div>
            <br><br>
            <div id = "divHr">
                <hr id="hr1">
                <h1 id= "hrTxt">Destaques</h1>
                <hr id="hr2">
            </div>
            <div id="divCards" >
            <div class="card" style="width: 15rem;">
                <div class="flip-card">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <img src="../CodeStorm/img/perifericos/headset/gamer-razer-chroma.png" alt="Card image cap" style="width: 15rem;">
                    </div>
                    <div class="flip-card-back">
                        <div class="flip-text-card-one">
                            <h1>R$ 1199,90</h1> 
                        </div>
                        <div class="flip-img-card">
                            <img src="../CodeStorm/img/perifericos/headset/gamer-razer-chroma.png" alt="Card image cap" style="width: 15rem;">
                        </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                <br>
                  <p class="card-title" class="titulo">Headset Gamer Razer Chroma</p>
                  <a href="../CodeStorm/telas-produtos/periferico/headphonehazer.php" class="btn btn-primary">Verificar Produto</a>
                </div>
              </div>
                
              <div class="card" style="width: 15rem;">
                <div class="flip-card">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <img style="width: 15rem;" src="../CodeStorm/img/computador/veneno.png" alt="Card image cap">
                    </div>
                    <div class="flip-card-back">
                        <div class="flip-img-card">
                            <img style="width: 15rem;" src="../CodeStorm/img/computador/venenoHover.png" alt="Card image cap">
                        </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <p class="card-title" class="titulo">Core i7 9700f GeForce RTX 2070 8gb Super SSD M2 de 240GB</p>
                  <a href="../CodeStorm/telas-produtos/computador/pcVeneno.php" class="btn btn-primary">Verificar Produto</a>
                </div>
              </div>
                
              <div class="card" style="width: 15rem;">
                <div class="flip-card">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <img style="width: 15rem;" src="../CodeStorm/img/pecas/cpu/ryzen5.png" alt="Card image cap">
                    </div>
                    <div class="flip-card-back">
                        <div class="flip-img-card">
                            <img style="width: 15rem;" src="../CodeStorm/img/pecas/cpu/ryzen5Hover.png" alt="Card image cap">
                        </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                <br>
                  <p class="card-title" class="titulo">Processador Ryzen 5 </p>
                  <br>
                  <a href="../CodeStorm/telas-produtos/peca/cpuamd5.php" class="btn btn-primary">Verificar Produto</a>
                </div>
              </div>
                
              <div class="card" style="width: 15rem; ">
                <div class="flip-card">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <img style="width: 15rem;" src="../CodeStorm/img/notebook/acerAspire.png" alt="Card image cap">
                    </div>
                    <div class="flip-card-back">
                        <div class="flip-img-card">
                            <img style="width: 15rem;" src="../CodeStorm/img/notebook/acerAspireHover.png" alt="Card image cap">
                        </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                <br>
                  <p class="card-title" class="titulo">Aspire 3 ryzen 5 12 gb ram</p>
                  <br>
                  <a href="../CodeStorm/telas-produtos/notebook/noteAcerAspire.php" class="btn btn-primary">Verificar Produto</a>
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
                <div class="flip-card">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <img style="width: 15rem;" src="../CodeStorm/img/pecas/placaDeVideo/pny4.png" alt="Card image cap">
                    </div>
                    <div class="flip-card-back">
                        <div class="flip-img-card">
                            <img style="width: 15rem;" src="../CodeStorm/img/pecas/placaDeVideo/pny4Hover.png" alt="Card image cap">
                        </div>
                    </div>
                  </div>
                </div>
                    <div class = "divDesconto">
                    <h1 id = "descontotxt">10% de desconto</h1>
                  </div>
                    <div class="card-body">
                <br>
                      <p class="card-title" class="titulo">Gtx 1050 TI</p>
                      <br>
                      <a href="../CodeStorm/telas-produtos/peca/pdvPny.php" class="btn btn-primary">Verificar Produto</a>
                    </div>
                  </div>
                  <div class="card" style="width: 15rem;">
                <div class="flip-card">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <img style="width: 15rem;" src="../CodeStorm/img/pecas/cooler/ingvarac332.png" alt="Card image cap">
                    </div>
                    <div class="flip-card-back">
                        <div class="flip-img-card">
                            <img style="width: 15rem;" src="../CodeStorm/img/pecas/cooler/ingvarac332Hover.png" alt="Card image cap">
                        </div>
                    </div>
                  </div>
                </div>
                    <div class = "divDesconto">
                    <h1 id = "descontotxt">15% de desconto</h1>
                  </div>
                    <div class="card-body">
                <br>
                      <p class="card-title" class="titulo">Base ventilada notebook 2 fãs</p>
                      <a href="../CodeStorm/telas-produtos/peca/coolerIngvarac.php" class="btn btn-primary">Verificar Produto</a>
                    </div>
                  </div>
                  <div class="card" style="width: 15rem;">
                <div class="flip-card">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <img style="width: 15rem;" src="../CodeStorm/img/pecas/ram/hyperNot8.png" alt="Card image cap">
                    </div>
                    <div class="flip-card-back">
                        <div class="flip-text-card-one">
                            <h1>R$ 426,90</h1> 
                        </div>
                        <div class="flip-img-card">
                            <img style="width: 15rem;" src="../CodeStorm/img/pecas/ram/hyperNot8.png" alt="Card image cap">
                        </div>
                    </div>
                  </div>
                </div>
                    <div class = "divDesconto">
                    <h1 id = "descontotxt">20% de desconto</h1>
                  </div>
                    <div class="card-body">
                <br>
                      <p class="card-title" class="titulo">Memoria ram hyperX 8GB</p>
                      <br>
                      <a href="" class="btn btn-primary">Verificar Produto</a>
                    </div>
                  </div>
                  <div class="card" style="width: 15rem; ">
                                    <div class="flip-card">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <img style="width: 15rem;" src="../CodeStorm/img/perifericos/mouse/gamer-pichau.png" alt="Card image cap">
                    </div>
                    <div class="flip-card-back">
                        <div class="flip-text-card-one">
                            <h1>R$ 129,90</h1> 
                        </div>
                        <div class="flip-img-card">
                            <img style="width: 15rem;" src="../CodeStorm/img/perifericos/mouse/gamer-pichau.png" alt="Card image cap">
                        </div>
                    </div>
                  </div>
                </div>

                    <div class = "divDesconto">
                    <h1 id = "descontotxt">25% de desconto</h1>
                  </div>
                    <div class="card-body">
                <br>
                      <p class="card-title" class="titulo">Mouse Gamer RGB Pichau</p>
                      <br>
                      <a href="../CodeStorm/telas-produtos/periferico/mousepichau.php" class="btn btn-primary">Verificar Produto</a>
                    </div>
                  </div>
                </div>
            </div>
                <footer class="footer" id="footer-index">
                <div class="container-foot">
                    <div class="link-footer">
                        <br>
                        <img src="../CodeStorm/img/icon/icon-info.png">
                        <a href="">Sobre a CodeStorm</a>
                        <br>
                        <img src="../CodeStorm/img/icon/icon-bag.png">
                        <a href="">Trabalhe Conosco</a>
                        <br>
                        <img src="../CodeStorm/img/icon/icon-email.png">
                        <a href="../CodeStorm/contato.php">Entre em Contato</a>
                        <br>
                        <img src="../CodeStorm/img/icon/icon-eyeoff.png">
                        <a href="">Política de Privacidade</a>
                        <br>
                        <img src="../CodeStorm/img/icon/icon-change.png">
                        <a href="">Troca e Devolução</a>
                        <br>
                        <img src="../CodeStorm/img/icon/carroFrete.png">
                        <a href="">Frete e Envio</a>
                    </div>
                    <div class="endereco-footer">
                        <div class="iconmap">
                            <img src="../CodeStorm/img/icon/icon-map.png">
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
                            <a href=""><img src="../CodeStorm/img/icon/icon-twitter.png"></a>
                            <a href=""><img src="../CodeStorm/img/icon/icon-youtube.png"></a>
                            <a href=""><img src="../CodeStorm/img/icon/icon-instagram.png"></a>
                            <a href=""><img src="../CodeStorm/img/icon/iconfacebook.png"></a>
                        </div>
                    </div>
                </div>
            </footer>
    </body>
</html>