@extends('layouts.master')
@section('title')
    Laravel Shopping cart
@stop

@section('content')
    @if (Session::has('cart'))
        <div class="row">
            <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                    @foreach ($products as $product)
                        <li class="list-group-item">Quantity :
                            <span class="badge badge-secondary ">{{$product['qty']}}</span>
                            <strong>{{$product['item']['title']}}</strong>
                            <span class="badge badge-success">{{$product['price']}}</span>
                            <div class="btn-group ">
                                <button type="button" class="btn btn-primary btn-xs dropdown-toggle  " data-toggle="dropdown">
                                    Action <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="">Reduce by 1</a></li>
                                    <li><a class="dropdown-item" href="">Reduce by All</a></li>
                                </ul>
                            </div>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
                <strong>Total Price : {{$totalPrice}}</strong>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3 ">
                <a href="{{route('stripe.post')}}" type="button" class="btn btn-success">CheckOut</a>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <h1>Empty Cart !</h1>
            </div>
        </div>
    @endif
@stop