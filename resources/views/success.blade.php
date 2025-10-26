@extends('layouts.app')

@section('title', 'Success | Toyishland - Explore Our Full Collection')

@section('content')
    <div class="container text-center py-5">
        <div class="mt-5"></div>
        <div class="card shadow-sm p-4 mx-auto" style="max-width: 500px;">
            <div class="mb-4">
                <img src="https://cdn-icons-png.flaticon.com/512/190/190411.png" alt="Success" width="80">
            </div>

            <h2 class="text-success mb-3">Thank You for Your Order!</h2>
            <p class="text-muted mb-4">
                Your order has been successfully placed.  
                We’ll send you a confirmation email shortly with your order details.
            </p>

            <hr>

            <div class="mt-4">
                <a href="{{ url('/') }}" class="btn btn-primary px-4">Continue Shopping</a>
            </div>
        </div>
    </div>


@endsection

@push('scripts')
@endpush

