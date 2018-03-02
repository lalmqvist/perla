window.addEventListener("load", function(){
    console.log('Laddad');

    var allWishLists = document.querySelectorAll('.wish-button-remove');
    addClickListener(allWishLists);
    window.wishlistXHR = new XMLHttpRequest();
});


function addClickListener(ads) {
    for (var i = 0; i < ads.length; i++) {
        ads[i].addEventListener("click", toggleWishList);
    }
} 

function toggleWishList(e) {
        window.wishlistXHR.abort();
        var user_id = this.getAttribute( "data-user-id" );
        var ad_id = this.getAttribute( "data-ad-id" );
        
        window.wishlistXHR.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                var response = JSON.parse( this.responseText ); 
            }
        };

        window.wishlistXHR.open("POST", "/api/removefromwishlist", true);
        window.wishlistXHR.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        window.wishlistXHR.send('ad_id=' + ad_id + '&user_id=' + user_id);

        location.reload();
  }

