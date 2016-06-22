jQuery(document).ready(function($) {

  $menu_button = $('button.menu-toggle');
  $main_nav = $('nav.main-navigation');
  $main_nav_items = $('.main-navigation>div>ul>li>a');
  $menu_open = false;

  $menu_button.on('click', function(event){
    event.preventDefault();
    $main_nav.toggleClass('toggled');

    $menu_open = !$menu_open;
  });



  $main_nav_items.on('click', function(event) {

    if ($menu_open) {
      event.preventDefault();
      console.log($(this).parent().children('ul'));
      $(this).parent().children('ul').toggle();
      console.log($(this).parent().siblings().children('ul'));
      $(this).parent().siblings().children('ul').hide();

    }

  });
});
