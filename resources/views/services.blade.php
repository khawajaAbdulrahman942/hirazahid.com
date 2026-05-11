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
                <p class="portfolio-hero-desc mx-auto">Providing high-end digital solutions that combine cutting-edge technology with intuitive design to help your business grow.</p>
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
                        <p class="about-text">Comprehensive technical solutions tailored to your business needs.</p>
                    </div>
                </div>
                <div class="row g-4 mb-5 pb-5">
                    <!-- Service 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-icon mb-4">
                                <i class="fa-solid fa-code"></i>
                            </div>
                            <h4 class="service-title mb-3">Full Stack Developer & Ai Integrator</h4>
                            <p class="service-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate
                                libero et velit interdum, ac aliquet odio mattis.</p>
                        </div>
                    </div>
                    <!-- Service 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-icon mb-4">
                                <i class="fa-solid fa-brain"></i>
                            </div>
                            <h4 class="service-title mb-3">AI Integration & Neural Networks</h4>
                            <p class="service-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate
                                libero et velit interdum, ac aliquet odio mattis.</p>
                        </div>
                    </div>
                    <!-- Service 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-icon mb-4">
                                <i class="fa-solid fa-mobile-screen-button"></i>
                            </div>
                            <h4 class="service-title mb-3">Responsive Web & App Design</h4>
                            <p class="service-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate
                                libero et velit interdum, ac aliquet odio mattis.</p>
                        </div>
                    </div>
                    <!-- Service 4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-icon mb-4">
                                <i class="fa-solid fa-layer-group"></i>
                            </div>
                            <h4 class="service-title mb-3">Architecture & Cloud Solutions</h4>
                            <p class="service-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate
                                libero et velit interdum, ac aliquet odio mattis.</p>
                        </div>
                    </div>
                    <!-- Service 5 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-icon mb-4">
                                <i class="fa-solid fa-database"></i>
                            </div>
                            <h4 class="service-title mb-3">Database Design & Optimization</h4>
                            <p class="service-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate
                                libero et velit interdum, ac aliquet odio mattis.</p>
                        </div>
                    </div>
                    <!-- Service 6 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-icon mb-4">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>
                            <h4 class="service-title mb-3">Technical Consultation & Security</h4>
                            <p class="service-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate
                                libero et velit interdum, ac aliquet odio mattis.</p>
                        </div>
                    </div>
                </div>

                <!-- New Detail Section -->
                <div class="services-detail-section pt-5">
                    <h2 class="category-title mb-4">Full Stack Developer & Ai Integrator</h2>
                    <div class="detail-content">
                        <p class="category-description mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent auctor purus luctus enim egestas, ac scelerisque ante pulvinar. Donec ut rhoncus ex. Suspendisse ac rhoncus nisl, eu tempor urna. Curabitur vel bibendum lorem. Morbi convallis convallis diam sit amet lacinia. Aliquam in elementum tellus.</p>
                        
                        <p class="category-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent auctor purus luctus enim egestas, ac scelerisque ante pulvinar.</p>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <x-footer />
@endsection
