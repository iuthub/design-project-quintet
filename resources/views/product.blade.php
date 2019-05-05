@extends('Layout.layout')
  @section('content')
                   <h1>{{$product->name}}</h1>
                   <h1>{{$product->in_category}}</h1>
                   <h1>{{$product->color}}</h1>
                   <h1>{{$product->size}}</h1>
                   <h1>{{$product->season}}</h1>
                   <h1>{{$product->sex}}</h1>
                   <h1>{{$product->brand}}</h1>
                    <h1>{{$product->bar_code}}</h1>
                   <h1>{{$product->presentprice()}}</h1>
                     <img class="pic-1" src="{{URL::asset('image/products/'.$product->in_category.'/'.$product->slug.'/1.jpg')}}">
                        <img class="pic-2" src="{{URL::asset('image/products/'.$product->in_category.'/'.$product->slug.'/2.jpg')}}">
            @endsection