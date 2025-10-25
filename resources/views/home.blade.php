@extends('layouts.app')

@section('title', 'Toyishland: Premium Kids Toys Online Shopping in Pakistan')

@section('content')
    <!-- Hero Slider -->
    <section class="hero-slider">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="{{ url('/shop') }}">
                        <img src="https://toyishland.com/wp-content/uploads/2023/05/Banner-1.webp" class="d-block w-100" alt="Online Toys Shop in Pakistan">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="{{ url('/shop') }}">
                        <img src="https://toyishland.com/wp-content/uploads/2024/02/We-Banner-Storm-Chaser-1.webp" class="d-block w-100" alt="Storm Chaser Toy">
                    </a>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

       



<!-- New Arrival Products -->
<section class="products-section">
    <div class="container">
        <div class="section-header">
            <p>New Arrival Products</p>
            <div class="divider"></div>
        </div>
        
        <div class="row g-4">
            @php
                $products = [
                    [
                        'image' => 'https://toyishland.com/wp-content/uploads/2025/09/Jeep-Black-Blue-2.webp',
                        'name' => 'Legender',
                        'price' => '29,500'
                    ],
                    [
                        'image' => 'https://toyishland.com/wp-content/uploads/2025/09/orange-6.jpg',
                        'name' => 'Raptor',
                        'price' => '4,850'
                    ],
                    [
                        'image' => 'https://toyishland.com/wp-content/uploads/2024/11/Bentley-2.png',
                        'name' => 'Benny Ride',
                        'price' => '1,699'
                    ],
                    [
                        'image' => 'https://toyishland.com/wp-content/uploads/2024/11/BMW-Red-2.png',
                        'name' => 'Sports Ride',
                        'price' => '1,699'
                    ]
                ];
            @endphp
            
            @foreach($products as $product)
                <div class="col-lg-3 col-md-6">
                    <div class="product-item">
                        <div class="product-image">
                            <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}">
                            <div class="product-actions">
                                <button class="add-to-cart" data-product-id="{{ $loop->index }}">
                                    <i class="fas fa-shopping-bag"></i>
                                </button>
                            </div>
                        </div>
                        <div class="product-details">
                            <h3 class="product-title">{{ $product['name'] }}</h3>
                            <div class="product-price">₨ {{ $product['price'] }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Slides Section -->
<section class="container py-5">
    <div class="section-header">
        <p>Popular Slides</p>
        <div class="divider"></div>
    </div>
    
    <div class="row g-4">
        @php
            $slides = [
                [
                    'image' => 'https://toyishland.com/wp-content/uploads/2025/06/bumpy-slide-1.webp',
                    'name' => 'Bumpy Slide',
                    'price' => '10,400'
                ],
                [
                    'image' => 'https://toyishland.com/wp-content/uploads/2020/08/baby-sl2.jpg',
                    'name' => 'Large Slide',
                    'price' => '8,400'
                ],
                [
                    'image' => 'https://toyishland.com/wp-content/uploads/2020/08/Jumbo-Slide.webp',
                    'name' => 'Jumbo Slide',
                    'price' => '14,200'
                ],
                [
                    'image' => 'https://toyishland.com/wp-content/uploads/2020/08/5-4.jpg',
                    'name' => 'Medium Slide',
                    'price' => '6,150'
                ]
            ];
        @endphp
        
        @foreach($slides as $slide)
            <div class="col-lg-3 col-md-6">
                <div class="product-item">
                    <div class="product-image">
                        <img src="{{ $slide['image'] }}" alt="{{ $slide['name'] }}">
                        <div class="product-actions">
                            <button class="add-to-cart" data-product-id="slide-{{ $loop->index }}">
                                <i class="fas fa-shopping-bag"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-details">
                        <h3 class="product-title">{{ $slide['name'] }}</h3>
                        <div class="product-price">₨ {{ $slide['price'] }}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>


    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <h2>Who We Are</h2>
                        <div class="divider" style="margin: 0 0 20px;"></div>
                        <p>Since the past 25 years, Toyishland has understood the need of toys for children to encourage imaginative play and ensure safety for the little ones. Decades later, we serve to manufacture toys which are creatively designed, possessing the latest technology and cater mental and physical growth in children.</p>
                        <p>We deliver a vast range of toys for children aged between 1 to 8 years. Since 1995, we have pioneered in manufacturing battery operated ride-on cars, swing cars, push cars, slides, storage cabinets and much more.</p>
                        <div class="about-buttons mt-4">
                            <a href="{{ url('/about-us') }}" class="btn btn-custom me-3">Read More</a>
                            <a href="{{ url('/become-a-seller') }}" class="btn btn-custom">Become a Seller</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="https://toyishland.com/wp-content/uploads/2023/06/New-Project-40.webp" alt="About Toyishland" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials-section">
        <div class="container">
            <div class="section-header">
                <p>Reviews of our Client</p>
                <p>What Happy Parent Say</p>
                <div class="divider"></div>
            </div>
            
            <div class="row g-4">
                @php
                    $testimonials = [
                        [
                            'name' => 'Priya Kumar',
                            'avatar' => 'https://toyishland.com/wp-content/uploads/2020/10/Female-150x150.png',
                            'rating' => 5,
                            'content' => 'Toyishland is a lifesaver for parents and educators! I ordered a large quantity of slides for our school, and they arrived on schedule. The fact that they export to different regions shows their commitment to bringing joy to children everywhere.'
                        ],
                        [
                            'name' => 'Abdulrehman',
                            'avatar' => 'https://toyishland.com/wp-content/uploads/2023/03/male-150x150.jpg',
                            'rating' => 5,
                            'content' => 'I ordered a variety of toys in bulk for my daycare, and I couldn\'t be happier. The kids love them, and I appreciate how durable they are. The delivery was right on time.'
                        ],
                        [
                            'name' => 'Maheen Qureshi',
                            'avatar' => 'https://toyishland.com/wp-content/uploads/2020/10/Female-150x150.png',
                            'rating' => 5,
                            'content' => 'Thank you, Toyishland, for providing such amazing toys for kids that bring immense happiness to my children\'s lives!'
                        ],
                        [
                            'name' => 'Agha Asif',
                            'avatar' => 'https://toyishland.com/wp-content/uploads/2020/10/Male-150x150.png',
                            'rating' => 5,
                            'content' => 'I can confidently say that Toyishland is the best online toy shop in Pakistan. It\'s great to find a reliable online toy store that delivers both quality and fun.'
                        ]
                    ];
                @endphp
                
                @foreach($testimonials as $testimonial)
                    <div class="col-lg-6">
                        <div class="testimonial-item">
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{ $testimonial['avatar'] }}" alt="{{ $testimonial['name'] }}" class="testimonial-avatar">
                                <div>
                                    <div class="testimonial-author fw-bold">{{ $testimonial['name'] }}</div>
                                    <div class="testimonial-rating">
                                        @for($i = 1; $i <= 5; $i++)
                                            <i class="fas fa-star{{ $i <= $testimonial['rating'] ? '' : '-empty' }}"></i>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <p class="mb-0">"{{ $testimonial['content'] }}"</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        // Add to cart functionality
        $('.add-to-cart').on('click', function(e) {
            e.preventDefault();
            const productId = $(this).data('product-id');
            
            // Here you would typically make an AJAX call to add to cart
            console.log('Adding product to cart:', productId);
            
            // Show success message
            alert('Product added to cart successfully!');
        });
        
        // Initialize carousel
        $('#heroCarousel').carousel({
            interval: 4000
        });
    });
</script>
@endpush