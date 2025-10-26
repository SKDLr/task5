@extends('layouts.app')

@section('title', 'Shop | Toyishland - Explore Our Full Collection')

@section('content')
    <!-- Shop Banner -->
    <section class="shop-banner">
        <div class="mt-5"></div>

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
                                <a href="{{ url('/productone0') }}" class="btn btn-outline-primary mt-2">
                                    View Product
                                     </a>

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
                             <a href="{{ url('/productone0') }}" class="btn btn-outline-primary mt-2">
                                    View Product
                                     </a>
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
                            'image' => 'https://m.media-amazon.com/images/I/61nyttr-WdL._AC_UF1000,1000_QL80_.jpg',
                            'name' => 'Swing Car',
                            'price' => '3,400'
                        ],
                        [
                            'image' => 'https://www.allinonestore.pk/cdn/shop/files/3-tiered-foldable-storage-cabinet-freestanding-toy-organizing-cart-665302.webp?v=1755459864&width=720',
                            'name' => 'Toy Storage Cabinet',
                            'price' => '6,500'
                        ],
                        [
                            'image' => 'https://img.drz.lazcdn.com/static/pk/p/1506bf32eb5baf16dbebdfab8f5d9248.jpg_720x720q80.jpg',
                            'name' => 'Push Car',
                            'price' => '2,999'
                        ],
                        [
                            'image' => 'https://isakaabengaluru.s3.ap-south-1.amazonaws.com/wp-content/uploads/2022/04/29125346/Hf49b0a6a3bf3415f9c9ba206cb6b6b0ak.jpg',
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
                                 <a href="{{ url('/productone0') }}" class="btn btn-outline-primary mt-2">
                                    View Product
                                     </a>
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
                        'image' => 'https://thestationers.pk/cdn/shop/files/wooden-double-abc-blocks-the-stationers.jpg?v=1708446799',
                        'name' => 'ABC Learning Blocks',
                        'price' => '2,200'
                    ],
                    [
                        'image' => 'https://www.montessoritrove.com/cdn/shop/articles/51oPSnunS-L._AC_SL1001.jpg?v=1720829421',
                        'name' => 'Color Shape Sorter',
                        'price' => '1,950'
                    ],
                    [
                        'image' => 'https://5.imimg.com/data5/ANDROID/Default/2022/12/SP/VN/TN/138441414/product-jpeg-500x500.jpg',
                        'name' => 'Maths Puzzle Board',
                        'price' => '2,600'
                    ],
                    [
                        'image' => 'https://thetoyfactory.pk/cdn/shop/files/3_1445x.webp?v=1756668939',
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
                             <a href="{{ url('/productone0') }}" class="btn btn-outline-primary mt-2">
                                    View Product
                                     </a>
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
        function updateCartCount() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            $('.cart-count').text(cart.length);
        }

        // Run it once when page loads
        updateCartCount();

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

            updateCartCount();

            alert(`${name} added to cart!`);
        });
    });
</script>
@endpush

