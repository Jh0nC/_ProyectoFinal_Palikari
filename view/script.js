let currentSection = 0;
const sections = document.querySelectorAll('.section');
console.log(sections);

function showSection(index) {
    sections.forEach((section, i) => {
        if (i === index) {
            section.classList.add('active');
        } else {
            section.classList.remove('active');
        }
    });
}

function nextSection() {
    currentSection++;
    if (currentSection >= sections.length) {
        currentSection = 0;
    }
    showSection(currentSection);
}

function prevSection() {
    currentSection--;
    if (currentSection < 0) {
        currentSection = sections.length - 1;
    }
    showSection(currentSection);
}

// inicializador de swipper
var swiper = new Swiper(".mySwiper", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: true,
  },
  pagination: {
    el: ".swiper-pagination",
  },
});