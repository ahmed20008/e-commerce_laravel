@extends('master')
@section('content')
    <div class="custom-product">

        <div class="trending-wrapper">
            <h2>Result of Product</h2>
            @foreach ($products as $product)
                <div class="searched-item">
                    <div class="trening-item">
                        <a href="detail/{{ $product['id'] }}">
                            <img class="trending-img" src="{{ $product['gallery'] }}" alt="">
                            <div class="trending-text">
                                <h2>{{ $product['name'] }}</h2>
                                <h5>{{ $product['description'] }}</h5>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
