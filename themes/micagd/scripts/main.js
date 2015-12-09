$(document).ready(function () {


$('#js-nav-toggle').on('click', function (event) {
  event.preventDefault();
  $('body').toggleClass('nav-is-active');
  $('#js-nav-menu').toggleClass('is-active');
});

	$("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
},  3000);

});

