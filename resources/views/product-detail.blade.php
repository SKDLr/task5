<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legender Ride - Product Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body class="bg-light">

    <div class="container py-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-5 text-center">
                <img src="https://toyishland.com/wp-content/uploads/2025/09/Jeep-Black-Blue-2.webp"
                     alt="Legender Ride"
                     class="img-fluid rounded shadow-sm mb-4">
            </div>

            <div class="col-md-5">
                <h2 class="fw-bold mb-3">Legender Ride</h2>
                <h4 class="text-success mb-3">₨ 29,500</h4>

                <p class="text-muted">
                    Experience the thrill of adventure with the <strong>Legender Ride</strong> —
                    a premium electric jeep designed for kids who love excitement and style.
                    Durable, safe, and packed with fun features, it’s perfect for every little driver!
                </p>

                <div class="d-flex gap-3 mt-4">
                    <button class="btn btn-primary px-4 add-to-cart">
                        <i class="fas fa-shopping-cart me-2"></i>Add to Cart
                    </button>

                    <a href="{{ url('/') }}" class="btn btn-outline-secondary px-4">
                        <i class="fas fa-arrow-left me-2"></i>Back to Shop
                    </a>
                </div>
            </div>
        </div>

        <hr class="my-5">

        <div class="text-center">
            <h4 class="mb-3">Product Description</h4>
            <p class="text-muted mx-auto" style="max-width: 700px;">
                The Legender Ride offers realistic driving fun with LED headlights, music player, 
                and rechargeable battery support. Designed for comfort and style, it’s built 
                to make every ride unforgettable.
            </p>
        </div>
    </div>

    <footer class="text-center py-4 mt-5 bg-white border-top">
        <p class="mb-0 text-muted">© {{ date('Y') }} Toyishland. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Simple Add to Cart functionality
        document.querySelector('.add-to-cart').addEventListener('click', function() {
            const product = {
                name: 'Legender Ride',
                price: 29500,
                image: 'https://toyishland.com/wp-content/uploads/2025/09/Jeep-Black-Blue-2.webp'
            };

            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart.push(product);
            localStorage.setItem('cart', JSON.stringify(cart));

            alert(`${product.name} added to your cart!`);
        });
    </script>
</body>
</html>
