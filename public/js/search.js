window.addEventListener("load", function(){

         // Add a keyup event listener to our input element
    var search_input = document.getElementById('search-field');
   

    search_input.addEventListener("keyup", hinter);

    // create one global XHR object 
    // so we can abort old requests when a new one is make
    window.hinterXHR = new XMLHttpRequest();
});

// Autocomplete for search field 
function hinter(event) {

    // retireve the input element
    var input = event.target;

    // retrieve the dropdown element
    var search_dropdown = document.getElementById('search-dropdown');

    // minimum number of characters before we start to generate suggestions
    var min_characters = 1;

    if (input.value.length < min_characters ) { 

        return;
    } else { 

        // abort any pending requests
        window.hinterXHR.abort();

        window.hinterXHR.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // 
                var response = JSON.parse( this.responseText ); 
                
                // clear any previously loaded options in the dropdown
                search_dropdown.innerHTML = "";
                search_dropdown.classList.add("show");

                for (let index = 0; index < response.length; index++) {
                    var dropdownItem = document.createElement('a');
                    dropdownItem.innerHTML = response[index];
                    dropdownItem.href = "/showSearch/" + response[index];
                    dropdownItem.classList.add("dropdown-item");

                    
                    search_dropdown.appendChild(dropdownItem);
                }

            }
        };

        window.hinterXHR.open("POST", "/api/search", true);
        window.hinterXHR.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       
        window.hinterXHR.send('search=' + input.value);
    }
}

$(window).scroll(function() {

    if ($(this).scrollTop() > 500) {
        $('#search-dropdown').removeClass("show");
    }

 });

 $('#search-dropdown').click(function(e) {
    e.stopPropagation();
   })
  
   $(function(){
    $(document).click(function(){  
    $('#search-dropdown').removeClass("show"); 
  
    });
  });


