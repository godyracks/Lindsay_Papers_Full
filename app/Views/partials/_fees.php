<section class="fees-intro">
        <h2>Lindsay Papers Pricing</h2>
        <p>Discover unbeatable prices on essay writing services across the US, UK, Canada, 
            and Australia. Explore our top-value packages designed to meet all your 
            academic requirements!</p>
       
    </section>
    
<section class="pricing-section">
    <div class="pricing-card college">
      <div class="price-circle">
        <span class="dollar-sign">$</span>
        <span class="price">15</span>
        <span class="per-page">Per Page</span>
      </div>
      <h3>College</h3>
      <ul>
        <li>Rush orders completed within 12 hours</li>
        <li>275 words per page</li>
        <li>Complimentary title page</li>
        <li>Standard 12-point Arial or Times New Roman font</li>
        <li>Inclusive formatting for APA, MLA, Chicago, Harvard, and more</li>
        <li>Complimentary bibliography and references</li>
      </ul>
      <div class="price-arrow-icon">→</div>
    </div>
  
    <div class="pricing-card masters">
      <div class="price-circle">
        <span class="dollar-sign">$</span>
        <span class="price">15</span>
        <span class="per-page">Per Page</span>
      </div>
      <h3>Master’s</h3>
      <ul>
        <li>Rush orders completed within 12 hours</li>
        <li>275 words per page</li>
        <li>Complimentary title page</li>
        <li>Standard 12-point Arial or Times New Roman font</li>
        <li>Inclusive formatting for APA, MLA, Chicago, Harvard, and more</li>
        <li>Complimentary bibliography and references</li>
      </ul>
      <div class="price-arrow-icon">→</div>
    </div>
  
    <div class="pricing-card phd">
      <div class="price-circle">
        <span class="dollar-sign">$</span>
        <span class="price">15</span>
        <span class="per-page">Per Page</span>
      </div>
      <h3>PhD</h3>
      <ul>
        <li>Rush orders completed within 12 hours</li>
        <li>275 words per page</li>
        <li>Complimentary title page</li>
        <li>Standard 12-point Arial or Times New Roman font</li>
        <li>Inclusive formatting for APA, MLA, Chicago, Harvard, and more</li>
        <li>Complimentary bibliography and references</li>
      </ul>
      <div class="price-arrow-icon">→</div>
    </div>
  </section>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
    const track = document.querySelector('.carousel-track');
    const slides = Array.from(track.children);
    const nextArrow = document.querySelector('.right-arrow');
    const prevArrow = document.querySelector('.left-arrow');
    const dotsNav = document.querySelector('.carousel-dots');
    const dots = Array.from(dotsNav.children);

    const slideWidth = slides[0].getBoundingClientRect().width;
    let currentSlide = 0;

    const updateDots = (targetDot) => {
        dots.forEach(dot => dot.classList.remove('active'));
        targetDot.classList.add('active');
    };

    const moveToSlide = (targetIndex) => {
        track.style.transform = `translateX(-${slideWidth * targetIndex * 2}px)`; // Move two cards per slide
        updateDots(dots[targetIndex]);
    };

    nextArrow.addEventListener('click', () => {
        currentSlide = (currentSlide + 1) % (slides.length / 2); // Slide two cards at once
        moveToSlide(currentSlide);
    });

    prevArrow.addEventListener('click', () => {
        currentSlide = (currentSlide - 1 + (slides.length / 2)) % (slides.length / 2);
        moveToSlide(currentSlide);
    });

    dotsNav.addEventListener('click', (e) => {
        const targetDot = e.target.closest('span');
        if (!targetDot) return;

        const targetIndex = dots.findIndex(dot => dot === targetDot);
        currentSlide = targetIndex;
        moveToSlide(currentSlide);
    });

    // Auto-slide every 5 seconds
    setInterval(() => {
        currentSlide = (currentSlide + 1) % (slides.length / 2);
        moveToSlide(currentSlide);
    }, 5000);
});
  </script>