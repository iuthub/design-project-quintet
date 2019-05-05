@extends('Layout.layout')
			@section('slides')
            
            @endsection

             @section('content')
             <div class="container-fluid shopper">
             <div class="d-flex" id="wrapper" style="width: 100%;">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Categories</div>
      <div class="list-group list-group-flush">
        <a href="{{ route('shop.index', ['category' => 'Sneakers']) }}" class="list-group-item list-group-item-action bg-light">Sneakers</a>
        <a href="{{ route('shop.index', ['category' => 'Trousers&Tights']) }}" class="list-group-item list-group-item-action bg-light">Trousers/Tights</a>
        <a href="{{ route('shop.index', ['category' => 'Jackets&Vests']) }}" class="list-group-item list-group-item-action bg-light">Jackets/Vests</a>
        <a href="{{ route('shop.index', ['category' => 'Windbreakers']) }}" class="list-group-item list-group-item-action bg-light">Windbreakers</a>
        <a href="{{ route('shop.index', ['category' => 'Sweater&Hoodies']) }}" class="list-group-item list-group-item-action bg-light">Sweater/Hoodies</a>
        <a href="{{ route('shop.index', ['category' => 'Accessories&Equipments']) }}" class="list-group-item list-group-item-action bg-light">Accessories/Equipments</a>
        <a href="{{ route('shop.index', ['category' => 'T-Shirts&Tops']) }}" class="list-group-item list-group-item-action bg-light">T-Shirts/Tops</a>
        <a href="{{ route('shop.index', ['category' => 'Shorts']) }}" class="list-group-item list-group-item-action bg-light">Shorts</a>
        <a href="{{ route('shop.index', ['category' => 'Bags&Backpacks']) }}" class="list-group-item list-group-item-action bg-light">Bags/Backpacks</a>
        <a href="{{ route('shop.index', ['category' => 'Others']) }}" class="list-group-item list-group-item-action bg-light">Others</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            Price: 
            <li class="nav-item active">
              <a href="{{ route('shop.index', ['category'=> request()->category, 'sort' => 'low_high']) }}">Low to High</a> |
                    
            </li>
            <li class="nav-item">
              <a href="{{ route('shop.index', ['category'=> request()->category, 'sort' => 'high_low']) }}">High to Low</a>
            </li>
            
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        @include('includes.products')
         {{ $products->appends(request()->input())->links() }}
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->
        			
        		</div>
                  
             @endsection
