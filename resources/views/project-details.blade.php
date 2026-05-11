@extends('layouts.app')

@section('title', $project->title . ' | Project Details')

@section('content')
    <x-navbar />

    <header class="portfolio-hero">
        <div class="portfolio-hero-bg">
            <img src="{{ asset('assets/portfolio-bg.webp') }}" alt="Project Background"
                onerror="this.src='https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&q=80&w=2000';">
            <div class="hero-overlay"></div>
        </div>
        <div class="container text-center">
            <div class="hero-content-wrapper mx-auto" style="min-height: 200px;">
            </div>
        </div>
    </header>

    <div class="page-gradient-wrapper">
        <main class="portfolio-main-content">
            <div class="container text-center">
                {{-- Only the main image of the project --}}
                <div class="project-single-mockup">
                    <img src="{{ asset($project->image) }}" alt="{{ $project->title }}" class="main-project-img">
                </div>
            </div>

            <div class="project-info-sections pt-5 mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Objective Section -->
                            @if($project->objective)
                            <div class="info-group mb-5">
                                <h2 class="info-title">Objective</h2>
                                <p class="info-text">
                                    {!! nl2br(e($project->objective)) !!}
                                </p>
                            </div>
                            @endif

                            <!-- Technical Highlights Section -->
                            @if($project->technical_highlights)
                            <div class="info-group mb-5">
                                <h2 class="info-title">Technical Highlights</h2>
                                <p class="info-text">
                                    {!! nl2br(e($project->technical_highlights)) !!}
                                </p>
                            </div>
                            @endif

                            <!-- Backend & Architecture Highlights Section -->
                            @if($project->architecture_highlights)
                            <div class="info-group mb-5">
                                <h2 class="info-title">Backend & Architecture Highlights</h2>
                                <p class="info-text">
                                    {!! nl2br(e($project->architecture_highlights)) !!}
                                </p>
                            </div>
                            @endif

                            <!-- Challenges & Solutions Section -->
                            @if($project->challenges)
                            <div class="info-group mb-5">
                                <h2 class="info-title">Challenges & Solutions</h2>
                                <p class="info-text">
                                    {!! nl2br(e($project->challenges)) !!}
                                </p>
                            </div>
                            @endif

                            <!-- Final Outcome Section -->
                            @if($project->outcome)
                            <div class="info-group mb-5">
                                <h2 class="info-title">Final Outcome</h2>
                                <p class="info-text">
                                    {!! nl2br(e($project->outcome)) !!}
                                </p>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <x-footer />
@endsection
