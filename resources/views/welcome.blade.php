@extends('Layout.layout')
            @section('slides')
            <div class="content">
                 @include('includes.slides')
                    <hr class="line">
            </div>
            @endsection
            @section('content')
               <div class="row">
        @foreach($products as $product)
        <div class="col-md-3 col-sm-6">
            <div class="product-grid3">
                <div class="product-image3">
                    <a href="#">
                       
                        <img class="pic-1" src="{{URL::asset('/image/p (1).jpg')}}">
                        <img class="pic-2" src="{{URL::asset('/image/p (2).jpg')}}">
                       
                    </a>
                    <ul class="social">
                        <li><div class="btn-group btn-group">
                          <button type="button" class="btn btn-link"><a href="#"><i class="fa fa-shopping-bag"></i></a></button>
                          <form class="form-inline" action="#" method="POST">
                                {{ csrf_field() }}
                                  <input type="hidden" name="id" value="{{ $product->id}}">
                                <input type="hidden" name="name" value="{{ $product->name }}">
                                <input type="hidden" name="price" value="{{ $product->price }}">
                                <button type="submit" class="btn btn-link"><a><i class="fa fa-shopping-cart"></i></a></button>
                            </form>
                        
                        </div>
                    </li>
                        {{-- <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                        <li> 
                             <form class="form-inline" action="#" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <input type="hidden" name="name" value="{{ $product->name }}">
                                <input type="hidden" name="price" value="{{ $product->price }}">
                                <button type="submit" class="btn btn-link"><a href="#"><i class="fa fa-shopping-cart"></i></a></button>
                            </form></li>--}}
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
            @endsection
             @section('extra')
                       
                  <div class="container-fluid">
                    <div class="jumbotron jumbotron-fluid landing ">
                      <div class="row">
                          <p class="col-8">Сегодня в НБА двенадцать игроков носят Li-Ning, и семь из них носят фирменную обувь Уэйда</p>
                          <div class="col-4"><img src="{{URL::asset('/image/IMG_0196.PNG')}}" style="width: 50%"></div>
                      </div>
                    </div>
                  </div>
                   <div class="firstinfo landinginfo container-fluid"><p>Компания LI-NING — производитель спортивных товаров премиум класса из Китая. За всю историю спорта ни одна компания не оказала столь значительного влияния и непосредственного участия на развитие бадминтона, как Li-Ning. Сегодня Li-Ning является одним из ведущих производителей инвентаря, одежды и обуви для игры в бадминтон в мире, более того, этот премиальный китайский бренд представляет продукцию для таких видов спорта как бег, баскетбол, casualsport и др.</p></div>
            @endsection
            