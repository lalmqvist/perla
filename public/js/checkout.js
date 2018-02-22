var toCheckoutButton;
window.addEventListener("load", function(){
console.log('laddad');
    toCheckoutButton = document.getElementById('to-checkout');
    toCheckoutButton.addEventListener("click", toggleDisplay);
});

  function toggleDisplay(e) {
      e.target.style.display = "none";
  }




