
<html>
    <head>
            <meta charset = "utf-8">
            <title>Login</title>
            <link rel = "stylesheet" href="../CodeStorm/css/reset.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
            <link rel = "stylesheet" href="../CodeStorm/css/style.css">
            <link href = "https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
            <link href = "../CodeStorm/img/icon/CodeStormIcone.png" rel="icon">
    </head>
    <body>
        <header id = "nav">
            <div id = "navTop">
                <div id = "divLogo"><img src = "../CodeStorm/img/icon/CodeStormLogo.png" id = "logo"></div>
                <div class="barra-pesquisa">
                    <form class="form-inline my-0 my-lg-0">
                      <input type="search" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Escreva aqui o que deseja buscar em nossa loja ♥">
                    <button type="submit" class="btn-sm btn-primary "id="btn-index-pesquisa">Pesquisar</button>
                    </form>
                </div>
                <div id = "divIcones">
                    <div id = "divTelaCadastro"><a href = "#"><img id = "perfil" src = "../CodeStorm/img/icon/unnamed.png"><h1 id = "EntrarCadastrarTxt">Entrar | Cadastrar</h1></a></div>
                    <div id = "divCarrinho"><a href = "#"><img id = "carrinho" src = "../CodeStorm/img/icon/Cart.png"></a></div>
                </div>
            </div>
            <div id = "navDown">
                <img src = "../CodeStorm/img/detalhe/moldeNav.png" id="moldeNav">
                <div id = "linkTop">
                <a href = "index.php" id = "link"><h1 id = "linkTxt">Inicio</h1></a>
                <a href = "#" id = "link"><h1 id = "linkTxt">Destaques</h1></a>
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

        <div class="corpo">
            <div class="detalhe">
                <div class="imgDetalhe">
                    <img class="imgD"src="../CodeStorm/img/detalhe/detalheE.png">
                </div>
                <div class="meioDetalhe">
                    <h4 class="meioDetalhetTxt">LOGIN</h4>
                </div>
                <div class="imgDetalhe2">
                    <img class="imgD"src="../CodeStorm/img/detalhe/detalheD.png">
                </div>
            </div>
            <h2>ACESSE SUA CONTA</h2>
            <div class="containerLogin">
                <div class="formLogin">
                    <form class="tamanhoLogin" action="valida-login.php" method="post">
                    <h5>LOGIN</h5>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="txtlogin" placeholder="meuemail@email.com">
                      </div>
                      <div class="form-group">
                        <label>Senha</label>
                        <input type="password" class="form-control" name="txtsenha" placeholder="********">
                        <small class="form-text text-muted">Não compartilhe seu e-mail e senha com ninguém.</small>
                        <br>
                      </div>
                      <button type="submit" class="btn btn-primary" value = "Acessar">Acessar</button>
                    </form>
                </div>
                <div class="espacoLogin">
                    <hr>
                </div>
                <div class="formEmail">
                    <form class="tamanhoLogin" action="cadastroCliente.php">
                    <h5>CADASTRO</h5>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="meuemail@email.com">
                          <small class="form-text text-muted">Não compartilhe seu e-mail com ninguém.</small>
                      </div>
                      <br>
                      <a href="cadastroCliente.php"><button type="submit" class="btn btn-primary">Enviar</button></a>
                    </form>
                </div>
                <div class="loginRedeSocial">
                    <p>Entre com sua rede social</p>
                    <center>
                        <img src="../CodeStorm/img/icon/icongoogle.png">
                        <img src="../CodeStorm/img/icon/iconfacebook.png">
                    </center>
                </div>
            </div>
            <hr>
            <footer class="footer">
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
        </div>
    </body>
</html>