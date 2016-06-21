

jQuery(document).ready(function($){

  // update the subtotal for the quantity of gifts of Action

  var $itemPrice = $('.cart-table .price p');
  var $lineTotal = $('.cart-table .line-total p');
  var $subTotal = $('.cart .subtotal h3.price');
  var $userQty = $('.cart-table input');

  // remove $ character

  var itemPrice = $itemPrice.text().slice(1);

  //conver to a number
  itemPrice = parseInt(itemPrice, 10);
  console.log(itemPrice);

  $userQty.on('change', function(){
    var total = itemPrice * $userQty.val();
    $lineTotal.text('$' + total + '.00');
    $subTotal.text('$' + total + '.00');

  });


  // show the Gift form for users to fill out a message

  $checkbox = $('label.checkbox');
  $giftForm = $('.gift-form fieldset');

  $checkbox.on('click', function() {

    if ($checkbox.siblings('input').is(':checked')) {
      $giftForm.css('visibility', 'hidden');
    } else {
      $giftForm.css('visibility', 'visible');
    }

    // console.log();

  });

});
