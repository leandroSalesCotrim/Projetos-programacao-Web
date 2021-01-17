<html>
    <head>
        <meta charset = "utf-8">
        <title>Code Storm</title>
        <link rel = "stylesheet" href="../CodeStorm/css/reset.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel = "stylesheet" href="../CodeStorm/css/style.css">
        <link href = "https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
        <link href = "img/icon/CodeStormIcone.png" rel="icon">
    </head>
    <body id = "body_home">
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
                    <div id = "divTelaCadastro"><a href = "../CodeStorm/loginCliente.php"><img id = "perfil" src = "../CodeStorm/img/icon/unnamed.png"><h1 id = "EntrarCadastrarTxt">Entrar | Cadastrar</h1></a></div>
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
        <div class="dropdown">
            <button id="categoria" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Selecione uma categoria
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#caixa-de-som">Caixa de som</a>
                <a class="dropdown-item" href="#headset">Headset</a>
                <a class="dropdown-item" href="#impressora">Impressora</a>
                <a class="dropdown-item" href="#monitor">Monitor</a>
                <a class="dropdown-item" href="#mouse">Mouse</a>
                <a class="dropdown-item" href="#pendrive">Pendrive</a>
                <a class="dropdown-item" href="#teclado">Teclado</a>
                <a class="dropdown-item" href="#webcam">Webcam</a>
            </div>
        </div>
        <section class="caixa-de-som" id="caixa-de-som">
            <div class="linha1">
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/som/bluetooth-gamer-logitech.png" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Caixa de Som Gamer Logitech</h5>
                            <p class="preco"  id="preco">Por: R$2.112,38 <br>ou até 12x de R$176,03 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>

                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/som/gamer-bluetooth-edifier.png" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Caixa de som Gamer G2000</h5>
                            <p class="preco" id="preco">Por R$499,00 <br>ou até 6x R$83,17 sem juros </p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/som/jbl-flip-portatil-bluetooth.png" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Caixa de Som Portátil JBL </h5>
                            <br>
                            <p class="preco"  id="preco">Por: R$699,00 <br>ou até 10x de R$69,90 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="linha2">
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/som/jbl-verde-charge.png" class="card-img-top"  alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Caixa De Som Portátil JBL</h5>
                            <br>
                            <p class="preco"  id="preco">Por: R$499,00 <br>ou até 10x de R$49,90 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>


                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/som/logitech-Z120.png" alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Caixa de Som Logitech Z120 </h5>
                            <p class="preco"  id="preco">Por R$ 170,47 <br>ou até 12x sem juros de R$ 14,21</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/som/philips-lilas-bluetooth.png" alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Caixa De Som Philips</h5>
                            <br>
                            <p class="preco"  id="preco">Por: R$ 199,00 <br>ou até 6x sem juros de R$ 33,17</p>
                            <a href="#" id="comprar" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="headset" id="headset">
        <div class="linha3">
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/headset/bluetooth-jbl.png" alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Headphone Bluetooth JBL</h5>
                            <br>
                            <p class="preco"  id="preco">Por: R$219,00 <br>ou até 3x de R$73,00 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/headset/gamer-nemsis-com-fio.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Headset Gamer Nemesis</h5>
                            <br>
                            <p class="preco"  id="preco">Por: R$99,90 <br>ou até 2x de R$49,95 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/headset/gamer-razer-chroma.png" alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Headset Gamer Razer Kraken</h5>
                            <p class="preco"  id="preco">Por: R$ 1.458,71  <br>ou até 12x de 121,56 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="linha4">
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/headset/gaming-sades.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Headset Gaming Sades</h5>
                            <br>
                            <p class="preco"  id="preco">Por: R$129,99 <br>ou até 2x de R$65,00 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>


                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/headset/usb-gamer-hoopson.png" alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Headset Gamer Hoopson </h5>
                            <br>
                            <p class="preco"  id="preco">Por: R$169,99 <br>ou até 2x de R$85,00 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/headset/usb-gamer-warrior-flamma.png" alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Headset Gamer Warrior </h5>
                            <br>
                            <p class="preco"  id="preco">Por: R$240,90 <br>ou até 2x de R$120,45 sem juros</p>
                            <a href="#" id="comprar" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="impressora" id="impressora">
        <div class="linha5">
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/impressora/multfuncional-smart-tank-hp.png" alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Impressora Multifuncional HP Smart Tank 514</h5>
                            <p class="preco"  id="preco">Por: R$ 999,00 <br>ou até 10x de R$ 99,90 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/impressora/multfuncional-deskjet-hp-2676.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Multifuncional hp Deskjet 2676</h5>
                            <p class="preco"  id="preco">Por: R$ 447,00 <br>ou até 10x de R$ 44,70 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/impressora/multifunciona-ekotank-epson-M2170.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Impressora Multifuncional Epson EcoTank M2170</h5>
                            <p class="preco"  id="preco">Por: R$ 1.999,00 <br>ou até 10x de R$ 199,90 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="linha6">
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/impressora/multifuncional-deskjet-hp.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Impressora Multifuncional DeskJet HP</h5>
                            <p class="preco"  id="preco">Por: R$ 361,00 <br>ou até 10x de R$ 36,10 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>


                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/impressora/Multifuncional-epson-ecotank-L3150.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Impressora Multifuncional Epson EcoTank L3150</h5>
                            <p class="preco"  id="preco">Por: R$ 1.199,00 <br>ou até 10x de R$ 119,90 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/impressora/multifuncional-epson-ecotank-L5190.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Impressora Multifuncional Epson EcoTank L5190</h5>
                            <p class="preco"  id="preco">Por: R$ 1.749,00 <br>ou até 10x de R$ 174,90 sem juros</p>
                            <a href="#" id="comprar" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="monitor" id="monitor">
        <div class="linha7">
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/monitor/led-18-aoc-widescreen.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Monitor LED "18,5” AOC HD Widescreen</h5>
                            <p class="preco"  id="preco">Por: R$ 429,00  <br>ou até 10x de R$ 42,90 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/monitor/led-19-lg-wide.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Monitor LED "19.5” LG Wide</h5>
                            <p class="preco"  id="preco">Por:  R$ 449,00  <br>ou até 10x de R$ 44,90 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/monitor/led-23,8-full-hd-lg.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Monitor para PC LG "23,8” LED IPS- Full HD</h5>
                            <p class="preco"  id="preco">Por: R$ 749,90  <br>ou até 10x de R$ 74,99 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="linha8">
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/monitor/led-full-hd-21,5-lg-widescreen.png"   alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Monitor para PC LG "21,5” LED - Widescreen Full HD</h5>
                            <p class="preco"  id="preco">Por: R$ 599,00 <br>ou até 10x de R$ 59,90 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>


                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/monitor/led-full-hd-21-dell.png"   alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Monitor LED Full HD 21,5” Widescreen Dell</h5>
                            <p class="preco"  id="preco">Por: R$ 1.199,00 <br>ou até 10x de R$ 119,90 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/monitor/led-25-full-hd-lg-ultrawide.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Monitor LED 25” Full HD Ultrawide LG</h5>
                        <p class="preco"  id="preco">Por: R$ 895,00 <br>ou até 10x de R$ 89,50 sem juros</p>
                            <a href="#" id="comprar" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mouse" id="mouse">
        <div class="linha9">
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/mouse/gamer-pichau.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Mouse Gamer RGB Pichau </h5>
                        <br>
                        <p class="preco"  id="preco">Por: R$ 135,80<br>ou até 2x de 67,90 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/mouse/gamer-sensor-optico-killer.png"   alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Mouse Gamer Sensor Óptico Killer</h5>
                        <p class="preco"  id="preco">Por: R$ 110,00<br>ou até 2x de 55,00 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/mouse/multilaser-comfort-usb.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Mouse Multilaser USB Comfort</h5>
                        <p class="preco"  id="preco">Por: R$ 50,54 <br>ou até 2x de 25,27 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="linha10">
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/mouse/multilaser-comfort-usb.png"   alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Mouse Sem Fio Multilaser Laser</h5>
                            <p class="preco"  id="preco">Por: R$ 89,90 <br>ou até 2x de 44,95 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>


                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/mouse/optico-ergonomico-sem-fio-weibo.png"    alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Mouse Optico Vertical Ergonomico Sem Fio</h5>
                            <p class="preco"  id="preco">Por: R$ 67,50 <br>ou até 2x de R$ 33,75 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/mouse/optico-sem-fio-topget.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Mouse Óptico Wireless Sem Fio TopGet</h5>
                            <p class="preco"  id="preco">Por: R$ 49,00 <br>ou até 2x de 24,50 sem juros</p>
                            <a href="#" id="comprar" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pendrive" id="pendrive">
        <div class="linha11">
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/pendrive/kingston-32gb-usb-datatraveler.png"   alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Pen Drive USB Kingston - 32gb</h5>
                        <p class="preco"  id="preco">Por: R$34,97</p>
                        <br>
                        <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/pendrive/kingston-se9-32gb.png"   alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Pen Drive Kingston Se9 - 32gb</h5>
                        <p class="preco"  id="preco">Por: R$65,25<br>ou até 3x de 21,75 sem juros</p>
                        
                        <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/pendrive/multilaser-twist-32gb.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Pen Drive Multilaser Twist - 32GB</h5>
                        <p class="preco"  id="preco">Por: R$ 121,94 <br>ou até 2x de 60,27 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="linha12">
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/pendrive/sandisk-cruzer-fit.png"    alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Pen Drive SanDisk Cruzer Fit 8gb</h5>
                            <p class="preco"  id="preco">Por: R$23,99</p>
                            <br>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>


                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/pendrive/sony.png"     alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Pen Drive 8GB Sony Micro Vault</h5>
                        <p class="preco"  id="preco">Por: R$25,00</p>
                        <br>
                        <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/pendrive/sandisk-ultra-dual.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Pen Drive Sandisk Ultra Dual Drive USB 3.0 32GB </h5>
                            <p class="preco"  id="preco">Por: R$63,90 <br>ou até 2x de 31,95 sem juros</p>
                            <a href="#" id="comprar" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="teclado" id="teclado">
        <div class="linha13">
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/teclados/gamer-semi-mecanico-kp.png"   alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Teclado Gamer Semi Mecânico Led RGB</h5>
                        <p class="preco"  id="preco">Por: R$ 72,50 <br>ou até 2x de 36,25 sem juros</p>
                        <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/teclados/mecanico-gamer-dex.png"   alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Teclado Semi Mecânico Gamer - Dex </h5>
                        <p class="preco"  id="preco">Por: R$ 175,43 <br>ou até 2x de 17,55 sem juros</p>
                        <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/teclados/reddragon-kala-lunar.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Teclado Redragon Kala Lunar Branco</h5>
                        <p class="preco"  id="preco">Por: R$ 379,90 <br>ou até 10x de 37,99 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="linha14">
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/teclados/usb-gamer-iluminado-gamemax.png"     alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Teclado Gamer Iluminado LED USB Gamemax</h5>
                            <p class="preco"  id="preco">Por: R$ 69,90 <br>ou até 2x de R$34,95 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>


                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/teclados/usb-gamer-mymax.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Teclado USB Gamer Mymax </h5>
                        <p class="preco"  id="preco">Por: R$22,90</p>
                        <br>
                        <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/teclados/usb-slim-multilaser.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Teclado Multilaser Padrão Usb Slim </h5>
                        <p class="preco"  id="preco">Por: R$48,95</p>
                        <br>
                        <a href="#" id="comprar" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="webcam" id="webcam">
        <div class="linha13">
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/webcam/cam-full-hd-logitech.png"   alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Câmera Web Cam Full HD c/microfone Logitech</h5>
                        <p class="preco"  id="preco">Por: R$949,99 <br>ou até 10x de  R$ 95,08 sem juros</p>
                        <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/webcam/hp-full-hd.png"   alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Webcam HP Full HD 1080P </h5>
                        <br>
                        <p class="preco"  id="preco">Por: R$1.025,74 <br>ou até 12x de R$85,48 sem juros</p>
                        <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/webcam/logitech-com-microfone.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Webcam Logitech HD 3MP com Microfone Embutido</h5>
                        <p class="preco"  id="preco">Por: R$1.141,19 <br>ou até 12x de R$95,10 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="linha14">
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/webcam/multilaser-nigth-vision-16.0.png"      alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Multilaser WebCam Night Vision</h5>
                            <p class="preco"  id="preco">Por: R$1.205,90 <br>ou até 12x de R$100,49 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>


                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/perifericos/webcam/wi-fi-d-link.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Câmera HD WI-FI D-Link</h5>
                        <p class="preco"  id="preco">Por: R$ 469,00 <br>ou até 3x de R$156,33 sem juros</p>
                        <br>
                        <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            <footer class="footer" id="footer">
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>