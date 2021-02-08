$(window).on("scroll touchmove", function() {
    
    if ($(document).scrollTop() >= $("#inicioSec").position().top) {
        $('.linkInicio').css('text-decoration-line', 'underline');
        $('.linkInicio').css('text-decoration-color', '#F2CB05');
        $('.linkInicio').css('text-decoration-thickness', '13%');
        $('.linkProjeto').css('text-decoration', 'none');
        $('.linkSobre').css('text-decoration', 'none');
        $('.linkContato').css('text-decoration', 'none');
      }else 
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