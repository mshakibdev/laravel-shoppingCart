@extends('layouts.master')
@section('title')
    Laravel Shopping cart
@stop

@section('content')
    @foreach($products->chunk(3) as $porductChunk)
        <div class="row">
        @foreach($porductChunk as $product)

                <div class="col-md-4 col-sm-6">
                    <div class="card" style="width: 18rem;">
                        <img src="{{$product->imagePath}}" class="card-img-top img-responsive thumbnail" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->title}}</h5>
                            <p class="card-text description">{{$product->description}}</p>
                            <div class="price">{{$product->price}} $</div>
                            <a href="{{ route('product.add-to-cart',['id'=>$product->id]) }}" class="btn btn-success  ">Add to cart</a>
                        </div>
                    </div>
                </div>


            @endforeach
        </div>
        <br>
        @endforeach


@stop
