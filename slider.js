const slides = document.querySelectorAll('.slide');



// 0%, 100%, 200%

const btnLeft = document.querySelector('.slider__btn--left');
const btnRight = document.querySelector('.slider__btn--right');
let currentSlide = 0;
const maxSlide = slides.length;


const goToSlide = function(slide){


    slides.forEach((s,i)=> s.style.transform = `translateX(${110 * (i-slide)}%)`)


};
goToSlide(0);


const nextSlide = function(){
    
        if(currentSlide=== maxSlide-3) {
            currentSlide=0;
        }
        else{
            currentSlide++;
        }
    
        goToSlide(currentSlide)
    
    // -100%, 0%, 100%
    // -200%, -100%, 0%
    
    
    }

    const prevSlide =  function(){
        if(currentSlide===0) {
            currentSlide=maxSlide-3;
        }
        else{
            currentSlide--;
        }
        goToSlide(currentSlide)}

btnRight.addEventListener('click',nextSlide) 


btnLeft.addEventListener('click', prevSlide)