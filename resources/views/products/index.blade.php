@extends('layout')

@section('title', 'List Product')

@section('content')

<!-- home content -->
<section class="home">
    <div class="content">
        <h1> <span>Electronic Products</span>
            <br>
            Up To <span id="span2">50%</span> Off
        </h1>
        <p>Uy tín - Chất lượng - Tạo nên thương hiệu.
            <br>Electronic luôn đồng hành cùng bạn.
        </p>
        <div class="btn"><button>Shop Now</button></div>
    </div>
    <div class="img">
        <img src="../images/background.png" alt="">
    </div>
</section>
<!-- home content -->

<!-- products -->
<div class="container" id="product-cards">
    <h1 class="text-center">PRODUCTS</h1>
    <p>Sản phẩm nổi bật:</p>
    <div class="row" style="margin-top: 20px;" id="product-hot">
        <!--  products cards hot -->
        @foreach($productList as $product)
        <div class="col-md-3 py-3">
            <a class="card" style="text-decoration: none" href="{{ route('products.show', $product->id) }}">
                <img src="{{ url($product -> img)}}" alt="">
                <div class="card-body">
                    <h3 class="text-center">{{ $product -> name }}</h3>
                    <p class="text-center">{{ $product -> description }}</p>
                    <div class="star text-center">
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                    </div>
                    <h2>{{ $product -> price }}<span>
                            <li class="fa-solid fa-cart-shopping"></li>
                        </span></h2>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
<!-- end list products cart   -->

@endsection