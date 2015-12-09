    $(function() {
    $('#js-nav-toggle').on('click', function (event) {
      event.preventDefault();
      $('body').toggleClass('nav-is-active');
      $('#js-nav-menu').toggleClass('is-active');

  });
});