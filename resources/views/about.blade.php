@extends('layouts.app')

@section('title', 'About Us | Toyishland')

@section('content')
<!-- Hero Section -->
<section class="about-hero text-center text-light py-5" style="background: url('https://toyishland.com/wp-content/uploads/2023/05/Banner-1.webp') center/cover no-repeat;">
    <div class="container py-5">
        <h1 class="fw-bold display-5">About Toyishland</h1>
        <p class="lead mt-3">Bringing smiles and imagination to life since 1995 🎠</p>
    </div>
</section>

<!-- Who We Are -->
<section class="py-5 about-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <img src="https://toyishland.com/wp-content/uploads/2023/06/New-Project-40.webp" alt="Toyishland Factory" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bold mb-3">Who We Are</h2>
                <div class="divider mb-3"></div>
                <p>For over 25 years, Toyishland has been Pakistan’s trusted name in the world of children’s toys. We take pride in designing, manufacturing, and delivering fun, safe, and educational toys that spark imagination and creativity.</p>
                <p>Our mission is simple: to bring joy to children while ensuring every product is safe, durable, and built with love. From ride-on cars to slides and learning toys — every Toyishland creation carries a promise of quality and happiness.</p>
                
            </div>
        </div>
    </div>
</section>

<!-- Our Vision & Mission -->
<section class="bg-light py-5">
    <div class="container text-center">
        <h2 class="fw-bold mb-3">Our Vision & Mission</h2>
        <div class="divider mx-auto mb-4"></div>
        <p class="mb-3">We envision a world where every child gets the chance to learn, explore, and play fearlessly. Our mission is to manufacture innovative toys that combine fun and safety to aid a child’s physical and cognitive development.</p>
        <p>We strive to remain a pioneer in Pakistan’s toy manufacturing industry — with local craftsmanship and global quality standards.</p>
    </div>
</section>

<!-- Our Products -->
<section class="py-5">
    <div class="container">
        <h2 class="fw-bold text-center mb-3">What We Make</h2>
        <div class="divider mx-auto mb-5"></div>
        <div class="row text-center g-4">
            @php
                $categories = [
                    ['img' => 'https://toyishland.com/wp-content/uploads/2024/11/BMW-Red-2.png', 'name' => 'Battery Operated Cars'],
                    ['img' => 'https://toyishland.com/wp-content/uploads/2025/06/bumpy-slide-1.webp', 'name' => 'Slides'],
                    ['img' => 'https://media.diy.com/is/image/KingfisherDigital/costway-7-in-1-swing-set-outdoor-metal-playset-kids-backyard-playground-w-slide~7984702722480_01c_MP?$MOB_PREV$&$width=1200&$height=1200', 'name' => 'Swings & Play Sets'],
                    ['img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOX7hUzKKJ2F9ogcGkV_eeQggl5_koWH-eIA&s', 'name' => 'Storage Cabinets']
                ];
            @endphp

            @foreach($categories as $cat)
            <div class="col-lg-3 col-md-6">
                <div class="product-item">
                    <div class="product-image">
                        <img src="{{ $cat['img'] }}" alt="{{ $cat['name'] }}" class="rounded shadow-sm">
                    </div>
                    <div class="product-details mt-2">
                        <h5 class="fw-semibold">{{ $cat['name'] }}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="bg-light py-5">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Why Choose Toyishland?</h2>
            <div class="divider mx-auto mb-4"></div>
        </div>
        <div class="row g-4">
            <div class="col-md-4 text-center">
                <i class="fas fa-child fa-3x text-primary mb-3"></i>
                <h5>Safe & Child-Friendly</h5>
                <p>All our toys are designed keeping your child’s safety and comfort as our top priority.</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-cogs fa-3x text-primary mb-3"></i>
                <h5>Locally Manufactured</h5>
                <p>100% made in Pakistan — promoting local craftsmanship and innovation.</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-smile fa-3x text-primary mb-3"></i>
                <h5>Trusted by Parents</h5>
                <p>Thousands of parents across the country trust Toyishland for quality and durability.</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact CTA -->
<section class="contact-cta py-5 text-center text-light" style="background: #333;">
    <div class="container">
        <h2 class="fw-bold">Want to Partner with Us?</h2>
        <p class="mb-4">Become a Toyishland reseller or distributor and spread the joy of play!</p>
        <a href="{{ url('/become-a-seller') }}" class="btn btn-custom">Become a Seller</a>
    </div>
</section>
@endsection
