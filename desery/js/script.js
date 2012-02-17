/* Author:

*/

function init() {
  $('#logo_nav_wrapper #logo, #logo_nav_wrapper nav, #header_desery, #main-container, #footer-container').hide();
}

$(document).ready(function() {
  // Stuff to do as soon as the DOM is ready;
  init();
  
  // start Animation
  
  $('#logo_nav_wrapper #logo').delay(500).fadeIn(1000);
  $('#header_desery').delay(2500).fadeIn(2000);
  $('#logo_nav_wrapper nav').delay(5000).fadeIn(500);
  $('#main-container, #footer-container').delay(5000).fadeIn(500);
  
  $('nav li').click(
    function(event){
      var which = $(this).index();
      $('.header_image, .intro').stop().hide();
      $(this).stop().parent().children().not($(this)).addClass('inactive');
      $(this).stop().removeClass('inactive');
      $('#header_images').stop().children().eq(which).addClass('active').fadeIn('slow');
      $('#intros').stop().children().eq(which).addClass('active').delay(1000).fadeIn('slow');
      return false;
      event.stopPropagation();
    });
  
  $('html').click(function(){
    $('.header_image').stop().hide();
    $('#header-container nav li').removeClass('inactive');
    $('#intros').stop().children().fadeOut('slow');
    $('#header_images').find('active').removeClass('active').fadeOut('slow');
    $('#header_desery').fadeIn('slow')
    
  })
});







