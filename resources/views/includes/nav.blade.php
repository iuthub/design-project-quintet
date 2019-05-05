
{{-- Navbar --}}
       <nav class="navbar site-header navbar-light navbar-expand-lg  justify-content-center sticky-top">
      <div class="container">
        <a class="navbar-brand" href="{{url('')}}"><img class="logo" src="{{URL::asset('/image/li-ning-black_large.png')}}"></a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
 
        <div class="collapse navbar-collapse" id="navbars">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('')}}">Главная <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="{{url('shop')}}"> Интернет магазин <span class="sr-only">(current)</span></a>
            </li>
           
            <li class="nav-item active">
              <a class="nav-link" href="{{url('about')}}"> О нас <span class="sr-only">(current)</span></a>
            </li>

             <li class="nav-item active">
              <a class="nav-link" href="#"> Блог <span class="sr-only">(current)</span></a>
            </li>

          
          </ul>
            <a class="nav-link ml-auto" href="{{url('cart')}}"><i class="fa fa-shopping-cart navb"></i></a>
            @if (Cart::instance('default')->count() > 0)
                            <span class="item-counter pl-1">{{ Cart::instance('default')->count() }}</span></span>
              @endif
        </div>
      </div>
    </nav>

{{-- Navbar end --}}
