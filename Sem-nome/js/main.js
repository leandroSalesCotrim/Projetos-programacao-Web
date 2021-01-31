$(window).on("scroll touchmove", function() {
    
    if ($(document).scrollTop() >= $("#inicioSec").position().top) {
        $('.linkInicio').css('text-decoration-line', 'underline');
        $('.linkInicio').css('text-decoration-color', '#F2CB05');
        $('.linkInicio').css('text-decoration-thickness', '13%');
        $('.linkProjeto').css('text-decoration', 'none');
        $('.linkSobre').css('text-decoration', 'none');
        $('.linkContato').css('text-decoration', 'none');
      } 

    if ($(document).scrollTop() >= $("#projetosSec").position().top) {
      $('.linkProjeto').css('text-decoration-line', 'underline');
      $('.linkProjeto').css('text-decoration-color', '#F29F05');
      $('.linkProjeto').css('text-decoration-thickness', '13%');
      $('.linkInicio').css('text-decoration', 'none');
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
    divMenu = document.getElementById("divMenu");
    fundoLogo = document.getElementById("divFundo");
    linkInicio = document.getElementById("linkInicio");
    linkProjeto = document.getElementById("linkProjeto");
    linkSobre = document.getElementById("linkSobre");
    linkContato = document.getElementById("linkContato");

    if(document.documentElement.scrollTop > 50){
      btnTop.style.display = "block";
      btnTop.style.animationDuration = "0.7s";
      divMenu.style.transition = "0.3s";
      divMenu.style.backgroundColor = "#4040402d";
      divMenu.style.height = "4em";
      fundoLogo.style.width = "10%";
      linkInicio.style.marginTop = "1em"
      linkProjeto.style.marginTop = "0.60em";
      linkSobre.style.marginTop = "0.60em";
      linkContato.style.marginTop = "0.60em";

    }else{
      btnTop.style.display = "none";
      divMenu.style.transition = "0.7s";
      divMenu.style.backgroundColor = "#0D0D0D";
      divMenu.style.height = "6em";
      fundoLogo.style.width = "20%";
      //0.60 e 1em
    }
  }
  function subir(){
    document.documentElement.scrollTop = 0 ;
  }