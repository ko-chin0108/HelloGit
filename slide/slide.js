let sliderImages = document.querySelectorAll('.slide');
let arrowRight = document.getElementById('arrow-right');
let arrowLeft = document.getElementById('arrow-left');
let current = 0;

function startSlide(){
    sliderImages[0].style.display = 'block';
}

arrowRight.addEventListener('click',function(){
    sliderImages[current].style.display = 'none';
    if(current === sliderImages.length-1){
        current = -1;
    }
    sliderImages[current + 1].style.display = 'block';
    current++;
})

arrowLeft.addEventListener('click',function(){
    sliderImages[current].style.display = 'none';
    if(current === 0){
        current = sliderImages.length;
    }
    sliderImages[current - 1].style.display = 'block';
    current--;
})

startSlide();