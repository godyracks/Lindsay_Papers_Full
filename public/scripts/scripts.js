const slidesData = [
    {
        title: "Research Papers",
        description: "Discover a streamlined approach to accessing high-quality research papers tailored to your academic needs.",
        imgSrc: "http://localhost/lp/public/images/asian.png", // Update this with your image path
        quoteLink: "#", // Add appropriate links
        videoLink: "#"
    },
    {
        title: "Proctored Exams",
        description: "Discover a streamlined approach to accessing high-quality research papers tailored to your academic needs.",
        imgSrc: "http://localhost/lp/public/images/ns.png", // Update this with your image path
        quoteLink: "#",
        videoLink: "#"
    },
    {
        title: "Flexible Payments",
        description: "Discover a streamlined approach to accessing high-quality research papers tailored to your academic needs.",
        imgSrc: "http://localhost/lp/public/images/flex.png", // Update this with your image path
        quoteLink: "#",
        videoLink: "#"
    },
    {
        title: "Tesi Exams",
        description: "Discover a streamlined approach to accessing high-quality research papers tailored to your academic needs.",
        imgSrc: "http://localhost/lp/public/images/asian.png", // Update this with your image path
        quoteLink: "#",
        videoLink: "#"
    },
    {
        title: "Hesi Exams",
        description: "Discover a streamlined approach to accessing high-quality research papers tailored to your academic needs.",
        imgSrc: "http://localhost/lp/public/images/asian.png", // Update this with your image path
        quoteLink: "#",
        videoLink: "#"
    }
];

let currentSlide = 0;

function renderSlide(index) {
    const slideData = slidesData[index];
    document.getElementById('slide-title').textContent = slideData.title;
    document.getElementById('slide-description').textContent = slideData.description;
    document.getElementById('slide-image').src = slideData.imgSrc;
    document.getElementById('btn-quote').setAttribute('onclick', `window.location.href='${slideData.quoteLink}'`);
    document.getElementById('btn-play').setAttribute('onclick', `window.location.href='${slideData.videoLink}'`);
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % slidesData.length;
    renderSlide(currentSlide);
}

function prevSlide() {
    currentSlide = (currentSlide - 1 + slidesData.length) % slidesData.length;
    renderSlide(currentSlide);
}

document.getElementById('next').addEventListener('click', nextSlide);
document.getElementById('prev').addEventListener('click', prevSlide);

// Auto slide every 5 seconds
setInterval(nextSlide, 4000);

// Initial render
renderSlide(currentSlide);


//toggle



 document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.querySelector('.navbar');
    const sticky = navbar.offsetTop;

    function checkSticky() {
        if (window.scrollY > sticky) {
            navbar.classList.add('sticky');
        } else {
            navbar.classList.remove('sticky');
        }
    }

    window.addEventListener('scroll', checkSticky);
});

// faqs
document.addEventListener('DOMContentLoaded', () => {
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');
        const chevron = item.querySelector('.faq-chevron');

        question.addEventListener('click', () => {
            const isOpen = answer.style.display === 'block';
            answer.style.display = isOpen ? 'none' : 'block';
            chevron.classList.toggle('rotate', !isOpen);
        });
    });
});
//reviewws
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
