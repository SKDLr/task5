@extends('layouts.app')

@section('title', 'Your Cart | Toyishland')

@section('content')
<section class="cart-section py-5">
    <div class="container">
        <h1 class="fw-bold mb-4 text-center">🛒 Your Shopping Cart</h1>
        <div class="divider mx-auto mb-4" style="width: 80px;"></div>

        <div id="cart-container">
            <!-- Cart items will appear here -->
        </div>

        <div id="cart-summary" class="text-end mt-4 d-none">
            <h4>Total: ₨ <span id="cart-total">0</span></h4>
<a href="/checkout" class="btn btn-custom mt-3">
    Proceed to Checkout
</a>      </div>

        <div id="empty-cart" class="text-center text-muted">
            <h4>Your cart is empty 😔</h4>
            <a href="{{ url('/shop') }}" class="btn btn-custom mt-3">Go to Shop</a>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    function loadCart() {
        const cartData = JSON.parse(localStorage.getItem('cart')) || [];
        const container = document.getElementById('cart-container');
        const summary = document.getElementById('cart-summary');
        const empty = document.getElementById('empty-cart');
        const totalSpan = document.getElementById('cart-total');

        container.innerHTML = '';
        let total = 0;

        if (cartData.length === 0) {
            summary.classList.add('d-none');
            empty.classList.remove('d-none');
            return;
        }

        summary.classList.remove('d-none');
        empty.classList.add('d-none');

        cartData.forEach((item, index) => {
            total += parseFloat(item.price.replace(/,/g, ''));

            container.innerHTML += `
                <div class="cart-item d-flex align-items-center justify-content-between border-bottom py-3">
                    <div class="d-flex align-items-center">
                        <img src="${item.image}" alt="${item.name}" width="80" class="rounded me-3">
                        <div>
                            <h5 class="mb-1">${item.name}</h5>
                            <small class="text-muted">₨ ${item.price}</small>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-danger remove-item" data-index="${index}">Remove</button>
                </div>
            `;
        });

        totalSpan.textContent = total.toLocaleString();
        document.querySelectorAll('.remove-item').forEach(btn => {
            btn.addEventListener('click', function() {
                const index = this.dataset.index;
                removeItem(index);
            });
        });
    }

    function removeItem(index) {
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        cart.splice(index, 1);
        localStorage.setItem('cart', JSON.stringify(cart));
        loadCart();
    }

    document.addEventListener('DOMContentLoaded', loadCart);

    // Handle checkout (for now just alert)
    document.getElementById('checkout-btn').addEventListener('click', function() {
        alert('Proceeding to checkout...');
    });
</script>
@endpush
