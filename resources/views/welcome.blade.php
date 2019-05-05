@extends('Layout.layout')
            @section('slides')
            <div class="content">
                 @include('includes.slides')
                    <hr class="line">
            </div>
            @endsection
            @section('content')
                   @include('includes.products')
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
            