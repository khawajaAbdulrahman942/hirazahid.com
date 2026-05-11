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

                // Dynamic Category Intros
                const categoryIntros = {
                    'all': {
                        title: 'Full Stack Developer & AI Integrator',
                        desc: 'Six years of shipping real products — not prototypes. Browse by stack or explore everything: MERN applications, Laravel-powered platforms, and AI-integrated systems built for production. Each project here represents a problem solved, a client served, and a standard I hold myself to.'
                    },
                    'mern stack': {
                        title: 'MERN Stack Developer',
                        desc: 'I build full-featured web applications using MongoDB, Express, React, and Node.js — end to end. These projects range from real-time platforms and SaaS dashboards to REST API-driven applications with clean, responsive frontends. Every project is structured for maintainability and built to handle real users, not just demos.'
                    },
                    'laravel stack': {
                        title: 'Laravel Stack Developer',
                        desc: "Laravel is where I bring structure and elegance to backend-heavy projects. From multi-role admin panels and e-commerce platforms to custom CMS solutions and API backends — I leverage Laravel's ecosystem to ship reliable, well-architected applications fast. Clean MVC, robust authentication, optimized queries — no shortcuts."
                    },
                    'ai powered': {
                        title: 'AI-Powered Applications',
                        desc: "These are the projects I'm most proud of. I've built AI-powered tools that go beyond gimmicks — intelligent document processors, LLM-integrated SaaS features, OpenAI-driven automation pipelines, and smart search systems. Each one is engineered to solve a specific problem, with AI doing the heavy lifting behind the scenes."
                    }
                };

                const introSection = document.querySelector('.category-intro-section');
                if (introSection && categoryIntros[filterValue]) {
                    const titleEl = introSection.querySelector('.category-title');
                    const descEl = introSection.querySelector('.category-description');
                    
                    if (titleEl && descEl) {
                        // Subtle fade effect for text change
                        titleEl.style.opacity = '0';
                        descEl.style.opacity = '0';
                        
                        setTimeout(() => {
                            titleEl.textContent = categoryIntros[filterValue].title;
                            descEl.textContent = categoryIntros[filterValue].desc;
                            titleEl.style.opacity = '1';
                            descEl.style.opacity = '1';
                        }, 200);
                    }
                }

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

    // Calendar Date Selection
    const calendarDates = document.querySelectorAll('.calendar-date:not(.muted)');
    const continueBtn = document.querySelector('.btn-continue-slots');

    if (calendarDates.length > 0) {
        calendarDates.forEach(date => {
            date.addEventListener('click', () => {
                // Remove selected class from all dates
                calendarDates.forEach(d => d.classList.remove('selected', 'active'));
                calendarDates.forEach(d => {
                    const day = parseInt(d.getAttribute('data-day'));
                    const currentDay = new Date().getDate();
                    if (day > currentDay) d.classList.add('active');
                });

                // Add selected class to clicked date
                date.classList.remove('active');
                date.classList.add('selected');
                
                // Enable button or show feedback
                if (continueBtn) {
                    continueBtn.innerHTML = `Continue for May ${date.getAttribute('data-day')}`;
                    continueBtn.classList.add('pulse-animation');
                }
            });
        });
    }

    if (continueBtn) {
        continueBtn.addEventListener('click', () => {
            const selectedDate = document.querySelector('.calendar-date.selected');
            if (selectedDate) {
                const day = selectedDate.getAttribute('data-day').padStart(2, '0');
                const now = new Date();
                const year = now.getFullYear();
                const month = (now.getMonth() + 1).toString().padStart(2, '0');
                
                const calendlyUrl = `https://calendly.com/compilelogics/30min?month=${year}-${month}&date=${year}-${month}-${day}`;
                window.open(calendlyUrl, '_blank');
            } else {
                alert('Please select a date from the calendar first.');
            }
        });
    }
});
