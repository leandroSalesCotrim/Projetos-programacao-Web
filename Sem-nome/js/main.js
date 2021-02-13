$(window).on("scroll touchmove", function() {
    
    if ($(document).scrollTop() >= $("#inicioSec").position().top) {
        $('.linkInicio').css('text-decoration-line', 'underline');
        $('.linkInicio').css('text-decoration-color', '#F2CB05');
        $('.linkInicio').css('text-decoration-thickness', '13%');
        $('.linkProjeto').css('text-decoration', 'none');
        $('.linkSobre').css('text-decoration', 'none');
        $('.linkContato').css('text-decoration', 'none');
      }
    if ($(document).scrollTop() >= $("#sobreSec").position().top) {
        $('.linkSobre').css('text-decoration-line', 'underline');
        $('.linkSobre').css('text-decoration-color', '#F2CB05');
        $('.linkSobre').css('text-decoration-thickness', '13%');
        $('.linkInicio').css('text-decoration', 'none');
        $('.linkProjeto').css('text-decoration', 'none');
        $('.linkContato').css('text-decoration', 'none');
    } 
      
    if ($(document).scrollTop() >= $("#projetosSec").position().top) {
      $('.linkProjeto').css('text-decoration-line', 'underline');
      $('.linkProjeto').css('text-decoration-color', '#F2CB05');
      $('.linkProjeto').css('text-decoration-thickness', '13%');
      $('.linkInicio').css('text-decoration', 'none');
      $('.linkSobre').css('text-decoration', 'none');
      $('.linkContato').css('text-decoration', 'none');
    }
    if ($(document).scrollTop() >= $("#contatoSec").position().top) {
      $('.linkContato').css('text-decoration-line', 'underline');
      $('.linkContato').css('text-decoration-color', '#F2CB05');
      $('.linkContato').css('text-decoration-thickness', '13%');
      $('.linkInicio').css('text-decoration', 'none');
      $('.linkSobre').css('text-decoration', 'none');
      $('.linkProjeto').css('text-decoration', 'none');
    }  
  });

  window.onscroll = function(){
    scroll();
  }
 
  function scroll(){
    btnTop = document.getElementById("btnTop");
    divFundoBtn = document.getElementById("divFundoBtn");
    divMenu = document.getElementById("divMenu");


    if(document.documentElement.scrollTop > 95){
      btnTop.style.display = "block";
      btnTop.style.animationDuration = "0.7s";
      divFundoBtn.style.display = "block";
      divMenu.style.transition = "0.3s";
      divMenu.style.backgroundColor = "#0d0d0da6";
      divMenu.style.height = "10%";
    }else{
      btnTop.style.display = "none";
      btnTop.style.transition = "0.7s";
      divFundoBtn.style.display = "none";
      divMenu.style.transition = "0.7s";
      divMenu.style.backgroundColor = "#0d0d0d00";
      divMenu.style.height = "14.5%";
    }
  }
  function subir(){
    document.documentElement.scrollTop = 0 ;
  }
  function foco1(){
    lblNome = document.getElementById("lblNome");
    txtNome = document.getElementById("txtNome");
    lblNome.style.marginTop = "3vmax";
    lblNome.style.color = "#F2CB05";
    lblNome.style.transition = "0.3s";
    txtNome.style.borderColor = "#F2CB05";
    txtNome.style.transition = "0.2s";
  }
  function desfoque(){
    if(document.getElementById("txtNome").value == ""){
      lblNome = document.getElementById("lblNome");
      txtNome = document.getElementById("txtNome");
      lblNome.style.marginTop = "4.8vmax";
      lblNome.style.color = "#404040";
      lblNome.style.transition = "0.3s";
      txtNome.style.borderColor = "#626262";
      txtNome.style.transition = "0.2s";
    }
    if(document.getElementById("txtEmail").value == ""){
      lblEmail = document.getElementById("lblEmail");
      txtEmail = document.getElementById("txtEmail");
      lblEmail.style.marginTop = "1.9vmax";
      lblEmail.style.color = "#404040";
      lblEmail.style.transition = "0.3s";
      txtEmail.style.borderColor = "#626262";
      txtEmail.style.transition = "0.2s";
    }
    if(document.getElementById("txtAssunto").value == ""){
      lblAssunto = document.getElementById("lblAssunto");
      txtAssunto = document.getElementById("txtAssunto");
      lblAssunto.style.marginTop = "1.9vmax";
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
  function foco2(){
    lblEmail = document.getElementById("lblEmail");
    txtEmail = document.getElementById("txtEmail");
    lblEmail.style.marginTop = "0.5vmax";
    lblEmail.style.color = "#F2CB05";
    lblEmail.style.transition = "0.3s";
    txtEmail.style.borderColor = "#F2CB05";
    txtEmail.style.transition = "0.2s";
  }
  function foco3(){
    lblAssunto = document.getElementById("lblAssunto");
    txtAssunto = document.getElementById("txtAssunto");
    lblAssunto.style.marginTop = "0.5vmax";
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