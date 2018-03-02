window.addEventListener("load", function(){
    console.log('Laddad');

    var allHearts = document.querySelectorAll('.wish-button-index');
    addClickListener(allHearts);
    window.wishlistXHR = new XMLHttpRequest();
});


function addClickListener(hearts) {
    for (var i = 0; i < hearts.length; i++) {
        hearts[i].addEventListener("click", toggleWishList);
    }
} 

function toggleWishList(e) {

    if (e.target.classList.contains('empty-heart')) {

        window.wishlistXHR.abort();
        var user_id = this.getAttribute( "data-user-id" );
        var ad_id = this.getAttribute( "data-ad-id" );
      
        window.wishlistXHR.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                var response = JSON.parse( this.responseText ); 
                e.target.innerHTML = "f";
                e.target.classList.add("full-heart");
                e.target.classList.remove("empty-heart");
            }
        };

        window.wishlistXHR.open("POST", "/api/addtowishlist", true);
        window.wishlistXHR.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        window.wishlistXHR.send('ad_id=' + ad_id + '&user_id=' + user_id);
    } 

    if (e.target.classList.contains('full-heart')) {

        window.wishlistXHR.abort();
        var user_id = this.getAttribute( "data-user-id" );
        var ad_id = this.getAttribute( "data-ad-id" );
        
        window.wishlistXHR.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                var response = JSON.parse( this.responseText ); 
                e.target.innerHTML = "e";
                e.target.classList.add("empty-heart");
                e.target.classList.remove("full-heart");
            }
        };

        window.wishlistXHR.open("POST", "/api/removefromwishlist", true);
        window.wishlistXHR.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        window.wishlistXHR.send('ad_id=' + ad_id + '&user_id=' + user_id);
    } 

  }

