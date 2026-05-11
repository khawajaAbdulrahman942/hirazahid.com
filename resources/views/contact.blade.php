@extends('layouts.app')

@section('title', 'Contact Me | Hira - Full Stack Developer')

@section('content')
    <x-navbar />

    <header class="portfolio-hero">
        <div class="portfolio-hero-bg">
            <img src="{{ asset('assets/portfolio-bg.webp') }}" alt="Contact Background"
                onerror="this.src='https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&q=80&w=2000';">
            <div class="hero-overlay"></div>
        </div>
        <div class="container text-center">
            <div class="hero-content-wrapper mx-auto">
                <h1 class="portfolio-hero-title">Contact <span>Me</span></h1>
                <p class="portfolio-hero-desc mx-auto">Have a project in mind? Let's discuss how we can bring your
                    vision to life with cutting-edge technology.</p>
            </div>
        </div>
    </header>

    <div class="page-gradient-wrapper">
        <main class="portfolio-main-content">
            <div class="container">
                <div class="row g-4">
                    <!-- Left: Contact Form Card -->
                    <div class="col-lg-8">
                        <div class="contact-form-outer">
                            <div class="contact-form-card">
                                <h2 class="contact-card-title mb-2">Get in touch</h2>
                                <p class="contact-card-subtitle mb-4">We are here for you! How can we help?</p>

                                @if (session('success'))
                                    <div class="alert alert-success bg-success text-white border-0 rounded-4 mb-4">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <form action="{{ route('contact.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label text-white small">Name</label>
                                        <input type="text" name="name" class="form-control glass-input @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label text-white small">Email</label>
                                        <input type="email" name="email" class="form-control glass-input @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label text-white small">Message</label>
                                        <textarea name="message" class="form-control glass-input @error('message') is-invalid @enderror" rows="4" required>{{ old('message') }}</textarea>
                                        @error('message')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn-resume-custom">
                                            Send Message
                                            <div class="btn-arrow-circle">
                                                <i class="fa-solid fa-arrow-up"></i>
                                            </div>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Info Cards -->
                    <div class="col-lg-4">
                        <!-- Physical Address -->
                        <div class="contact-info-card mb-4">
                            <div class="d-flex align-items-start gap-4">
                                <div class="contact-icon-box">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div>
                                    <span class="contact-info-label">PHYSICAL ADDRESS</span>
                                    <p class="contact-info-text mb-0">Madina Town, Faisalabad<br>Punjab, 38000<br>Pakistan</p>
                                </div>
                            </div>
                        </div>

                        <!-- Phone & Socials -->
                        <div class="contact-info-card mb-4">
                            <div class="d-flex align-items-start gap-4 mb-5">
                                <div class="contact-icon-box">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div>
                                    <span class="contact-info-label">PHONE NUMBER</span>
                                    <p class="contact-info-text mb-1">+92 92 301 7866911</p>
                                    <span class="contact-hours">Mon - Fri, 9am - 6pm PKT</span>
                                </div>
                            </div>

                            <hr style="border-color: rgba(255,255,255,0.15); margin: 2.5rem 0; opacity: 1;">

                            <div>
                                <span class="contact-info-label mb-4">SOCIAL MEDIA PROFILES</span>
                                <div class="d-flex gap-3">
                                    <a href="https://github.com/HiraZahid123" class="contact-social-icon"><i class="fab fa-github"></i></a>
                                    <a href="https://www.linkedin.com/in/hira-zahid-2635a558/" class="contact-social-icon"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Map -->
                        <div class="contact-map-card">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54452.9231885567!2d73.0761266!3d31.4175323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x392242a8b9f1d0ef%3A0x628456a334e70e93!2sMadina%20Town%2C%20Faisalabad%2C%20Punjab!5e0!3m2!1sen!2s!4v1715421500000!5m2!1sen!2s"
                                width="100%" height="200"
                                style="border:0; border-radius: 20px; filter: invert(90%) hue-rotate(180deg) saturate(0.3) brightness(0.6);"
                                allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <section class="scheduling-section py-5">
            <div class="container">
                <div class="scheduling-card">
                    <div class="row g-0">
                        <!-- Left: Discovery Call Info -->
                        <div class="col-lg-4 discovery-info-col">
                            <div class="discovery-content">
                                <span class="contact-info-label mb-3">DISCOVERY CALL</span>
                                <h3 class="text-white fw-bold mb-4">Technical<br>Architecture Review</h3>

                                <div class="d-flex align-items-center gap-2 mb-4 small">
                                    <i class="fa-regular fa-clock" style="color: #71717A;"></i>
                                    <span style="color: #71717A;">45 minutes</span>
                                </div>

                                <p class="small mb-5" style="line-height: 1.8; color: #71717A;">
                                    Discuss your infrastructure requirements, scaling challenges, and how TechCore can
                                    optimize your deployment strategy.
                                </p>

                                <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                                    <li class="d-flex align-items-center gap-3 text-white small">
                                        <i class="fa-solid fa-video" style="color: #9719FD;"></i>
                                        <span>Google Meet / Zoom</span>
                                    </li>
                                    <li class="d-flex align-items-center gap-3 text-white small">
                                        <i class="fa-solid fa-globe" style="color: #9719FD;"></i>
                                        <span>Global (All Timezones)</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Right: Calendar Interface -->
                        <div class="col-lg-8 calendar-col">
                            <div class="calendar-wrapper">
                                <div class="calendar-header d-flex justify-content-between align-items-center mb-5">
                                    <h4 class="text-white mb-0">{{ date('F Y') }}</h4>
                                    <div class="calendar-nav d-flex gap-4">
                                        <i class="fa-solid fa-chevron-left text-muted cursor-pointer"></i>
                                        <i class="fa-solid fa-chevron-right text-muted cursor-pointer"></i>
                                    </div>
                                </div>

                                <div class="calendar-grid">
                                    <!-- Days Header -->
                                    <div class="calendar-day-label">MON</div>
                                    <div class="calendar-day-label">TUE</div>
                                    <div class="calendar-day-label">WED</div>
                                    <div class="calendar-day-label">THU</div>
                                    <div class="calendar-day-label">FRI</div>
                                    <div class="calendar-day-label">SAT</div>
                                    <div class="calendar-day-label text-center">SUN<br><span>N</span></div>

                                    @php
                                        $today = new DateTime();
                                        $month = (int)$today->format('m');
                                        $year = (int)$today->format('Y');
                                        
                                        $firstDayOfMonth = new DateTime("$year-$month-01");
                                        $daysInMonth = (int)$firstDayOfMonth->format('t');
                                        $startDayOfWeek = (int)$firstDayOfMonth->format('N'); // 1 (Mon) to 7 (Sun)
                                        
                                        // Previous month days to show
                                        $prevMonth = clone $firstDayOfMonth;
                                        $prevMonth->modify('-1 month');
                                        $daysInPrevMonth = (int)$prevMonth->format('t');
                                        $prevMonthDaysToShow = $startDayOfWeek - 1;
                                        
                                        $currentDay = (int)$today->format('d');
                                    @endphp

                                    <!-- Previous Month Dates -->
                                    @for ($i = $prevMonthDaysToShow - 1; $i >= 0; $i--)
                                        <div class="calendar-date muted">{{ $daysInPrevMonth - $i }}</div>
                                    @endfor

                                    <!-- Current Month Dates -->
                                    @for ($day = 1; $day <= $daysInMonth; $day++)
                                        @php
                                            $classes = ['calendar-date'];
                                            if ($day == $currentDay) $classes[] = 'selected';
                                            elseif ($day > $currentDay) $classes[] = 'active';
                                        @endphp
                                        <div class="{{ implode(' ', $classes) }}" data-day="{{ $day }}">{{ $day }}</div>
                                    @endfor

                                    <!-- Next Month Dates -->
                                    @php
                                        $totalCells = 35; // Standard 5-row grid
                                        $remainingCells = $totalCells - ($prevMonthDaysToShow + $daysInMonth);
                                        if ($remainingCells < 0) $remainingCells += 7; // Handle 6-row months
                                    @endphp
                                    @for ($i = 1; $i <= $remainingCells; $i++)
                                        <div class="calendar-date muted">{{ $i }}</div>
                                    @endfor
                                </div>

                                <div class="text-center mt-5">
                                    <button class="btn btn-primary rounded-pill px-5 py-3 fw-bold btn-continue-slots"
                                        style="background: var(--primary-color); border: none; font-size: 0.9rem;">
                                        Continue to Time Slots
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <x-footer />
@endsection
