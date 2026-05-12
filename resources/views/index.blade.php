@extends('layouts.app')

@section('title', 'Hira | Portfolio - Full Stack Developer & AI Integrator')

@section('content')
    <x-perspective-grid />
    <x-navbar />

    <main class="hero">
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-lg-7 hero-content">
                    <div class="status-badge d-inline-flex align-items-center mb-4">
                        <span class="me-2">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L14.8 9.2L22 12L14.8 14.8L12 22L9.2 14.8L2 12L9.2 9.2L12 2Z"
                                    fill="currentColor" />
                            </svg>
                        </span>
                        Hira. is available for opportunity
                    </div>
                    <h1 class="hero-title mb-3">
                        Hi, I am <span class="highlight">Hira!</span>
                    </h1>
                    <h2 class="hero-subtitle mb-4">Full Stack Developer & AI Integrator</h2>
                    <p class="hero-description mb-5">
                        I build at the intersection of engineering and intelligence  scalable backends, sharp frontends, and AI that earns its place in the product.
                    </p>
                    <div class="hero-ctas d-flex gap-3">
                        <a href="{{ route('contact') }}" class="btn btn-primary-custom rounded-pill">
                            Lets Talk
                            <div class="icon-circle">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="7" y1="17" x2="17" y2="7"></line>
                                    <polyline points="7 7 17 7 17 17"></polyline>
                                </svg>
                            </div>
                        </a>
                        <a href="#resume" class="btn btn-outline-secondary-custom rounded-pill">My Resume</a>
                    </div>
                </div>

                <div class="col-lg-5 position-relative">
                    <div class="hero-visuals">
                        <img src="{{ asset('assets/floating_cubes.webp') }}" alt="3D Visuals" class="main-visual"
                            onerror="this.style.display='none'">
                    </div>
                </div>
            </div>
        </div>

        <div class="hero-footer">
            <div class="container d-flex justify-content-between align-items-center">
                <div class="footer-item">Full Stack</div>
                <div class="footer-item">Ai Solutions</div>
                <div class="footer-item">Cloud DevOps</div>
                <div class="footer-item">Ai Automation</div>
            </div>
        </div>
    </main>

    <section class="portfolio-section">
        <div class="container">
            <div class="portfolio-wrapper position-relative">
                <!-- Carousel Controls -->
                <button class="carousel-control-prev-custom">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="carousel-control-next-custom">
                    <i class="fas fa-chevron-right"></i>
                </button>

                <!-- Laptop Mockup -->
                <div class="laptop-mockup">
                    <div class="laptop-screen">
                        <div class="laptop-content">
                            <div class="swiper portfolio-laptop-swiper">
                                <div class="swiper-wrapper">
                                    @foreach($featuredProjects as $project)
                                        <div class="swiper-slide">
                                            <a href="{{ route('project.details', $project->slug) }}">
                                                <img src="{{ asset($project->image) }}" alt="{{ $project->title }}">
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="laptop-base"></div>
                </div>

                <!-- Pagination & View All -->
                <div class="portfolio-footer d-flex justify-content-center align-items-center mt-5 position-relative">
                    <div class="pagination-dots d-flex gap-2"></div>
                    <a href="{{ route('portfolio') }}" class="btn-view-all">View all</a>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section" id="about">
        <div class="container py-5">
            <div class="row align-items-center">
                <!-- Left Side: Content -->
                <div class="col-xl-6 about-content">
                    <span class="section-badge mb-3">About Me</span>
                    <h2 class="section-title mb-4">Full Stack Developer & Ai Integrator</h2>
                    <p class="about-text mb-5">Full Stack Developer & AI Integrator with 6+ years of experience building scalable, high-performance web applications and modern SaaS platforms. Specialized in React, Next.js, Node.js, Laravel, FastAPI, and AI-powered systems, with strong expertise in backend architecture, API integrations, cloud solutions, and performance optimization. Focused on developing reliable, intelligent, and production-ready digital products that combine clean user experiences with scalable engineering.</p>

                    <a href="#" class="btn-resume mb-5">
                        Download Resume <span class="arrow-circle"><i class="fa-solid fa-arrow-up"></i></span>
                    </a>

                    <div class="stats-row d-flex gap-4">
                        <div class="stat-card">
                            <h3>06<span class="plus">+</span></h3>
                            <p>Years of experience</p>
                        </div>
                        <div class="stat-card">
                            <h3>500<span class="plus">+</span></h3>
                            <p>Projects</p>
                        </div>
                        <div class="stat-card">
                            <h3>150<span class="plus">+</span></h3>
                            <p>Happy Client</p>
                        </div>
                    </div>
                </div>

                <!-- Right Side: Visuals -->
                <div class="col-xl-6 position-relative">
                    <div class="about-visuals-container">
                        <!-- Decorative Circles -->
                        <div class="decor-circle circle-1"></div>
                        <div class="decor-circle circle-2"></div>
                        <div class="decor-circle circle-3"></div>

                        <!-- Images -->
                        <img src="{{ asset('assets/39c24f636dc8698dee2404fefec198c265d1d5a5.webp') }}" alt="Tech Orb"
                            class="img-tech-orb">
                        <img src="{{ asset('assets/e08adf0bfaaa61b41b525d634997e8c8390b6d1f.webp') }}" alt="Floating Laptop"
                            class="img-floating-laptop">

                        <!-- Social Card -->
                        <div class="about-social-card text-center">
                            <h5 class="mb-3">Where to find me</h5>
                            <div class="social-icons-row d-flex gap-2 justify-content-center">
                                <a href="https://github.com/HiraZahid123" target="_blank" class="social-box"><i class="fab fa-github"></i></a>
                                <a href="https://www.linkedin.com/in/hira-zahid-2635a558/" target="_blank" class="social-box"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-section" id="services">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-12 section-header-padding">
                    <span class="section-badge mb-3">Services</span>
                    <h2 class="section-title mb-3">My Specialties</h2>
                    <p class="about-text">Every service I offer is built around one goal: solving real problems with technology that's precise, scalable, and built to last.</p>
                </div>
            </div>
            <div class="row g-4">
                <!-- Service 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon mb-4">
                            <i class="fa-solid fa-code"></i>
                        </div>
                        <h4 class="service-title mb-3">Full Stack Development & AI Integration</h4>
                        <p class="service-desc">I architect and ship complete web applications from database to deployment. Every layer is built with performance in mind, and AI is wired in where it creates genuine value, not just for show.</p>
                    </div>
                </div>
                <!-- Service 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon mb-4">
                            <i class="fa-solid fa-brain"></i>
                        </div>
                        <h4 class="service-title mb-3">AI Integration & Neural Networks</h4>
                        <p class="service-desc">I integrate large language models, OpenAI APIs, and custom AI pipelines directly into your product. The result isn't a chatbot bolted on it's intelligence embedded into your core workflow.</p>
                    </div>
                </div>
                <!-- Service 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon mb-4">
                            <i class="fa-solid fa-mobile-screen-button"></i>
                        </div>
                        <h4 class="service-title mb-3">Responsive Web & App Design</h4>
                        <p class="service-desc">Clean, fast, and built for every screen. I design and develop interfaces that feel native whether your users are on desktop, tablet, or mobile with zero compromise on experience.</p>
                    </div>
                </div>
                <!-- Service 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon mb-4">
                            <i class="fa-solid fa-layer-group"></i>
                        </div>
                        <h4 class="service-title mb-3">Architecture & Cloud Solutions</h4>
                        <p class="service-desc">From multi-tenant SaaS infrastructure to serverless deployments, I design backend architectures that handle scale without breaking a sweat. Built for growth from day one.</p>
                    </div>
                </div>
                <!-- Service 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon mb-4">
                            <i class="fa-solid fa-database"></i>
                        </div>
                        <h4 class="service-title mb-3">Database Design & Optimization</h4>
                        <p class="service-desc">Well-structured data is the foundation of every fast product. I design relational and NoSQL schemas, optimize slow queries, and build data layers that stay reliable under real traffic.</p>
                    </div>
                </div>
                <!-- Service 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon mb-4">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <h4 class="service-title mb-3">Technical Consultation & Security</h4>
                        <p class="service-desc">Before you build or scale, get it right. I review architectures, identify bottlenecks, audit security vulnerabilities, and give you a concrete roadmap not vague advice.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 section-header-padding">
                    <span class="section-badge mb-3">Testimonials</span>
                    <h2 class="section-title mb-3">My Happy Clients</h2>
                    <p class="about-text">What our clients say about us</p>
                </div>
            </div>

            <div class="swiper testimonials-swiper pb-5">
                <div class="swiper-wrapper">
                    <!-- Testimonial 1 -->
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-card-rim"></div>
                            <div class="quote-icon">“</div>
                            <p class="testimonial-text">Working with Hira has been one of the best experiences I've had. She is not only a highly skilled full-stack developer, but also a truly professional and pleasant person to collaborate with. She wrote clean, well-structured code and delivered above expectations.</p>
                            <div class="client-info">
                                <div class="client-img">
                                    <img src="https://i.pravatar.cc/150?img=32" alt="Client">
                                </div>
                                <h5 class="client-name">Client</h5>
                                <p class="client-role">SaaS Founder & Product Owner</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 2 -->
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-card-rim"></div>
                            <div class="quote-icon">“</div>
                            <p class="testimonial-text">Hira is one of the strongest freelancers I've worked with. She moves quickly, understands the objective without over-explanation, and consistently delivers high-quality work. Communication is clear, and She steps up when things get complex.</p>
                            <div class="client-info">
                                <div class="client-img">
                                    <img src="https://i.pravatar.cc/150?img=44" alt="Client">
                                </div>
                                <h5 class="client-name">Client</h5>
                                <p class="client-role">Media Workflow Solutions</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 3 -->
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-card-rim"></div>
                            <div class="quote-icon">“</div>
                            <p class="testimonial-text">I can't recommend Hira enough. She does not only do her job perfectly and professionally, she also goes the extra mile to give recommendations and explains everything. She is very easy to work with and always ready to understand!</p>
                            <div class="client-info">
                                <div class="client-img">
                                    <img src="https://i.pravatar.cc/150?img=53" alt="Client">
                                </div>
                                <h5 class="client-name">Client</h5>
                                <p class="client-role">Web Platform Architect</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 4 -->
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-card-rim"></div>
                            <div class="quote-icon">“</div>
                            <p class="testimonial-text">Outstanding work—completed the job beyond our expectations. Professional, efficient, and great communication throughout. We will definitely hire again. Highly recommended!</p>
                            <div class="client-info">
                                <div class="client-img">
                                    <img src="https://i.pravatar.cc/150?img=60" alt="Client">
                                </div>
                                <h5 class="client-name">Client</h5>
                                <p class="client-role">Web Development Client</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 5 -->
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-card-rim"></div>
                            <div class="quote-icon">“</div>
                            <p class="testimonial-text">hira did an excellent job creating my medical website. constant communication. wonderful result. A+. will hire her again in the future!</p>
                            <div class="client-info">
                                <div class="client-img">
                                    <img src="https://i.pravatar.cc/150?img=15" alt="Client">
                                </div>
                                <h5 class="client-name">Client</h5>
                                <p class="client-role">Medical Professional</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 6 -->
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-card-rim"></div>
                            <div class="quote-icon">“</div>
                            <p class="testimonial-text">I thought Hira was extremely professional, timely and responsive and applied accurate detail to requests and queries. I highly recommend Hira.</p>
                            <div class="client-info">
                                <div class="client-img">
                                    <img src="https://i.pravatar.cc/150?img=22" alt="Client">
                                </div>
                                <h5 class="client-name">Client</h5>
                                <p class="client-role">Vercel & Next.js Project</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 7 -->
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-card-rim"></div>
                            <div class="quote-icon">“</div>
                            <p class="testimonial-text">Hira and her team were wonderful to work with and the project was completed to my (fairly exacting!) standards on time with no issues whatsoever. I recommend Hira without reservation.</p>
                            <div class="client-info">
                                <div class="client-img">
                                    <img src="https://i.pravatar.cc/150?img=33" alt="Client">
                                </div>
                                <h5 class="client-name">Client</h5>
                                <p class="client-role">Full Stack & AI Development</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pagination -->
                <div class="swiper-pagination testimonial-pagination"></div>
            </div>
        </div>
    </section>

    <x-footer />
@endsection
