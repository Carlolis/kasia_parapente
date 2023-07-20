(function(){
  
})()

let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n); 
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
 let i;
  let slides = document.getElementsByClassName("slides");
  let dots = document.getElementsByClassName("slider_dots--dot");
  if (n > slides.length) {
    slideIndex = 1
  }
  if (n < 1) {
    slideIndex = slides.length
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}


// Allows you to use the dots to navigate to the corresponding slide
function dotPageChange(n){
  let dots = document.getElementsByClassName("slider_dots--dot");
  let i;
  for (i = 0; i < dots.length; i++){
    if (dots[i].id == n){
      dots[i].className += " active";
      currentSlide(n);
    }
  }
}

//Change the input to anything but true in order to stop the animation on the slides
let toggleSlide = true;

// Change the variable below to speed up/slow down the time between slides, 1 second = 1000
let timeBetweenSlideChange = 4000;

slideAnimation(toggleSlide);

function slideAnimation(boolean){
  if (boolean === true){
    
let interval = window.setInterval(function(){plusSlides(1)}, timeBetweenSlideChange);

// Adding stop/start on hover to container
let container = document.querySelector(".container");
container.onmouseover = pauseSlides;
container.onmouseleave = resumeSlides;

// Adding stop/start on hover to the dots below slides
let dots = document.getElementsByClassName("slider_dots--dot");
for (i = 0; i < dots.length; i++) {
   dots[i].onmouseenter = pauseSlides;
   dots[i].onmouseleave = resumeSlides;
}

function pauseSlides()
{
    clearInterval(interval); // Clear the interval we set earlier
}
    
function resumeSlides()
{
    interval = window.setInterval(function(){plusSlides(1)}, timeBetweenSlideChange); // Restart the slides animation
}
  }
  else {}
};



