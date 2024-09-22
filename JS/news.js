document.addEventListener('DOMContentLoaded', function () {
  const carousel = document.querySelector('.news-carousel');

  carousel.addEventListener('wheel', (e) => {
    if (e.deltaY !== 0) {
      e.preventDefault();
      carousel.scrollBy({
        left: e.deltaY < 0 ? -300 : 300,
        behavior: 'smooth'
      });
    }
  });
})