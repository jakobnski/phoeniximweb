document.addEventListener("DOMContentLoaded", () => {
    let slideIndex = 0;
    const slides = document.querySelectorAll(".slides img");
    const dots = document.querySelectorAll(".dot");
    const prev = document.querySelector(".prev");
    const next = document.querySelector(".next");

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.remove("active");
            dots[i].classList.remove("active");
            if (i === index) {
                slide.classList.add("active");
                dots[i].classList.add("active");
            }
        });
    }

    function nextSlide() {
        slideIndex = (slideIndex + 1) % slides.length;
        showSlide(slideIndex);
    }

    function prevSlide() {
        slideIndex = (slideIndex - 1 + slides.length) % slides.length;
        showSlide(slideIndex);
    }

    dots.forEach((dot, i) => {
        dot.addEventListener("click", () => {
            slideIndex = i;
            showSlide(slideIndex);
        });
    });

    prev.addEventListener("click", prevSlide);
    next.addEventListener("click", nextSlide);

    setInterval(nextSlide, 3000); // Automatischer Wechsel alle 3 Sekunden

    showSlide(slideIndex); // Zeige das erste Bild beim Laden der Seite
});