@extends('master')
@section('content')
    <div class="custom-product">
        <!-- Carousel wrapper -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <!-- Inner -->
            <div class="carousel-inner">
                @foreach ($products as $product)
                    @if ($loop->first)
                        <div class="carousel-item  active">
                        @else
                            <div class="carousel-item">
                    @endif

                    <a href="detail/{{ $product['id'] }}">
                        <img src="{{ $product->gallery }}" class="slider-img d-block w-100" alt="" />
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{ $product->name }}</h5>
                            <p>{{ $product->description }}</p>
                        </div>
                    </a>
            </div>
            @endforeach

        </div>
        <!-- Inner -->

        <!-- Controls -->
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
        </a>
    </div>
    <!-- Carousel wrapper -->
    </div>

    <div class="trending-wrapper">
        <h3>Trending Product</h3>
        @foreach ($products as $product)
            <div class="trending-item">
                <div class="trening-item">
                    <a href="detail/{{ $product['id'] }}">
                        <img class="trending-img" src="{{ $product['gallery'] }}" alt="">
                        <div class="trending-text">
                            <h3>{{ $product['name'] }}</h3>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
