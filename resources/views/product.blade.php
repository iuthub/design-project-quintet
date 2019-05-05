@extends('Layout.layout')
  @section('content')
                   <div class="breadcrumbs">
        <div class="container">
            <a href="/">Home</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <a href="{{ route('shop.index') }}">Shop</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>{{$product->name}}</span>
        </div>
    </div> <!-- end breadcrumbs -->

    <div class="product-section container">
        <div class="product-section-image">
          <div class="row" id="row1">
                <div class="mag1">
                  
              <div class="cointainer">
                <div class="mySlides" >
                  @if($product->in_category=='Socks'||$product->in_category=='Scarfs'||$product->in_category=='Hats'||$product->in_category=='Balls'||$product->in_category=='Bracelets')
                     <img data-toggle="magnify" src="{{URL::asset('image/products/Others/'.$product->slug.'/1.jpg')}}" >
                  @else
                     <img data-toggle="magnify" src="{{URL::asset('image/products/'.$product->in_category.'/'.$product->slug.'/1.jpg')}}" >
                  @endif
  
                </div>

                <div class="mySlides">
                    @if($product->in_category=='Socks'||$product->in_category=='Scarfs'||$product->in_category=='Hats'||$product->in_category=='Balls'||$product->in_category=='Bracelets')
                     <img data-toggle="magnify" src="{{URL::asset('image/products/Others/'.$product->slug.'/2.jpg')}}" >
                  @else
                     <img data-toggle="magnify" src="{{URL::asset('image/products/'.$product->in_category.'/'.$product->slug.'/2.jpg')}}" >
                  @endif
                </div>

                <div class="row">
                  <div class="column">
                    @if($product->in_category=='Socks'||$product->in_category=='Scarfs'||$product->in_category=='Hats'||$product->in_category=='Balls'||$product->in_category=='Bracelets')
                     <img class="demo cursor" src="{{URL::asset('image/products/Others/'.$product->slug.'/1.jpg')}}" onclick="currentSlide(1)" >
                  @else
                     <img class="demo cursor" src="{{URL::asset('image/products/'.$product->in_category.'/'.$product->slug.'/1.jpg')}}" onclick="currentSlide(1)" >
                  @endif
                    
                  </div>
                  <div class="column"> 
                      @if($product->in_category=='Socks'||$product->in_category=='Scarfs'||$product->in_category=='Hats'||$product->in_category=='Balls'||$product->in_category=='Bracelets')
                     <img class="demo cursor" src="{{URL::asset('image/products/Others/'.$product->slug.'/2.jpg')}}" onclick="currentSlide(2)" >
                  @else
                     <img class="demo cursor" src="{{URL::asset('image/products/'.$product->in_category.'/'.$product->slug.'/2.jpg')}}" onclick="currentSlide(2)" >
                  @endif
                  </div>

                 
                  </div>
                </div> 
          </div>
                               
                </div>
        </div>
       

        <div class="product-section-information">
            <h1 class="product-section-title">{{ $product->name }}</h1>
            <div class="product-section-subtitle">{{ $product->details }}</div>
            <div class="product-section-subtitle">{{ $product->slug }}</div>
            <div class="product-section-subtitle">{{ $product->size }}</div>
            <div class="product-section-price">{{ $product->presentPrice() }}</div>

            <p>
                {{ $product->description }}
            </p>

            <p>&nbsp;</p>
      
       <form class="form-inline" action="{{ route('cart.store') }}" method="POST">
                        {{ csrf_field() }}
                          <input type="hidden" name="id" value="{{ $product->id}}">
                        <input type="hidden" name="name" value="{{ $product->name }}">
                        <input type="hidden" name="price" value="{{ $product->price}}">
                        <button type="submit" class="btn"><a>Add to Cart</a></button>
      </form>
            
        </div>
    </div>
            @endsection