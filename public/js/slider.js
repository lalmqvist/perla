var slideProducts;
var rightArrow;
var rightArrowBack;
var leftArrow;
var leftArrowBack;
var slideBlock
var moveLeft;
var moveRight;

 window.addEventListener("load", function(){
 	
   	rightArrow = document.getElementById("right_arrow");
    rightArrowBack = document.getElementById("right_arrow_back");
   	leftArrow = document.getElementById("left_arrow");
    leftArrowBack = document.getElementById("left_arrow_back");
   	slideProducts = document.querySelectorAll(".slide_prod")
    slideBlock = document.getElementById("slideblock");
    slideBlock.style.left = 0 + "%";
    
    
    rightArrow.addEventListener("click", moveSlideBlockLeft);
    leftArrow.addEventListener("click", moveSlideBlockRight);

    
    

    });


function moveSlideBlockLeft() {
  
  if (window.innerWidth > 770) {
    var medd = ("Desktop");
    moveLeft = -25;
    moveRight = 25;

    if (slideBlock.style.left === "-75%") {
      rightArrowBack.classList.add("visible");
      rightArrow.classList.add("hidden");
      rightArrowBack.addEventListener("click", moveBack);
    }
    
  }

  if (window.innerWidth < 770 && window.innerWidth > 490) {
    var medd = ("iPAD");
    moveLeft = -33.3;
    moveRight = 33.3;

    if (slideBlock.style.left === "-132.3%") {
      rightArrowBack.classList.add("visible");
      rightArrow.classList.add("hidden");
      rightArrowBack.addEventListener("click", moveBack);
    }
    
  }

 if (window.innerWidth < 490) {
    var medd = ("MOBILE");
    moveLeft = -50;
    moveRight = 50;

    if (slideBlock.style.left === "-250%") {
      rightArrowBack.classList.add("visible");
      rightArrow.classList.add("hidden");
      rightArrowBack.addEventListener("click", moveBack);
    }
    
  }


  var oldLeft = parseInt(slideBlock.style.left);
  slideBlock.style.left = oldLeft + moveLeft + "%";
  var main = document.getElementById('main');


 if (slideBlock.style.left === "-25%" || slideBlock.style.left === "-33.3%" || slideBlock.style.left === "-50%") {
      leftArrow.classList.add("visible");
      
  }

  function moveBack() {
      slideBlock.style.left = 0 + "%";
      rightArrow.classList.remove("hidden");
      rightArrowBack.classList.remove("visible");
      leftArrow.classList.remove("visible");
  }

}

function moveSlideBlockRight() {
  
  var oldLeft = parseInt(slideBlock.style.left);
  slideBlock.style.left = oldLeft + moveRight + "%";
  
  if (slideBlock.style.left === "0%") {
      leftArrow.classList.remove("visible");
  }

}







 	