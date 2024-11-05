// scripts.js
document.addEventListener('DOMContentLoaded', () => {
    const sliderWrapper = document.querySelector('.slider-wrapper');
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');
    const slides = document.querySelectorAll('.slide');
    let currentIndex = 0;

    function showSlide(index) {
        const totalSlides = slides.length;
        if (index < 0) index = totalSlides - 1;
        if (index >= totalSlides) index = 0;
        sliderWrapper.style.transform = `translateX(-${index * 100}%)`;
        currentIndex = index;
    }

    prevButton.addEventListener('click', () => {
        showSlide(currentIndex - 1);
    });

    nextButton.addEventListener('click', () => {
        showSlide(currentIndex + 1);
    });

    // 自動スライド
    // setInterval(() => {
    //     showSlide(currentIndex + 1);
    // }, 5000); // 5秒ごとにスライド
});
