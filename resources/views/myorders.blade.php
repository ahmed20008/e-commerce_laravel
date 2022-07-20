@extends('master')
@section('content')
    <div class="custom-product">

        <div class="trending-wrapper">
            <h2>My Orders</h2>
            @foreach ($orders as $product)
                <div class="row searched-item cart-list-spacer">
                    <div class="col-md-4">
                        <div class="trening-item">
                            <a href="detail/{{ $product->id }}">
                                <img class="trending-img" src="{{ $product->gallery }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">

                        <div class="trending-text">
                            <h3>{{ $product->name }}</h3>
                            <p>Status: {{ $product->status }}</p>
                            <p>Address: {{ $product->address }} {{ $product->city }} {{ $product->state }}</p>
                            <p>Zip Code: {{ $product->zip }}</p>
                            <p>Payment Status: {{ $product->payment_status }}</p>
                            <p>Payment method: {{ $product->payment_method }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
