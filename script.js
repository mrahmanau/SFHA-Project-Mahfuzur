// const hamburger = document.querySelector('#hamburger');
// const leftMenu = document.querySelector('#leftMenu');
/*
$(document).ready(function () {
  $('#hamburger').click(function () {
    $('#leftMenu').toggle();
  });
});
*/

$('#hamburger').on('click', function () {
  $('#leftMenu').stop().slideToggle(1000);
});
