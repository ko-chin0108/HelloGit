let sliderImages = document.querySelectorAll('.slider');
let arrowRight = document.getElementById('arrow-right');
let arrowLeft = document.getElementById('arrow-left');
let current = 0;

function startSlide(){
    sliderImages[0].getElementsByClassName.display = 'block';
}

arrowRight.addEventListener('click',function(){
    sliderImages[current].getElementsByClassName.display = 'none';
    if(current === sliderImages.length-1){
        current = -1;
    }
    sliderImages[current + 1].getElementsByClassName.display = 'block';
    current++;
})

arrowLeft.addEventListener('click',function(){
    sliderImages[current].getElementsByClassName.display = 'none';
    if(current === 0){
        current = sliderImages.length;
    }
    sliderImages[current - 1].getElementsByClassName.display = 'block';
    current--;
})

startSlide();