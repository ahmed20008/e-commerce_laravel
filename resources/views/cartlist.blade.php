@extends('master')
@section('content')
    <div class="custom-product">

        <div class="trending-wrapper">
            <h2>Cart Items</h2>
            @foreach ($products as $product)
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
                            <h2>{{ $product->name }}</h2>
                            <h4>Price : {{ $product->price }}</h4>
                            <h5>{{ $product->description }}</h5>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="/removecart/{{ $product->cart_id }}">
                            <button class="btn btn-danger">
                                Remove
                            </button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
