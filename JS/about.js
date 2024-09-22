//  About company infrastructure section 
const slides = document.getElementById('slides');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');
let currentIndex = 0;

function showSlide(index) {
  const slidesCount = slides.children.length;
  if (index >= slidesCount) {
    currentIndex = 0;
  } else if (index < 0) {
    currentIndex = slidesCount - 1;
  } else {
    currentIndex = index;
  }
  const offset = -currentIndex * 100;
  slides.style.transform = `translateX(${offset}%)`;
}

prevBtn.addEventListener('click', () => {
  showSlide(currentIndex - 1);
});

nextBtn.addEventListener('click', () => {
  showSlide(currentIndex + 1);
});

// Auto slide every 3 seconds
setInterval(() => {
  showSlide(currentIndex + 1);
}, 3000);