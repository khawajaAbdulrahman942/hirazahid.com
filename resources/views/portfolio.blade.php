@extends('layouts.app')

@section('title', 'Portfolio | Hira - Full Stack Developer')

@section('content')
    <x-navbar />

    <header class="portfolio-hero">
        <div class="portfolio-hero-bg">
            <img src="{{ asset('assets/portfolio-bg.webp') }}" alt="Portfolio Background"
                onerror="this.src='https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&q=80&w=2000';">
            <div class="hero-overlay"></div>
        </div>
        <div class="container text-center">
            <div class="hero-content-wrapper mx-auto">
                <h1 class="portfolio-hero-title">My <span>Portfolio</span></h1>
                <p class="portfolio-hero-desc mx-auto">Building smart, scalable applications by blending full-stack
                    development with AI to create efficient, real-world solutions.</p>
            </div>
        </div>
    </header>

    <div class="page-gradient-wrapper">
        <main class="portfolio-main-content">
            <div class="container">
                <div class="portfolio-intro mb-5">
                    <span class="portfolio-badge-alt">Portfolio</span>
                    <h2 class="portfolio-main-heading">Projects that reflect my expertise and vision</h2>

                    <div class="filter-section mt-4">
                        <div class="filter-container justify-content-start">
                            <button class="filter-btn active" data-category="all">ALL</button>
                            <button class="filter-btn" data-category="mern stack">MERN STACK</button>
                            <button class="filter-btn" data-category="laravel stack">LARAVEL STACK</button>
                            <button class="filter-btn" data-category="ai powered">AI POWERED</button>
                        </div>
                    </div>

                    <div class="category-intro-section mt-5 mb-5">
                        <h2 class="category-title">Full Stack Developer & AI Integrator</h2>
                        <p class="category-description">Six years of shipping real products — not prototypes. Browse by stack or explore everything: MERN applications, Laravel-powered platforms, and AI-integrated systems built for production. Each project here represents a problem solved, a client served, and a standard I hold myself to.</p>
                    </div>
                </div>

                <div class="project-grid">
                    @foreach($projects as $project)
                        <a href="{{ route('project.details', $project->slug) }}" class="project-card" data-category="{{ strtolower($project->category) }}">
                            <div class="project-img-wrapper">
                                <img src="{{ asset($project->image) }}" alt="{{ $project->title }}">
                            </div>
                            <div class="project-content">
                                <span class="project-category">{{ strtoupper($project->category) }}</span>
                                <h3 class="project-name">{{ $project->title }}</h3>
                                <div class="project-arrow">
                                    <i class="fa-solid fa-arrow-up"></i>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </main>
    </div>

    <x-footer />
@endsection
