// Access the testimonials
let testSlide = document.querySelectorAll('.testItem');
// Access the indicators
let dots = document.querySelectorAll('.dot');

var counter = 0;

// Add click event to the indicators
function switchTest(currentTest) {
  currentTest.classList.add('active');
  var testId = currentTest.getAttribute('attr');
  if (testId > counter) {
    testSlide[counter].style.animation = 'next1 0.5s ease-in forwards';
    counter = testId;
    testSlide[counter].style.animation = 'next2 0.5s ease-in forwards';
  }
  else if (testId == counter) { return; }
  else {
    testSlide[counter].style.animation = 'prev1 0.5s ease-in forwards';
    counter = testId;
    testSlide[counter].style.animation = 'prev2 0.5s ease-in forwards';
  }
  indicators();
}

// Add and remove active class from the indicators
function indicators() {
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(' active', '');
  }
  dots[counter].className += ' active';
}

// Code for auto sliding
function slideNext() {
  testSlide[counter].style.animation = 'next1 0.5s ease-in forwards';
  if (counter >= testSlide.length - 1) {
    counter = 0;
  }
  else {
    counter++;
  }
  testSlide[counter].style.animation = 'next2 0.5s ease-in forwards';
  indicators();
}
function autoSliding() {
  deleteInterval = setInterval(timer, 3000);
  function timer() {
    slideNext();
    indicators();
  }
}
autoSliding();

// Stop auto sliding when mouse is over the indicators
const container = document.querySelector('.indicators');
container.addEventListener('mouseover', pause);
function pause() {
  clearInterval(deleteInterval);
}

// Resume sliding when mouse is out of the indicators
container.addEventListener('mouseout', autoSliding);



document.addEventListener('DOMContentLoaded', function () {
  const carousel = document.querySelector('.clients-carousel');
  let isAutoScrolling = true;

  const autoScroll = () => {
    if (isAutoScrolling) {
      carousel.scrollBy({
        left: 300,
        behavior: 'smooth'
      });

      // Reset scroll to start when reaching the end
      if (carousel.scrollLeft + carousel.clientWidth >= carousel.scrollWidth) {
        carousel.scrollTo({ left: 0, behavior: 'smooth' });
      }
    }
  };

  // Auto-scroll every 3 seconds
  const scrollInterval = setInterval(autoScroll, 1000);

  // Stop auto-scrolling when user interacts with the carousel
  carousel.addEventListener('wheel', () => {
    isAutoScrolling = false;
    clearInterval(scrollInterval);
  });

  // Resume auto-scrolling after a period of inactivity
  carousel.addEventListener('mouseleave', () => {
    if (!isAutoScrolling) {
      isAutoScrolling = true;
      setInterval(autoScroll, 1000);
    }
  });
});