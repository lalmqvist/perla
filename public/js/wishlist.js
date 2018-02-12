window.addEventListener("load", function(){
    console.log('Laddad');
    document.getElementById("wish-button").addEventListener("click", addToWishList);
    // document.getElementById("removewish").addEventListener("click", removeFromWishList);

    window.wishlistXHR = new XMLHttpRequest();
});


  function addToWishList(e) {
      console.log(e.target.getAttribute( "data-user-id" ));
      window.wishlistXHR.abort();
      
      var user_id = e.target.getAttribute( "data-user-id" );
    var ad_id = e.target.getAttribute( "data-ad-id" );
      
      window.wishlistXHR.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

            var response = JSON.parse( this.responseText ); 
            e.target.innerHTML = "<span class='icons'>f</span>  Sparad som favorit";
            e.target.classList.add("disabled");

            }
      };

    window.wishlistXHR.open("POST", "/api/addtowishlist", true);
    window.wishlistXHR.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  //  console.log('ad_id=' + ad_id, 'user_id=' + user_id);
    window.wishlistXHR.send('ad_id=' + ad_id + '&user_id=' + user_id);
    
  }

  function removeFromWishList(e) {
    console.log('Click');
    console.log(e.target.getAttribute( "data-user-id" ));
    console.log(e.target.getAttribute( "data-id-id" ));
//     window.wishlistXHR.abort();
    
//     var user_id = e.target.getAttribute( "data-user-id" );
//   var ad_id = e.target.getAttribute( "data-ad-id" );
    
//     window.wishlistXHR.onreadystatechange = function() {
//       if (this.readyState == 4 && this.status == 200) {

//           var response = JSON.parse( this.responseText ); 
//           e.target.innerHTML = "<span class='icons'>f</span>  Sparad som favorit";
//           e.target.classList.add("disabled");

//           }
//     };

//   window.wishlistXHR.open("POST", "/api/addtowishlist", true);
//   window.wishlistXHR.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
// //  console.log('ad_id=' + ad_id, 'user_id=' + user_id);
//   window.wishlistXHR.send('ad_id=' + ad_id + '&user_id=' + user_id);
  
}