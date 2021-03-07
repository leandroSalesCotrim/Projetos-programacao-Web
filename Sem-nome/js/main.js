/* Função para destacar a section atual do site .
Essa função reconhece o topo do elemento pelo id
(ao usar o scroll do mouse ou o link do menu),
ativa o text-decoration-line e define uma cor e tamanho.
E também "desativa" o destaque dos outros links que não forem da section atual.*/
$(window).on("scroll touchmove", function() {
  
    //pegando o elemento da pagina e verificando se é igual ao topo da #inicioSection
    if ($(document).scrollTop() >= $("#inicioSec").position().top) {
    
      //definiindo os valores
      $('.linkInicio').css('color', '#f29f05');
      $('.linkSobre').css('color', 'white');
      $('.linkServico').css('color', 'white');
      $('.linkContato').css('color', 'white');
    
    }

    if ($(document).scrollTop() >= $("#sobreSec").position().top) {
    
      $('.linkSobre').css('color', '#f29f05');
      $('.linkInicio').css('color', 'white');
      $('.linkServico').css('color', 'white');
      $('.linkContato').css('color', 'white');
    
    } 
      
    if ($(document).scrollTop() >= $("#topoServico").position().top) {
    
      $('.linkServico').css('color', '#f29f05');
      $('.linkInicio').css('color', 'white');
      $('.linkSobre').css('color', 'white');
      $('.linkContato').css('color', 'white');
    
    }

    if ($(document).scrollTop() >= $("#contatoSec").position().top) {
    
      $('.linkContato').css('color', '#f29f05');
      $('.linkInicio').css('color', 'white');
      $('.linkSobre').css('color', 'white');
      $('.linkServico').css('color', 'white');
    
    }
      
  });

  //criando a função para que ao rolar a pagina o botão de subir a pagina apareça 
  window.onscroll = function(){
    scroll();
  }
 
  function scroll(){
    
    //resgatando os valores do botão e do menu para fazer as animações
    btnTop = document.getElementById("btnTop");
    divMenu = document.getElementById("divMenu");


    //Se o scrollTop da pagina for movido 200 pixels, o menu ficara com o fundo escuro e o tamanho ira diminuir
    //E o botão de subir a pagina ira ficar visivel
    if(document.documentElement.scrollTop > 200){
      btnTop.style.display = "block";
      btnTop.style.animationDuration = "0.7s";
      divMenu.style.transition = "0.3s";
      divMenu.style.backgroundColor = "#0d0d0ddc";
      divMenu.style.height = "10%";
    }

    //Senão o menu e o botão voltara para a posição orgininal
    else{
      
      btnTop.style.display = "none";
      btnTop.style.transition = "0.7s";
      divMenu.style.transition = "0.7s";
      divMenu.style.backgroundColor = "#0d0d0d00";
      divMenu.style.height = "14.5%";
    
    }
  }
  
  //Função que faz com que o botão suba o scrolltop da pagina para o topo
  function subir(){

    document.documentElement.scrollTop = 0 ;

  }

  //funções de onFocus e onBlur para fazer animações de destaque no formulario
  //funções de focos são para alterar a cor original para laranja e mover a 
  //posição das labels ao selecionar as mesmas

  function foco1(){

    //resgatando valores
    lblNome = document.getElementById("lblNome");
    txtNome = document.getElementById("txtNome");

    //definindo novos valores
    lblNome.style.marginTop = "12%";
    lblNome.style.color = "#F2CB05";
    lblNome.style.transition = "0.3s";
    txtNome.style.borderColor = "#F2CB05";
    txtNome.style.transition = "0.2s";

  }

  function foco2(){
    
    lblEmail = document.getElementById("lblEmail");
    txtEmail = document.getElementById("txtEmail");
    
    lblEmail.style.marginTop = "2%";
    lblEmail.style.color = "#F2CB05";
    lblEmail.style.transition = "0.3s";
    txtEmail.style.borderColor = "#F2CB05";
    txtEmail.style.transition = "0.2s";
  
  }
  
  function foco3(){
  
    lblAssunto = document.getElementById("lblAssunto");
    txtAssunto = document.getElementById("txtAssunto");
    
    lblAssunto.style.marginTop = "2%";
    lblAssunto.style.color = "#F2CB05";
    lblAssunto.style.transition = "0.3s";
    txtAssunto.style.borderColor = "#F2CB05";
    txtAssunto.style.transition = "0.2s";
  
  }
  
  function foco4(){
  
    lblMensagem = document.getElementById("lblMensagem");
    txtMensagem = document.getElementById("txtMensagem");
  
    lblMensagem.style.color = "#F2CB05";
    lblMensagem.style.transition = "0.3s";
    txtMensagem.style.borderColor = "#F2CB05";
    txtMensagem.style.transition = "0.2s";
  
  }
  
  //Função que é chamada pelo onBlur dos inputs, que verifica os campos que estiverem vazios
  //e define o css dos inputs para os valores originais antes do onFocus
  function desfoque(){
  
    if(document.getElementById("txtNome").value == ""){
  
      //resgatando novos valores
      lblNome = document.getElementById("lblNome");
      txtNome = document.getElementById("txtNome");
  
      //definindo novos valores
      lblNome.style.marginTop = "16%";
      lblNome.style.color = "#404040";
      lblNome.style.transition = "0.3s";
      txtNome.style.borderColor = "#626262";
      txtNome.style.transition = "0.2s";
  
    }
    if(document.getElementById("txtEmail").value == ""){
  
      lblEmail = document.getElementById("lblEmail");
      txtEmail = document.getElementById("txtEmail");
  
      lblEmail.style.marginTop = "6%";
      lblEmail.style.color = "#404040";
      lblEmail.style.transition = "0.3s";
      txtEmail.style.borderColor = "#626262";
      txtEmail.style.transition = "0.2s";
  
    }
    if(document.getElementById("txtAssunto").value == ""){
  
      lblAssunto = document.getElementById("lblAssunto");
      txtAssunto = document.getElementById("txtAssunto");
  
      lblAssunto.style.marginTop = "6.5%";
      lblAssunto.style.color = "#404040";
      lblAssunto.style.transition = "0.3s";
      txtAssunto.style.borderColor = "#626262";
      txtAssunto.style.transition = "0.2s";
  
    }
    if(document.getElementById("txtMensagem").value == ""){
   
      lblMensagem = document.getElementById("lblMensagem");
      txtMensagem = document.getElementById("txtMensagem");
   
      lblMensagem.style.color = "#404040";
      lblMensagem.style.transition = "0.3s";
      txtMensagem.style.borderColor = "#626262";
      txtMensagem.style.transition = "0.2s";
   
    }

  }