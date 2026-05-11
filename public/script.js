// Add subtle parallax effect to the grid on mouse move
document.addEventListener('mousemove', (e) => {
    const root = document.documentElement;
    const xAxis = (window.innerWidth / 2 - e.pageX) / 100;
    const yAxis = (window.innerHeight / 2 - e.pageY) / 100;
    
    root.style.setProperty('--move-x', `${xAxis}px`);
    root.style.setProperty('--move-y', `${yAxis}px`);
});

// Navbar scroll effect
window.addEventListener('scroll', () => {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth'
            });
        }
    });
});

// Testimonials Swiper Initialization
document.addEventListener('DOMContentLoaded', function() {
    if (document.querySelector('.testimonials-swiper')) {
        new Swiper('.testimonials-swiper', {
            slidesPerView: 'auto',
            centeredSlides: true,
            loop: true,
            spaceBetween: 80,
            speed: 1000,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.testimonial-pagination',
                clickable: true,
            },
            breakpoints: {
                0: {
                    spaceBetween: 30,
                },
                768: {
                    spaceBetween: 50,
                },
                1024: {
                    spaceBetween: 80,
                }
            }
        });
    }
    // Portfolio Laptop Swiper Initialization
    if (document.querySelector('.portfolio-laptop-swiper')) {
        new Swiper('.portfolio-laptop-swiper', {
            loop: true,
            speed: 1000,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.carousel-control-next-custom',
                prevEl: '.carousel-control-prev-custom',
            },
            pagination: {
                el: '.pagination-dots',
                clickable: true,
                bulletClass: 'dot',
                bulletActiveClass: 'active',
            },
        });
    }
});
// Portfolio Filtering Logic
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');

    if (filterButtons.length > 0) {
        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                button.classList.add('active');

                const filterValue = button.getAttribute('data-category');

                projectCards.forEach(card => {
                    if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
                        card.style.display = 'block';
                        setTimeout(() => {
                            card.style.opacity = '1';
                            card.style.transform = 'scale(1)';
                        }, 10);
                    } else {
                        card.style.opacity = '0';
                        card.style.transform = 'scale(0.8)';
                        setTimeout(() => {
                            card.style.display = 'none';
                        }, 400);
                    }
                });
            });
        });
    }

    // Skill Bar Animation
    const skillBars = document.querySelectorAll('.skill-fill');
    const skillObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const bar = entry.target;
                const width = bar.getAttribute('data-width');
                bar.style.width = width + '%';
                skillObserver.unobserve(bar);
            }
        });
    }, { threshold: 0.1 });

    skillBars.forEach(bar => {
        skillObserver.observe(bar);
    });
});
