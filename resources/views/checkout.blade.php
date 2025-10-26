@extends('layouts.app')

@section('title', 'Checkout | Toyishland')

@section('content')
<section class="checkout-section py-5">
    <div class="container">
        <h2 class="fw-bold text-center mb-4">Checkout</h2>
        <div class="divider mx-auto mb-5"></div>

        <div class="row g-5">
            <!-- Billing Details -->
            <div class="col-lg-7">
                <div class="card shadow-sm border-0 rounded-3 p-4">
                    <h4 class="fw-bold mb-3">Billing Details</h4>
                    <form id="checkoutForm">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter your full name" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control" name="email" placeholder="you@example.com" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Phone Number</label>
                                <input type="text" class="form-control" name="phone" placeholder="03XX-XXXXXXX" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">City</label>
                                <input type="text" class="form-control" name="city" placeholder="Karachi, Lahore, Islamabad..." required>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control" name="address" placeholder="Street address, House no, etc." required>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Order Notes (Optional)</label>
                                <textarea class="form-control" name="notes" rows="3" placeholder="Any instructions for delivery?"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Order Summary -->
            <div class="col-lg-5">
                <div class="card shadow-sm border-0 rounded-3 p-4">
                    <h4 class="fw-bold mb-3">Your Order</h4>

                    <div id="orderSummary">
                        <ul class="list-group mb-3">
                            @php
                                $cartItems = [
                                    ['name' => 'Legender', 'price' => 29500],
                                    ['name' => 'Bumpy Slide', 'price' => 10400],
                                ];
                                $subtotal = array_sum(array_column($cartItems, 'price'));
                                $shipping = 500;
                                $total = $subtotal + $shipping;
                            @endphp

                            @foreach($cartItems as $item)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>{{ $item['name'] }}</span>
                                    <span>₨ {{ number_format($item['price']) }}</span>
                                </li>
                            @endforeach
                            <li class="list-group-item d-flex justify-content-between">
                                <strong>Subtotal</strong>
                                <strong>₨ {{ number_format($subtotal) }}</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Shipping</span>
                                <span>₨ {{ number_format($shipping) }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between fw-bold">
                                <span>Total</span>
                                <span>₨ {{ number_format($total) }}</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Payment Method -->
                    <div class="payment-method mb-4">
                        <h5 class="fw-semibold mb-3">Payment Method</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="paymentMethod" id="cod" checked>
                            <label class="form-check-label" for="cod">
                                Cash on Delivery
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="paymentMethod" id="bankTransfer">
                            <label class="form-check-label" for="bankTransfer">
                                Bank Transfer / Easypaisa
                            </label>
                        </div>
                    </div>

                    <!-- Place Order Button -->
                    <button type="submit" class="btn btn-custom w-100 py-2" id="placeOrderBtn">
                        <i class="fas fa-check-circle me-2"></i> Place Order
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    document.getElementById('placeOrderBtn').addEventListener('click', function(e) {
        e.preventDefault();
        window.location = "/success";
        // alert('✅ Thank you! Your order has been placed successfully.');
    });
</script>
@endpush
