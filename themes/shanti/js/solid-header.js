/**
 * solid-header.js
 */


// Solid Header
jQuery(document).ready(function($){

   $window = $(window);
   $window.scroll(function() {

       if( $(window).scrollTop() >=  $(window).height() ) {
         $('header').addClass('site-header-solid');
         $('nav').addClass('main-navigation-solid');

       } else  {
         $('header').removeClass('site-header-solid');
         $('nav').removeClass('main-navigation-solid');
       }
    });

 });
