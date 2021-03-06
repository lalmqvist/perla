
var smallImages; 
var largeImg; 
window.addEventListener("load", function(){
  
  document.getElementById("large-img").addEventListener("click", openFullScreen);
	document.getElementById("close-carousel").addEventListener("click", closeFullScreen);

	smallImages = document.querySelectorAll('.small-img');
    largeImg = document.getElementById("large-img");
    addClickListeners(smallImages);
});

function addClickListeners(pics) {
    for (var i = 0; i < pics.length; i++) {
      pics[i].addEventListener("click", handleClick);
    }
  }

  function handleClick(e) {

    largeImg.src = e.target.currentSrc;

  }

function openFullScreen(e) {
    
    console.log(e.target.currentSrc);
  document.querySelector('.fullScreen').style.display = "flex";
}

function closeFullScreen(e) {
    console.log(e.target);
  document.querySelector('.fullScreen').style.display = "none";
}

