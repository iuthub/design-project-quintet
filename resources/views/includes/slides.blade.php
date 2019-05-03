
{{-- slides --}}
    <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
  </ul>

  <div class="carousel-inner ">
    <div class="carousel-item justify-content-center active">
      <img class="d-block w-100 img-responsive" src="{{URL::asset('/image/slide-v2-1.jpg')}}"  alt="1" width="1100" height="500">
     {{--  <div class="carousel-caption">
        <h3>SPRING</h3>
      </div>    --}}
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 img-responsive" src="{{URL::asset('/image/slide-v2-4.jpg')}}" alt="2" width="1100" height="500">
     {{--  <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>    --}}
    </div>
 
  </div>

  <a class="carousel-control-prev left" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
{{-- slides end  --}}
