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
                <a class="dropdown-item" href="#cooler">Cooler</a>
                <a class="dropdown-item" href="#hd">HD</a>
                <a class="dropdown-item" href="#placa-mae">Placa Mãe</a>
                <a class="dropdown-item" href="#placa-de-video">Placa de Vídeo</a>
                <a class="dropdown-item" href="#processador">Processador</a>
                <a class="dropdown-item" href="#memoria-ram">Memória RAM</a>
                <a class="dropdown-item" href="#ssd">SSD</a>
            </div>
        </div>
        <section class="cooler" id="cooler">
            <div class="linha1">
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/cooler/ingvarac332.png" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Warrior AC332 Ingvar Gamer LED </h5>
                            <p class="preco"  id="preco">Por: R$ 144,90 <br>ou até 4x de R$ 36,23 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>

                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/cooler/multilaserac06.png" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Power Cooler Gamer Led - Multilaser </h5>
                            <p class="preco" id="preco">Por R$ 104,99 <br>ou até 3x R$ 35,00 sem juros </p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/cooler/mymax.png" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Cooler Mymax Processador Intel Socket</h5>
                            <p class="preco"  id="preco">Por: R$ 40,00 <br>ou até 10x de R$2 0,00 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="linha2">
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/cooler/segotep.png" class="card-img-top"  alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Cooler Fan Gamer Lighting RGB 12 Segotep</h5>
                            <p class="preco"  id="preco">Por: R$ 67,75 <br>ou até 2x de R$ 33,88 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>


                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/cooler/hyper.png" alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Cooler Master Hyper Intel/AMD </h5>
                            <p class="preco"  id="preco">Por R$ 194,90 <br>ou até 6x sem juros de R$ 32,48</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/cooler/gamemax.png" alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Cooler Gabinete Gamer LED Gamemax</h5>
                            <p class="preco"  id="preco">Por: R$ 41,86 <br>ou até 2x sem juros de R$ 20,93</p>
                            <a href="#" id="comprar" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="hd" id="hd">
        <div class="linha3">
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/hd/seagate10tb.png" alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">HD 10TB SATA Seagate IronWolf PRO</h5>
                            <p class="preco"  id="preco">Por: R$ 3.582,34 <br>ou até 10x de R$ 358,23 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/hd/seagate1tbex.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">HD Externo Portátil 1 TB USB</h5>
                            <p class="preco"  id="preco">Por: R$ 315,00 <br>ou até 6x de R$52,50 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/hd/seagate4tb.png" alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">HD Interno PC Seagate 4TB</h5>
                            <p class="preco"  id="preco">Por: R$ 1.278,24  <br>ou até 12x de 106,52 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="linha4">
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/hd/western1tbex.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">HD Externo Portátil Western Elements 1 TB</h5>
                            <p class="preco"  id="preco">Por: R$ 429,75 <br>ou até 8x de R$53,72 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>


                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/hd/western2tb.png" alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">HD 2TB SATA3 Western Digital RE Enterprise </h5>
                            <p class="preco"  id="preco">Por:  R$ 1.235,28 <br>ou até 10x de R$ 123,53 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/hd/western500gb.png" alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">HD Interno Desktop Western Digital 500GB</h5>
                            <p class="preco"  id="preco">Por: R$ 189,90 <br>ou até 2x de R$ 94,95 sem juros</p>
                            <a href="#" id="comprar" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="placa-mae" id="placa-mae">
        <div class="linha5">
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/placa/asrock1150.png" alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Placa Mãe ASRock P/ Intel LGA</h5>
                            <p class="preco"  id="preco">Por: R$ 560,00 <br>ou até 12x de R$ 46,66 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/placa/asrockh310.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Placa Mãe AsRock H310CM-HG4</h5>
                            <p class="preco"  id="preco">Por: R$ 687,38 <br>ou até 8x de R$ 85,93 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/placa/asusb450.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Placa Mãe Asus Prime B450M Gaming</h5>
                            <p class="preco"  id="preco">Por: R$ 669,00 <br>ou até 10x de R$ 66,90 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="linha6">
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/placa/gigabyteh110m.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Placa Mãe H110M-S2H Gigabyte</h5>
                            <p class="preco"  id="preco">Por: R$ 589,00 <br>ou até 10x de R$ 58,90 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>


                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/placa/gigabytex299.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Placa Mãe Gigabyte Aorus Master</h5>
                            <p class="preco"  id="preco">Por: R$ 3.776,61 <br>ou até 10x de R$ 377,66 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/placa/gigayteA320.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Placa Mãe Gigabyte A320M S2H AM4</h5>
                            <p class="preco"  id="preco">Por: R$ 599,88  <br>ou até 12x de R$ 49,99 sem juros</p>
                            <a href="#" id="comprar" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="placa-de-video" id="placa-de-video">
        <div class="linha7">
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/placaDeVideo/galax4.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Placa de video geforce gtx1650</h5>
                            <p class="preco"  id="preco">Por: R$ 1.799,00  <br>ou até 10x de R$ 179,90 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/placaDeVideo/geforce2.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Asus GeForce GTX 1050 Phoenix</h5>
                            <p class="preco"  id="preco">R$ 969,99  <br>ou até 10x de R$ 97,00 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/placaDeVideo/pny4.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Geforce PNY GTX Performance Nvidia</h5>
                            <p class="preco"  id="preco">Por: R$ 874,15  <br>ou até 8x de R$ 109,27 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="linha8">
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/placaDeVideo/gigabyte2.png"   alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Monitor para PC LG "21,5” LED - Widescreen Full HD</h5>
                            <p class="preco"  id="preco">Por: R$ 599,00 <br>ou até 10x de R$ 59,90 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>


                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/placaDeVideo/gigabyte8.png"   alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Placa de Vídeo NV RTX 2060 8GB Gigabyte</h5>
                            <p class="preco"  id="preco">Por: R$ 3.849,00 <br>ou até 10x de R$ 384,90 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/placaDeVideo/nvidia4.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Placa de Vídeo Gigabyte GeForce GTX 1650</h5>
                        <p class="preco"  id="preco">Por: R$ 2.025,00 <br>ou até 10x de R$ 202,50 sem juros</p>
                            <a href="#" id="comprar" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="processador" id="processador">
        <div class="linha9">
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/cpu/core13.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Processador Intel Core i3-9100F</h5>
                        <p class="preco"  id="preco">Por: R$ 599,90<br>ou até 10x de R$ 59,99 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/cpu/core5.png"   alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Processador Intel Core i5-7400 </h5>
                        <p class="preco"  id="preco">Por: R$ 1.886,89 <br>ou até 10x de R$ 188,69 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/cpu/core7.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Processador Intel Core i7-8700 </h5>
                        <p class="preco"  id="preco">Por: R$ 2.349,00 <br>ou até 10x de R$ 234,90 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="linha10">
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/cpu/pentiumgold.png"   alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Processador Intel Pentium Gold G5400</h5>
                            <p class="preco"  id="preco">Por: R$ 465,90 <br>ou até 2x de 44,95 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>


                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/cpu/ryzen3.png"    alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Processador AMD Ryzen 9 3900X 12 Cores</h5>
                            <p class="preco"  id="preco">Por: R$ 4.374,01 <br>ou até 10x de R$ 437,40 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/cpu/ryzen5.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Processador am4 ryzen 5 2600 6 core</h5>
                            <p class="preco"  id="preco">Por: R$ 1.099,00 <br>ou até 10x de R$ 109,90 sem juros</p>
                            <a href="#" id="comprar" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="memoria-ram" id="memoria-ram">
        <div class="linha11">
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/ram/adata8.png"   alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Memória 8GB DDR4 Adata XPG Spectrix RGB</h5>
                        <p class="preco"  id="preco">Por: R$ 454,45 <br>ou até 10x de R$ 45,45 sem juros</p>
                        <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/ram/corsair16.png"   alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Memória DDR4 - Corsair Vengeance LPX Black</h5>
                        <p class="preco"  id="preco">Por: R$ 1.198,22<br>ou até 10x de R$ 119,82 sem juros</p>
                        
                        <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/ram/corsair2x16.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Memória DDR4 Corsair Vengeance RGB Pro</h5>
                        <p class="preco"  id="preco">Por: R$ 2.408,82 <br>ou até 10x de R$ 240,88 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="linha12">
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/ram/corsairNot8.png"    alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Memória Notebook DDR4 - Corsair</h5>
                            <p class="preco"  id="preco">Por: R$ 531,16 <br>ou até 10x de R$ 53,12 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>


                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/ram/geil8.png"     alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Memória 8GB DDR4 Geil Super Luce RGB</h5>
                        <p class="preco"  id="preco">Por: R$ 554,24 <br>ou até 10x de R$ 55,42 sem juros</p>
                        <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/ram/hyperNot8.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">Memória 8GB Gamer Hyperx Kingston DDR4</h5>
                        <p class="preco"  id="preco">Por: R$ 498,00 <br>ou até 10x de R$ 49,80 sem juros</p>
                            <a href="#" id="comprar" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ssd" id="ssd">
        <div class="linha13">
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/ssd/adata120.png"   alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">SSD Ultimate 120GB Adata ASU650SS</h5>
                        <p class="preco"  id="preco">Por: R$ 250,90 <br>ou até 8x de R$ 31,36 sem juros</p>
                        <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/ssd/adata240ex.png"   alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">SSD 240gb externo usb 3.2 ADATA </h5>
                        <p class="preco"  id="preco">Por: R$ 399,00 <br>ou até 10x de R$ 39,90 sem juros</p>
                        <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/ssd/kingston120gb.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">SSD Kingston 2.5” 120GB A400</h5>
                        <p class="preco"  id="preco">Por: R$ 218,90 <br>ou até 5x de R$ 43,78 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="linha14">
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/ssd/pichau256.png"     alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">SSD Pichau Gaming 256GB 2.5” Sata</h5>
                            <p class="preco"  id="preco">Por: R$ 425,73 <br>ou até 10x de R$ 42,57 sem juros</p>
                            <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>


                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/ssd/pny120.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">SSD Pny 120gb 515mb/s 2.5 Sata</h5>
                        <p class="preco"  id="preco">Por: R$ 234,90<br>ou até 7x de R$ 33,56 sem juros</p>
                        <a href="#" id="comprar"  class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="coluna">
                    <div id="card" class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../CodeStorm/img/pecas/ssd/sandisk120.png"  alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title">SSD Plus 120GB Sandisk SDSSDA-120G-G27</h5>
                        <p class="preco"  id="preco">Por: R$ 272,90<br>ou até 9x de R$ 30,32 sem juros</p>
                        <a href="#" id="comprar" class="btn btn-primary">Comprar</a>
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