<footer class="main-footer">
    <div class="container">
        <div class="row g-4">
            <!-- About Column -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-column">
                    <h3>About Toyishland</h3>
                    <p>Toyishland is Pakistan's first toys making premium quality brand for Kids. With its own online toys shop, it's aiming to make kids toys shopping more reliable.</p>
                    <div class="mt-3">
                        <a href="#" class="text-light me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/shop') }}">Shop</a></li>
                        <li><a href="{{ url('/about-us') }}">About Us</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                        <li><a href="{{ url('/blog') }}">Blog</a></li>
                    </ul>
                </div>
            </div>

            

            <!-- Contact Info -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-column">
                    <h3>Contact Info</h3>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt me-2"></i> Karachi, Pakistan</li>
                        <li><i class="fas fa-envelope me-2"></i> info@toyishland.com</li>
                        <li><i class="fas fa-phone me-2"></i> +92 21 111 111 111</li>
                        <li><i class="fas fa-clock me-2"></i> Mon-Sun: 9AM - 6PM</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="copyright">
            <p>&copy; {{ date('Y') }} Toyishland. All Rights Reserved.</p>
        </div>
    </div>
</footer>