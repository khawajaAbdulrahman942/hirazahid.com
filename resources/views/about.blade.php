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
            <div class="container-fluid">
                <div class="about-detail-wrapper">
                    <span class="portfolio-badge-alt mb-4">About Me</span>
                    <h2 class="category-title mb-5">Full Stack Developer & Ai Integrator</h2>

                    <div class="about-text-content mb-5">
                        <p class="category-description mb-4">I build scalable full-stack applications with a strong focus on performance, reliability, and modern user experience. With over six years of experience across React, Next.js, Node.js, Laravel, and FastAPI, I specialize in developing high-quality digital products backed by clean architecture and efficient backend systems.</p>
                        <p class="category-description mb-4">My expertise extends into AI-powered product development, where I integrate OpenAI and LLM technologies into real-world SaaS platforms, automation systems, and intelligent workflows. I approach AI as a core product capability supported by scalable APIs, cloud infrastructure, and optimized MongoDB and SQL database architectures.</p>
                        <p class="category-description">I bring a problem-solving mindset to every project, whether it involves building scalable multi-tenant platforms, optimizing application performance, or engineering intelligent features that deliver measurable value. Focused on precision, scalability, and long-term maintainability, I develop solutions designed to perform in real-world production environments.</p>
                    </div>

                    <div class="about-footer-row d-flex flex-wrap align-items-center gap-4 gap-lg-5 pt-4">
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
                        <p class="category-description mb-5">Delivering modern software solutions across web development, AI automation, SaaS platforms, and scalable backend systems. Focused on building reliable digital products with clean architecture, optimized performance, and intelligent user experiences.</p>

                        <div class="experience-list">
                            <!-- Experience 1: Content Arcade -->
                            <div class="experience-item row mb-5">
                                <div class="col-md-3">
                                    <img src="{{ asset('assets/302322705_461750719301821_1928132574746980306_n_360.webp') }}" alt="Content Arcade" class="img-fluid exp-logo">
                                </div>
                                <div class="col-md-9">
                                    <h4 class="text-white mb-2" style="font-weight: 600;">Content Arcade (Oct 2019 – Dec 2023)</h4>
                                    <p class="category-description">Spent 4+ years at Content Arcade engineering full stack web products from the ground up using PHP, Laravel, React, and modern JavaScript frameworks building SaaS platforms, MVPs, admin panels, and role-based dashboards, designing scalable backend APIs, converting Figma/PSD/XD designs into responsive production interfaces, integrating third-party APIs and payment gateways, and managing full deployment cycles including server configuration, security hardening, and performance optimization.</p>
                                </div>
                            </div>

                            <!-- Experience 2: Upwork -->
                            <div class="experience-item row mb-5">
                                <div class="col-md-3">
                                    <img src="{{ asset('assets/upwork-logo.svg_720.webp') }}" alt="Upwork" class="img-fluid exp-logo">
                                </div>
                                <div class="col-md-9">
                                    <h4 class="text-white mb-2" style="font-weight: 600;">Upwork Current Profile</h4>
                                    <p class="category-description">I'm a Full Stack Developer specializing in Laravel and the MERN stack, helping startups and product teams build scalable SaaS platforms, MVPs, and custom web applications from architecture to deployment with a strong focus on clean API design, responsive frontends with React and Next.js, robust backend systems with Node.js and Laravel, and seamless third-party integrations.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Skills Section -->
                    <div class="skills-section mt-5 pt-5">
                        <h2 class="category-title mb-4">Skills</h2>
                        <p class="category-description mb-5">My technical foundation spans the full spectrum of modern development from building responsive, high-performance frontends with React and Next.js to engineering scalable backend architectures in Node.js, Laravel, and FastAPI. I specialize in AI/LLM integration using OpenAI APIs, performance optimization across distributed systems, and deploying production-ready cloud solutions. Every skill I've built is in service of one goal: shipping software that solves real problems, at scale.</p>

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
