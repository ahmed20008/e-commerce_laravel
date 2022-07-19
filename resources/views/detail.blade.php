@extends('master')
@section('content')
    <div class="custom-product">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-fluid detail-img" src="{{ $product->gallery }}" alt="">
                </div>
                <div class="col-md-6">
                    <div>
                        <a href="/"><button class="btn btn-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                                </svg>
                            </button></a>
                        <br><br>
                        <h2>{{ $product->name }}</h2>
                        <h3>Rs {{ $product->price }}</h3>
                        <h5>{{ $product->category }}</h5>
                        <p>{{ $product->description }}</p>
                        <br>
                        <form action="/add_to_cart" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                            <button class="btn btn-primary">Add to cart</button>
                        </form>
                        <br><br>
                        <button class="btn btn-success">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
