jQuery(document).ready(function($) {

  $menu_button = $('button.menu-toggle');
  $main_nav = $('nav.main-navigation');

  $menu_button.on('click', function(event){
    event.preventDefault();
    $main_nav.toggleClass('toggled');
  });

});
