{{-- products --}}

<div class="container">
    <h3 class="h3">Hot now!</h3>
    <div class="row">
    	@foreach($products as $product)
        <div class="col-md-3 col-sm-6">
            <div class="product-grid3">
                <div class="product-image3">
                    <a href="{{route('shop.show',$product->slug)}}">
                        @if($product->in_category=='Socks'||$product->in_category=='Scarfs'||$product->in_category=='Hats'||$product->in_category=='Balls'||$product->in_category=='Braclets')
                        <img class="pic-1" src="{{URL::asset('image/products/Others/'.$product->slug.'/1.jpg')}}">
                        <img class="pic-2" src="{{URL::asset('image/products/Others/'.$product->slug.'/2.jpg')}}">
                        @elseif($product->in_category=='Polo')
                        <img class="pic-1" src="{{URL::asset('image/products/T-Shirts&Tops/'.$product->slug.'/1.jpg')}}">
                        <img class="pic-2" src="{{URL::asset('image/products/T-Shirts&Tops/'.$product->slug.'/2.jpg')}}">
                        @else
                        <img class="pic-1" src="{{URL::asset('image/products/'.$product->in_category.'/'.$product->slug.'/1.jpg')}}">
                        <img class="pic-2" src="{{URL::asset('image/products/'.$product->in_category.'/'.$product->slug.'/2.jpg')}}">
                        @endif
                    </a>
                    <ul class="social">
                    	<li><div class="btn-group btn-group">
						  <button type="button" class="btn btn-link"><a href="{{route('shop.show',$product->slug)}}"><i class="fa fa-shopping-bag"></i></a></button>
						  <form class="form-inline" action="{{ route('cart.store') }}" method="POST">
				                {{ csrf_field() }}
				                  <input type="hidden" name="id" value="{{ $product->id}}">
				                <input type="hidden" name="name" value="{{ $product->name }}">
				                <input type="hidden" name="price" value="{{ $product->price }}">
				                <button type="submit" class="btn btn-link"><a><i class="fa fa-shopping-cart"></i></a></button>
				            </form>
						
						</div>
					</li>
                    </ul>
                    {{-- <span class="product-new-label">New</span> --}}
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">{{$product->name}}</a></h3>
                    <div class="price">
                       {{$product->presentprice()}}
                    </div>
                  
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


{{-- products end --}}