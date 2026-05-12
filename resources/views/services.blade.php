@extends('layouts.app')

@section('title', 'Services | Hira - Full Stack Developer')

@section('content')
    <x-navbar />

    <header class="portfolio-hero">
        <div class="portfolio-hero-bg">
            <img src="{{ asset('assets/portfolio-bg.webp') }}" alt="Services Background"
                onerror="this.src='https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&q=80&w=2000';">
            <div class="hero-overlay"></div>
        </div>
        <div class="container text-center">
            <div class="hero-content-wrapper mx-auto">
                <h1 class="portfolio-hero-title">My <span>Services</span></h1>
                <p class="portfolio-hero-desc mx-auto">I deliver end-to-end digital solutions combining sharp engineering, intelligent systems, and clean design to build products that perform.</p>
            </div>
        </div>
    </header>

    <div class="page-gradient-wrapper">
        <main class="portfolio-main-content">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 section-header-padding">
                        <span class="section-badge mb-3">Services</span>
                        <h2 class="section-title mb-3">My Specialties</h2>
                        <p class="about-text">Every service I offer is built around one goal: solving real problems with technology that's precise, scalable, and built to last.</p>
                    </div>
                </div>
                <div class="row g-4 mb-5 pb-5">
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

                <!-- New Detail Section -->
                <div class="services-detail-section pt-5">
                    <h2 class="category-title mb-4">Full Stack Developer & AI Integrator</h2>
                    <div class="detail-content">
                        <p class="category-description mb-4">I've spent six years building products across industries SaaS platforms, automation tools, AI-powered applications, and everything in between. What I bring to every project isn't just technical skill; it's ownership. I treat your product like it's mine.</p>
                        <p class="category-description">If you need someone who can take a brief and turn it into a live, scalable, intelligent system without back-and-forth and without shortcuts that's exactly what I do. Clean code, smart architecture, and delivery you can depend on.</p>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <x-footer />
@endsection
