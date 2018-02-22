var wishButton;
window.addEventListener("load", function(){

    wishButton = document.querySelectorAll('.wish-button-index');
    addClickListeners(wishButton);
});

function addClickListeners(buttons) {
    for (var i = 0; i < buttons.length; i++) {
      buttons[i].addEventListener("click", toggleWishList);
    }
  }

  function toggleWishList(e) {

      e.target.innerHTML = "<span class='icons'>f</span>  Sparad som favorit";
  }




