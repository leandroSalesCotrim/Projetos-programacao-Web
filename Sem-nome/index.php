<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <title>Sem Titulo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="img/logoRaio.png" rel="icon">

    <!-- Fonte utilizada -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">

    <!-- Meu CSS e CSS do bootstrap -->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
    <!-- Js utlizado -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>

    <!-- Link da animação -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

</head>

<body id="body">
    
    <!-- MENU -->
    <header id="header" class="container-fluid">

        <div id="divMenu" class="divMenu row align-items-start" >
                   
            <div id="divLogo" class="col animate__backInDown">

                <div id="imgLogo">

                    <div id="imgLogoFundo" class="logo-blink"></div>
                    
                </div>
            
            </div>
                
            <nav id="navLink">
                
                <a href="#inicioSec" id="linkInicio" class="linkInicio nav-link">Inicio</a>
                <a href="#sobreSec" id="linkSobre" class="linkSobre nav-link">Sobre nós</a>
                <a href="#topoServico" id="linkServico" class="linkServico nav-link">Serviços</a>
                <a href="#formContato" id="linkContato" class="linkContato nav-link">Contato</a>

            </nav>
            
        </div>

    </header>

    <!-- SEÇÃO INICIO -->
    <section id="inicioSec" >
        
            <div id="divConteudoInicio">

                <div id="divTextoInicio">
                 
                    <h1 id="tituloTxtInicio" >Nome da empresa</h1>

                    <hr id="hrInicio1">
                
                    <h3  id="subTituloTxtInicio" >Frase da empresa</h3>

                    <div class="divIconesInicio">

                        <a href="#"><img src="img/WhatsAppIcone.png" class="icones" alt="WhatsApp icone"></a>
                        <a href="#"><img src="img/instagramIcone.png" class="icones" alt="Facebook icone"></a>
                        <a href="#"><img src="img/iconeFacebook.png" class="icones" alt="Instragram icone"></a>

                    </div>

                </div>
                
            </div>
        
    </section>
    
    <br>
   
    <!-- SEÇÃO SOBRE -->
    <section id="sobreSec" >
    
        <div id="conteudoSobre">
            
            <div id="divSobreTitulo"></div>
            
            <img src="img/ponto2.png" id="pontoImg" alt="">
                
            <h1 id="sobreTitulo">Sobre nós</h1> 
            
            <hr>
            
            <p id="sobreTxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Cursus euismod quis viverra nibh cras pulvinar. Lobortis mattis aliquam faucibus purus in massa. Morbi leo urna molestie at elementum eu facilisis. Netus et malesuada fames ac turpis egestas maecenas pharetra convallis. Nisl purus in mollis nunc sed id semper risus. Tortor dignissim convallis aenean et tortor at risus viverra. Scelerisque fermentum dui faucibus in ornare quam viverra orci sagittis. Cras adipiscing enim eu turpis egestas pretium aenean pharetra. Nunc sed augue lacus viverra vitae congue eu. Nunc aliquet bibendum enim facilisis gravida neque. Ultrices eros in cursus turpis massa. Dolor morbi non arcu risus quis varius. Morbi leo urna molestie at elementum eu facilisis sed. Pellentesque habitant morbi tristique senectus et netus et. Urna nunc id cursus metus aliquam eleifend. Ornare quam viverra orci sagittis eu volutpat odio facilisis mauris. Rhoncus mattis rhoncus urna neque viverra justo. Porttitor lacus luctus accumsan tortor. Aliquam vestibulum morbi blandit cursus risus at ultrices.</p>
            
            
            
            <hr>
            <div id="divTxtLocal">
                <img src="img/icon-map.png" id="iconeMapa" alt="icone Mapa">
                <span class="txtFooter ">Nome da empresa<br>
                    Seg. à sex. 10h - 16h. Sáb. 10h - 16h<br>
                    R. Nome da rua, 123, nome do bairro, SP
                </span>
            
            </div>
            
        </div>
    
    </section>
    
    <!-- SEÇÃO SERVIÇO -->
    <!-- OBS: ESSA SEÇÃO É DIVIDIDA POR DUAS LINHAS (DUAS DIVS) QUE SEPARAM O CONTEUDO -->
    <section  id="servicosSec" >

        <br>
        <br>
        
        <div  class="servicosC container">
        
            <div  class="tituloServico">
        
                <center >
        
                    <h2 class="txtTituloServico">Nossos serviços</h2>
                    <hr class="hrServico">
        
                </center>
        
            </div>
        
            <div id="topoServico" class="linha1Servico">
        
                <div class="divIcone1">
        
                    <center>
        
                        <img class="icones" src="img/24-horas.png" alt="Atendimento 24 horas">
                        <p class="txtDescServico">Atendimento 24 horas</p>
                        <p class="txtSubDescServico">Fazemos atendimento 24 horas via WhatsApp e nossas redes sociais</p>
        
                    </center>
        
                </div>
        
                <div class="divIcone2">
        
                    <center>
        
                        <img class="icones" src="img/engrenagens.png" alt="Manutenção mensal">
                        <p class="txtDescServico">Manutenção mensal</p>
                        <p class="txtSubDescServico">Nossos contratos oferecem uma verificação mensal para manutenção de equipamentos</p>
        
                    </center>
        
                </div>
        
                <div class="divIcone3">
        
                    <center>
        
                        <img class="icones" src="img/lampada.png" alt="Design thinking">
                        <p class="txtDescServico">Design thinking</p>
                        <p class="txtSubDescServico">Trabalhamos com o design thinking para abordar os problemas da melhor forma</p>
        
                    </center>
        
                </div>
        
            </div>
        
            <div class="linha2Servico">
        
                <div class="divIcone1">
        
                    <center>
        
                        <img class="icones" src="img/localizacao.png" alt="Serviço Local">
                        <p class="txtDescServico">Serviço Local</p>
                        <p class="txtSubDescServico">Oferecemos serviço remoto para que o cliente não necessite vir até nós</p>
        
                    </center>
        
                </div>
        
                <div class="divIcone2">
        
                    <center>
        
                        <img class="icones" src="img/transporte.png" alt="Transportadora privada">
                        <p class="txtDescServico">Transportadora privada</p>
                        <p class="txtSubDescServico">Possuimos nossa transportadora privada que por meio dela, entregamos todos os nossos equipamentos</p>
        
                    </center>
        
                </div>
        
            </div>
        
        </div>
    
    </section>
   
    <!-- SEÇÃO CONTATO -->
    <section  id="contatoSec" >

        <br>
        <br>
        <br>
        <br>

        <div id="containerContato" >
      
            <div id="conteudoContato">

                <div id="divTxtContato">
               
                    <center >
             
                        <img src="img/iconeEmail.png" id="imgIconEmail" alt="">
                        <h1 id="tituloTxtContato">Contato</h1>
                        <h5 id="subTxtContato">Entre em contato conosco através de nosso E-mail ou através de outros meios de contato!</h5>
          
                    </center>
           
                </div>
           
                <form action="email.php" method="POST" id="formContato">
               
                    <label id="lblNome" for="txtNome">Nome Completo</label>
                    <br>
                    <input type="text" name="nome" id="txtNome" onfocus="foco1()" onblur="desfoque()" >

                    <br>
                    <br>

                    <label id="lblEmail" for="txtEmail">E-mail</label>
                    <br>
                    <input type="email" name="email" id="txtEmail" onfocus="foco2()" onblur="desfoque()">

                    <br>
                    <br>

                    <label id="lblAssunto" for="txtAssunto">Assunto</label>
                    <br>
                    <select name="assunto" id="txtAssunto" onfocus="foco3()" onblur="desfoque()">
                  
                        <option value=""></option>
                        <option value="1">Sugestão</option>
                        <option value="2">Elogio</option>
                        <option value="3">Reclamação</option>
             
                    </select>

                    <br>
                    <br>
                        
                    <label id="lblMensagem" for="txtMensagem">Sua mensagem</label>
                    <br>
                    <textarea name="mensagem" type="text" id="txtMensagem" onfocus="foco4()" onblur="desfoque()" class="form-control" rows="3"></textarea>

                    <br>
        
                    <center>
              
                        <button type="submit" id="btnEnviar">Enviar</button>
             
                    </center>
                
                </form>
        
            </div>
    
        </div>
   
    </section>
    
    <button id="btnTop" onclick="subir()" class="btn animate__backInRight"  >
    
        <source id="imgBtnTop">
   
    </button>

    <!-- RODAPE -->
    <!-- OBS: O FUNDO DO RODAPÉ SOBREPÕE O CONTEUDO DA SECTION ACIMA EM RESOLUÇÕES COM A ALTURA ABAIXO DO NORMAL-->
    <footer class="footer mt-auto py-3">

        <div class="container">
   
                <center>
            
                    <div  class="divIconesFooter" >
             
                        <a href="#"><img src="img/WhatsAppIcone.png" class="icones" alt="WhatsApp icone"></a>
                        <a href="#"><img src="img/instagramIcone.png" class="icones" alt="Facebook icone"></a>
                        <a href="#"><img src="img/iconeFacebook.png" class="icones" alt="Instragram icone"></a>
            
                    </div>
                    
                    <hr class="hrFooter">
                    <br>
            
                    <span class="text-muted">© 2021 por Leandro de Sales Cotrim.</span>
            
                </center>
        
        </div>
    
    </footer>

</body>

</html>