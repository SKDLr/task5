@extends('layouts.app')

@section('title', 'Shop | Toyishland - Explore Our Full Collection')

@section('content')
    <!-- Shop Banner -->
    <section class="shop-banner">
        <div class="container text-center py-5">
            <h1 class="fw-bold">Shop All Toys</h1>
            <p class="text-muted">Browse our wide collection of premium ride-ons, slides, and educational toys.</p>
            <div class="divider mx-auto" style="width: 80px;"></div>
        </div>
    </section>

    <!-- Rides Section -->
    <section class="products-section">
        <div class="container">
            <div class="section-header">
                <p>Battery Operated & Push Rides</p>
                <div class="divider"></div>
            </div>

            <div class="row g-4">
                @php
                    $rides = [
                        [
                            'image' => 'https://toyishland.com/wp-content/uploads/2025/09/Jeep-Black-Blue-2.webp',
                            'name' => 'Legender Ride',
                            'price' => '29,500'
                        ],
                        [
                            'image' => 'https://toyishland.com/wp-content/uploads/2025/09/orange-6.jpg',
                            'name' => 'Raptor Ride',
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

                @foreach($rides as $ride)
                    <div class="col-lg-3 col-md-6">
                        <div class="product-item">
                            <div class="product-image">
                                <img src="{{ $ride['image'] }}" alt="{{ $ride['name'] }}">
                                <div class="product-actions">
                                    <button class="add-to-cart" data-product-id="ride-{{ $loop->index }}">
                                        <i class="fas fa-shopping-bag"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-details text-center">
                                <h3 class="product-title">{{ $ride['name'] }}</h3>
                                <div class="product-price">₨ {{ $ride['price'] }}</div>
                                <button class="btn btn-custom mt-2 add-to-cart" data-product-id="ride-{{ $loop->index }}">Add to Cart</button>
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
            <p>Slides Collection</p>
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
                        <div class="product-details text-center">
                            <h3 class="product-title">{{ $slide['name'] }}</h3>
                            <div class="product-price">₨ {{ $slide['price'] }}</div>
                            <button class="btn btn-custom mt-2 add-to-cart" data-product-id="slide-{{ $loop->index }}">Add to Cart</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Play Items Section -->
    <section class="products-section py-5">
        <div class="container">
            <div class="section-header">
                <p>Playtime & Fun Items</p>
                <div class="divider"></div>
            </div>
            
            <div class="row g-4">
                @php
                    $playItems = [
                        [
                            'image' => 'https://toyishland.com/wp-content/uploads/2025/02/swing-car.jpg',
                            'name' => 'Swing Car',
                            'price' => '3,400'
                        ],
                        [
                            'image' => 'https://toyishland.com/wp-content/uploads/2024/09/storage-cabinet.jpg',
                            'name' => 'Toy Storage Cabinet',
                            'price' => '6,500'
                        ],
                        [
                            'image' => 'https://toyishland.com/wp-content/uploads/2024/12/push-car.jpg',
                            'name' => 'Push Car',
                            'price' => '2,999'
                        ],
                        [
                            'image' => 'https://toyishland.com/wp-content/uploads/2024/12/kids-bike.jpg',
                            'name' => 'Kids Bike',
                            'price' => '5,800'
                        ]
                    ];
                @endphp

                @foreach($playItems as $item)
                    <div class="col-lg-3 col-md-6">
                        <div class="product-item">
                            <div class="product-image">
                                <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}">
                                <div class="product-actions">
                                    <button class="add-to-cart" data-product-id="play-{{ $loop->index }}">
                                        <i class="fas fa-shopping-bag"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-details text-center">
                                <h3 class="product-title">{{ $item['name'] }}</h3>
                                <div class="product-price">₨ {{ $item['price'] }}</div>
                                <button class="btn btn-custom mt-2 add-to-cart" data-product-id="play-{{ $loop->index }}">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Educational Toys Section -->
    <section class="container py-5">
        <div class="section-header">
            <p>Educational & Learning Toys</p>
            <div class="divider"></div>
        </div>
        
        <div class="row g-4">
            @php
                $education = [
                    [
                        'image' => 'https://toyishland.com/wp-content/uploads/2024/12/abc-blocks.jpg',
                        'name' => 'ABC Learning Blocks',
                        'price' => '2,200'
                    ],
                    [
                        'image' => 'https://toyishland.com/wp-content/uploads/2024/12/color-shape-sorter.jpg',
                        'name' => 'Color Shape Sorter',
                        'price' => '1,950'
                    ],
                    [
                        'image' => 'https://toyishland.com/wp-content/uploads/2024/12/maths-puzzle.jpg',
                        'name' => 'Maths Puzzle Board',
                        'price' => '2,600'
                    ],
                    [
                        'image' => 'https://toyishland.com/wp-content/uploads/2024/12/creative-drawing-board.jpg',
                        'name' => 'Creative Drawing Board',
                        'price' => '3,100'
                    ]
                ];
            @endphp

            @foreach($education as $toy)
                <div class="col-lg-3 col-md-6">
                    <div class="product-item">
                        <div class="product-image">
                            <img src="{{ $toy['image'] }}" alt="{{ $toy['name'] }}">
                            <div class="product-actions">
                                <button class="add-to-cart" data-product-id="edu-{{ $loop->index }}">
                                    <i class="fas fa-shopping-bag"></i>
                                </button>
                            </div>
                        </div>
                        <div class="product-details text-center">
                            <h3 class="product-title">{{ $toy['name'] }}</h3>
                            <div class="product-price">₨ {{ $toy['price'] }}</div>
                            <button class="btn btn-custom mt-2 add-to-cart" data-product-id="edu-{{ $loop->index }}">Add to Cart</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('.add-to-cart').on('click', function(e) {
            e.preventDefault();

            const productCard = $(this).closest('.product-item');
            const name = productCard.find('.product-title').text();
            const price = productCard.find('.product-price').text().replace('₨', '').trim();
            const image = productCard.find('img').attr('src');

            const product = { name, price, image };
            let cart = JSON.parse(localStorage.getItem('cart')) || [];

            cart.push(product);
            localStorage.setItem('cart', JSON.stringify(cart));

            alert(`${name} added to cart!`);
        });
    });
</script>
@endpush

