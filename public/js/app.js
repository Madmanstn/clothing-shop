 let currentSlide = 0;
    let slideInterval;
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;

    // Initialize slider
    document.addEventListener('DOMContentLoaded', function() {
      createDots();
      updateCounter();
      showSlide(0);
      startAutoSlide();
    });

    function createDots() {
      const dotsContainer = document.getElementById('dots-container');
      dotsContainer.innerHTML = '';
      
      for (let i = 0; i < totalSlides; i++) {
        const dot = document.createElement('div');
        dot.className = 'dot';
        dot.addEventListener('click', () => goToSlide(i));
        dotsContainer.appendChild(dot);
      }
    }

    function showSlide(n) {
      slides.forEach(slide => slide.classList.remove('active'));
      document.querySelectorAll('.dot').forEach(dot => dot.classList.remove('active'));
      
      currentSlide = (n + totalSlides) % totalSlides;
      
      slides[currentSlide].classList.add('active');
      document.querySelectorAll('.dot')[currentSlide].classList.add('active');
      updateCounter();
    }

    function nextSlide() {
      showSlide(currentSlide + 1);
    }

    function prevSlide() {
      showSlide(currentSlide - 1);
    }

    function goToSlide(n) {
      showSlide(n);
    }

    function updateCounter() {
      document.getElementById('current-slide').textContent = currentSlide + 1;
      document.getElementById('total-slides').textContent = totalSlides;
    }

    function startAutoSlide() {
      slideInterval = setInterval(nextSlide, 5000); // 5 seconds
    }

    // Pause on hover
    const slideContainer = document.querySelector('.slide-container');
    slideContainer.addEventListener('mouseenter', () => clearInterval(slideInterval));
    slideContainer.addEventListener('mouseleave', startAutoSlide);

    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
      if (e.key === 'ArrowLeft') prevSlide();
      if (e.key === 'ArrowRight') nextSlide();
    });