@extends('layouts.app')

@section('title', 'About Me | Hira - Full Stack Developer')

@section('content')
    <x-navbar />

    <header class="portfolio-hero">
        <div class="portfolio-hero-bg">
            <img src="{{ asset('assets/portfolio-bg.webp') }}" alt="About Background"
                onerror="this.src='https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&q=80&w=2000';">
            <div class="hero-overlay"></div>
        </div>
        <div class="container text-center">
            <div class="hero-content-wrapper mx-auto">
                <h1 class="portfolio-hero-title">About <span>Me</span></h1>
                <p class="portfolio-hero-desc mx-auto">Discover the journey, skills, and vision behind my work as a Full
                    Stack Developer and AI Integrator.</p>
            </div>
        </div>
    </header>

    <div class="page-gradient-wrapper">
        <main class="portfolio-main-content">
            <div class="container">
                <div class="about-detail-wrapper">
                    <span class="portfolio-badge-alt mb-4">About Me</span>
                    <h2 class="category-title mb-5">Full Stack Developer & Ai Integrator</h2>

                    <div class="about-text-content mb-5">
                        <p class="category-description mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                            eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan,
                            risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum
                            velit, sit amet feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia
                            nostra, per inceptos himenaeos. Praesent auctor purus luctus enim egestas, ac scelerisque ante
                            pulvinar. Donec ut rhoncus ex. Suspendisse ac rhoncus nisl, eu tempor urna. Curabitur vel
                            bibendum lorem. Morbi convallis convallis diam sit amet lacinia. Aliquam in elementum tellus.
                        </p>

                        <p class="category-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                            vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad
                            litora torquent per conubia nostra, per inceptos himenaeos.</p>
                    </div>

                    <div class="about-footer-row d-flex align-items-center gap-5 pt-4">
                        <div class="experience-stat d-flex align-items-center gap-4">
                            <div class="stat-item">
                                <span class="stat-label d-block mb-0 pb-0"
                                    style="color: var(--primary-color); font-size: 1.5rem; letter-spacing: 1px;">Since</span>
                                <h3 class="stat-value m-0"
                                    style="font-size:4.5rem; font-weight: 500; color: white; padding-bottom:40px;">
                                    2020
                                </h3>
                            </div>
                            <div class="stat-item">
                                <h3 class="stat-value m-0" style="font-size: 2.5rem; font-weight: 500; color: white;"><span
                                        style="color: var(--primary-color);">6</span> Years</h3>
                                <span class="stat-label d-block" style="font-size: 1rem; letter-spacing: 6px;">of
                                    Experience</span>
                            </div>
                        </div>

                        <a href="#" class="btn-resume-custom">
                            Download Resume
                            <div class="btn-arrow-circle">
                                <i class="fa-solid fa-arrow-up"></i>
                            </div>
                        </a>
                    </div>

                    <!-- Experience Section -->
                    <div class="experience-section mt-5 pt-5">
                        <h2 class="category-title mb-4">Experience</h2>
                        <p class="category-description mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                        <div class="experience-list">
                            <!-- Experience 1: Systems -->
                            <div class="experience-item row align-items-start mb-5">
                                <div class="col-md-3">
                                    <h3 class="systems-logo">systems</h3>
                                </div>
                                <div class="col-md-9">
                                    <p class="category-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                </div>
                            </div>

                            <!-- Experience 2: Arpatech -->
                            <div class="experience-item row align-items-start mb-5">
                                <div class="col-md-3">
                                    <img src="{{ asset('assets/arpatech.webp') }}" alt="Arpatech" class="img-fluid exp-logo">
                                </div>
                                <div class="col-md-9">
                                    <p class="category-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                </div>
                            </div>

                            <!-- Experience 3: Grownix -->
                            <div class="experience-item row align-items-start mb-5">
                                <div class="col-md-3">
                                    <img src="{{ asset('assets/grownix.webp') }}" alt="Grownix" class="img-fluid exp-logo grownix-logo">
                                </div>
                                <div class="col-md-9">
                                    <p class="category-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Skills Section -->
                    <div class="skills-section mt-5 pt-5">
                        <h2 class="category-title mb-4">Skills</h2>
                        <p class="category-description mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus.</p>

                        <div class="row g-5">
                            <div class="col-md-6">
                                <div class="skill-item mb-4">
                                    <div class="skill-header d-flex justify-content-between mb-2">
                                        <span class="skill-name">Laravel / PHP</span>
                                        <span class="skill-percent">95%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="skill-fill" style="width: 95%;"></div>
                                    </div>
                                </div>
                                <div class="skill-item mb-4">
                                    <div class="skill-header d-flex justify-content-between mb-2">
                                        <span class="skill-name">Node.js / Express</span>
                                        <span class="skill-percent">88%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="skill-fill" style="width: 88%;"></div>
                                    </div>
                                </div>
                                <div class="skill-item mb-4">
                                    <div class="skill-header d-flex justify-content-between mb-2">
                                        <span class="skill-name">OpenAI / LLM Integration</span>
                                        <span class="skill-percent">85%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="skill-fill" style="width: 85%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skill-item mb-4">
                                    <div class="skill-header d-flex justify-content-between mb-2">
                                        <span class="skill-name">React / Next.js</span>
                                        <span class="skill-percent">92%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="skill-fill" style="width: 92%;"></div>
                                    </div>
                                </div>
                                <div class="skill-item mb-4">
                                    <div class="skill-header d-flex justify-content-between mb-2">
                                        <span class="skill-name">MongoDB / SQL</span>
                                        <span class="skill-percent">90%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="skill-fill" style="width: 90%;"></div>
                                    </div>
                                </div>
                                <div class="skill-item mb-4">
                                    <div class="skill-header d-flex justify-content-between mb-2">
                                        <span class="skill-name">Python / FastAPI</span>
                                        <span class="skill-percent">80%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="skill-fill" style="width: 80%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <x-footer />
@endsection
