(function ($, Drupal) {
  Drupal.behaviors.monThemeMenu = {
    attach: function (context, settings) {
      // On utilise une méthode plus simple sans le .once()
      $('.nav-link-toggle', context).off('click').on('click', function (e) {
        e.preventDefault();
        console.log("Clic détecté !");
        $(this).parent().toggleClass('is-open');
      });
    }
  };
})(jQuery, Drupal);
