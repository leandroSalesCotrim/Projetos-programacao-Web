$(window).on("scroll touchmove", function() {
    
    
    if ($(document).scrollTop() >= $("#inicioSec").position().top) {
        $('.linkInicio').css('text-decoration-line', 'underline');
        $('.linkInicio').css('text-decoration-color', '#00BD32');
        $('.linkProjeto').css('text-decoration', 'none');
        $('.linkSobre').css('text-decoration', 'none');
        $('.linkContato').css('text-decoration', 'none');

      } 

    if ($(document).scrollTop() >= $("#projetosSec").position().top) {
      $('.linkProjeto').css('text-decoration-line', 'underline');
      $('.linkProjeto').css('text-decoration-color', '#00BD32');
      $('.linkInicio').css('text-decoration', 'none');
      $('.linkSobre').css('text-decoration', 'none');
      $('.linkContato').css('text-decoration', 'none');

    }
    if ($(document).scrollTop() >= $("#sobreSec").position().top) {
        $('.linkSobre').css('text-decoration-line', 'underline');
        $('.linkSobre').css('text-decoration-color', '#00BD32');
        $('.linkInicio').css('text-decoration', 'none');
        $('.linkProjeto').css('text-decoration', 'none');
        $('.linkContato').css('text-decoration', 'none');
  
      } 
      if ($(document).scrollTop() >= $("#contatoSec").position().top) {
        $('.linkContato').css('text-decoration-line', 'underline');
        $('.linkContato').css('text-decoration-color', '#00BD32');
        $('.linkInicio').css('text-decoration', 'none');
        $('.linkSobre').css('text-decoration', 'none');
        $('.linkProjeto').css('text-decoration', 'none');
  
      }  
  });