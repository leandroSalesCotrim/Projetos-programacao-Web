$(window).on("scroll touchmove", function() {
    
    if ($(document).scrollTop() >= $("#inicioSec").position().top) {
        $('.linkInicio').css('text-decoration-line', 'underline');
        $('.linkInicio').css('text-decoration-color', '#00BD32');
        $('.linkInicio').css('text-decoration-thickness', '13%');
        $('.linkProjeto').css('text-decoration', 'none');
        $('.linkSobre').css('text-decoration', 'none');
        $('.linkContato').css('text-decoration', 'none');
      } 

    if ($(document).scrollTop() >= $("#projetosSec").position().top) {
      $('.linkProjeto').css('text-decoration-line', 'underline');
      $('.linkProjeto').css('text-decoration-color', '#00BD32');
      $('.linkProjeto').css('text-decoration-thickness', '13%');
      $('.linkInicio').css('text-decoration', 'none');
      $('.linkSobre').css('text-decoration', 'none');
      $('.linkContato').css('text-decoration', 'none');
    }
 
    if ($(document).scrollTop() >= $("#sobreSec").position().top) {
        $('.linkSobre').css('text-decoration-line', 'underline');
        $('.linkSobre').css('text-decoration-color', '#00BD32');
        $('.linkSobre').css('text-decoration-thickness', '13%');
        $('.linkInicio').css('text-decoration', 'none');
        $('.linkProjeto').css('text-decoration', 'none');
        $('.linkContato').css('text-decoration', 'none');
      } 

      if ($(document).scrollTop() >= $("#contatoSec").position().top) {
        $('.linkContato').css('text-decoration-line', 'underline');
        $('.linkContato').css('text-decoration-color', '#00BD32');
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
    let btnTop = document.getElementById("btnTop");
    let divMenu = document.getElementById("divMenu");
    let linkInicio = document.getElementById("linkInicio");
    let linkProjeto = document.getElementById("linkProjeto");
    let linkSobre = document.getElementById("linkSobre");
    let linkContato = document.getElementById("linkContato");
    if(document.documentElement.scrollTop > 50){
      btnTop.style.display = "block";
      btnTop.style.animationDuration = "0.7s";
      divMenu.style.transition = "0.3s";
      divMenu.style.backgroundColor = "#1802db1e";
      divMenu.style.height = "4em";
      linkInicio.style.marginTop= "1em"
      linkProjeto.style.marginTop= "0.60em";
      linkSobre.style.marginTop= "0.60em";
      linkContato.style.marginTop= "0.60em";

    }else{
      btnTop.style.display = "none";
      divMenu.style.transition = "0.7s";
      divMenu.style.backgroundColor = "#1802db";
      divMenu.style.height = "6em";
      linkInicio.style.marginTop= "2em"
      linkProjeto.style.marginTop= "1.6em";
      linkSobre.style.marginTop= "1.6em";
      linkContato.style.marginTop= "1.6em";
      //0.60 e 1em
    }
  }
  function subir(){
    document.documentElement.scrollTop = 0 ;
  }