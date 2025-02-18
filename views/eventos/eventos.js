
function initCarrossel(carrosselId) {
    const carrossel = document.getElementById(carrosselId);
    const slidesContainer = carrossel.querySelector('.carrossel-slides');
    const slides = carrossel.querySelectorAll('.slide');
    const prevBtn = carrossel.querySelector('.prev-btn');
    const nextBtn = carrossel.querySelector('.next-btn');
    const totalSlides = slides.length;
    let currentIndex = 0;

   
    function updateCarrossel() {
        const slideWidth = slides[0].clientWidth;
        slidesContainer.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
    }

    
    prevBtn.addEventListener('click', () => {
        currentIndex = (currentIndex === 0) ? totalSlides - 1 : currentIndex - 1;
        updateCarrossel();
    });

 
    nextBtn.addEventListener('click', () => {
        currentIndex = (currentIndex === totalSlides - 1) ? 0 : currentIndex + 1;
        updateCarrossel();
    });

    
    window.addEventListener('resize', updateCarrossel);
}


document.addEventListener('DOMContentLoaded', () => {
    initCarrossel('carrossel-eventos');
    initCarrossel('carrossel-noticias');
});

