/* Author:

*/

$(document).ready(function() {
  // Stuff to do as soon as the DOM is ready;
  
  $('nav li').click(
    function(){
      var which = $(this).index();
      $('.header_image, .intro').hide();
      $(this).parent().children().not($(this)).addClass('inactive');
      $(this).removeClass('inactive');
      $('#header_images').children().eq(which).addClass('active').show();
      $('#intros').children().eq(which).addClass('active').delay(1000).fadeIn('slow');
      return false;
    });
});







