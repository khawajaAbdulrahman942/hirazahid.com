<footer class="footer-site py-5">
    <div class="container">
        <div class="row">
            <!-- Column 1: Logo & Info -->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <a href="{{ route('home') }}" class="footer-logo mb-4 d-inline-block">HIRA<span>.</span></a>
                <p class="footer-desc">Transforming Complex Challenges Into Intelligent Digital Solutions</p>
            </div>

            <!-- Column 2: Navigation -->
            <div class="col-lg-2 mb-5 mb-lg-0">
                <h5 class="footer-heading mb-4">NAVIGATION</h5>
                <ul class="footer-links list-unstyled">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                    <li><a href="{{ route('services') }}">Services</a></li>
                </ul>
            </div>

            <!-- Column 3: Contact & Socials -->
            <div class="col-lg-3 mb-5 mb-lg-0">
                <h5 class="footer-heading mb-4">TALK TO US</h5>
                <div class="footer-contact-info mb-4">
                    <a href="mailto:hira.zahid123@gmail.com" class="footer-contact-link d-block mb-2">hira.zahid123@gmail.com</a>
                    <a href="tel:+923017866911" class="footer-contact-link">+92 301 7866911</a>
                </div>
                <div class="footer-social-icons d-flex gap-3">
                    <a href="https://github.com/HiraZahid123" target="_blank" class="social-box"><i class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/hira-zahid-2635a558/" target="_blank" class="social-box"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <!-- Column 4: Mascot -->
            <div class="col-lg-3 text-center text-lg-end">
                <div class="footer-robot-wrapper">
                    <img src="{{ asset('assets/Clippathgroup.webp') }}" alt="Robot Mascot" class="footer-robot-img img-fluid">
                </div>
            </div>
        </div>

        <div class="footer-bottom-bar mt-5 pt-4 text-center">
            <p class="copyright-text mb-0">Copyright &copy; {{ date('Y') }} | Hirazahid.</p>
        </div>
    </div>
</footer>
